<?php

namespace App\GraphQL\Datasource;

use App\GraphQL\Resolvers\Mutation\Auth;
use Exception;
use PDOException;


class AuthDataSource extends BaseDataSource
{
    protected string $REGISTER_NEW_USER = "INSERT  INTO users (username, email, password, created_at,isGuest) VALUES (:user, :email, :password, DEFAULT,:isGuest)";
    protected string $GET_USER_ID = "SELECT id FROM users WHERE username = :user";
    protected string $GET_LAST_GUEST_ADDED_USER = "SELECT * FROM users WHERE isGuest=1 ORDER BY created_at DESC LIMIT 1";
    protected string $DELETE_USER = "DELETE FROM users WHERE id = :id";
    protected string $DELETE_ALL_GUESTS_USERS = "DELETE FROM users WHERE isGuest = 1 AND guest_expired_at < NOW()";
    protected string $REGISTER_GUEST = "INSERT INTO users (username, email, password, created_at,isGuest,guest_expired_at) VALUES (DEFAULT, DEFAULT, 123, DEFAULT,1,NOW() + INTERVAL 1 HOUR)";
    protected string $CHANGE_DETAILS = "UPDATE users t SET t.username = :username, t.email = :email WHERE t.id = :userId";
    protected string $CHANGE_PASSWORD = "UPDATE users t SET t.password = :password WHERE t.id = :userId";
    protected string $GET_USER_BY_ID = "SELECT * FROM users WHERE id = :id";
    protected string $CHANGE_GUEST_TO_USER = "UPDATE users t SET t.username = :user, t.email=:email,isGuest=0,password=:password WHERE t.id = :userId";

    public function handleRegister($password, $username, $email, $guest = false, $userId = null)
    {
        $userExists = $this->db->query("SELECT COUNT(*) as count FROM users WHERE username = :username", [':username' => $username])->find()['count'] > 0;
        $emailExists = $this->db->query("SELECT COUNT(*) as count FROM users WHERE email = :email", [':email' => $email])->find()['count'] > 0;
        if ($userExists || $emailExists) {
            return ([
                'successful' => false,
                'userId' => null,
                'existingUser' => $userExists,
                'existingEmail' => $emailExists,

            ]);
        }

        try {
            if (!$userId) {
                $this->db->query($this->REGISTER_NEW_USER, [':user' => $username, ':email' => $email, ':password' => $password, ':isGuest' => $guest ? 1 : 0]);
                $id = $this->db->query($this->GET_USER_ID, [':user' => $username])->find();
                $id = $id['id'];
            } else {
                $this->db->query($this->CHANGE_GUEST_TO_USER, [':user' => $username, ':email' => $email, ':password' => $password, ':userId' => $userId]);
                $id = $userId;
            }
        } catch (PDOException  $e) {
            $code = $e->getCode();
            if ($code == 23000) {
                $hasUsername = str_contains($username, 'username');
                $hasEmail = str_contains($username, 'email');
                if ($hasEmail || $hasUsername) {
                    return ([
                        'successful' => false,
                        'userId' => null,
                        'existingUser' => $hasUsername,
                        'existingEmail' => $hasEmail,
                    ]);
                }
            }
            return ([]);
        }

        $user = [
            'id' => $id,
            'username' => $username,
            'email' => $email,
            'isGuest' => $guest,
        ];

        Auth::newSession($user);
        if (!isset($userId)) {
            insertData();
        }
        return ([
            'successful' => true,
            'userId' => $id,
        ]);
    }


    public function handleLogin($plainPassword, $username)
    {
        $user = $this->db->query("SELECT * FROM users WHERE username = :username", [
            ':username' => $username
        ])->get();

        if (!$user) {
            return ['message' => 'USER_NOT_FOUND', 'validity' => null];
        };

        $user = $user[0];
        if (!password_verify($plainPassword, $user['password'])) {
            return ['message' => 'INVALID_PASSWORD', 'validity' => null];
        }

        return [
            'message' => 'credentials are correct',
            'validity' => true,
            'user' => self::formatUser($user),
        ];
    }

    public function handleDeleteUser($id)
    {
        $this->db->query($this->DELETE_USER, ['id' => $id]);
        return true;
    }

    public function handleNewGuest()
    {
        $this->db->query($this->REGISTER_GUEST);
        $user = $this->db->query($this->GET_LAST_GUEST_ADDED_USER)->find();
        Auth::newSession($user);
        insertData();
        return $user['id'];
    }

    public function cleanGuests()
    {
        $this->db->query($this->DELETE_ALL_GUESTS_USERS);
        return "Old guest users deleted successfully at " . date('Y-m-d H:i:s') . "\n";
    }

    public function changeProfile($newName, $newEmail, $userId, $oldPassword, $newPassword)
    {
        $this->db->query($this->CHANGE_DETAILS, ['username' => $newName, 'email' => $newEmail, 'userId' => $userId]);
        if ($newPassword) {
            $newPassword = password_hash($newPassword, PASSWORD_DEFAULT);
            $password = $this->db->query('SELECT password from users u WHERE u.id=:id ', ['id' => $userId])->find()['password'];
            if (password_verify($oldPassword, $password)) {
                $this->db->query($this->CHANGE_PASSWORD, ['password' => $newPassword, 'userId' => $userId]);
                return ['message' => 'PROFILE_DETAILS_CHANGED', 'successful' => true];
            } else {
                return ['message' => 'PASSWORD DOES NOT MATCH', 'successful' => false];
            }
        }
        return ['message' => 'PROFILE_DETAILS_CHANGED', 'successful' => true];
    }

    /**
     * @throws Exception
     */
    public function getUser($id)
    {
        try {
            $result = $this->db->query($this->GET_USER_BY_ID, ['id' => $id])->get();
            if (empty($result)) {
                return null; // No user found
            }
            return self::formatUser($result[0]);
        } catch (PDOException $e) {
            error_log("Database error: " . $e->getMessage()); // Log the error
            return null; // Handle gracefully
        }
    }

    public function markTourTaken($userId)
    {
        try {
            $this->db->query("UPDATE users SET taken_tour = 1 WHERE id = :id", ['id' => $userId]);
            return true;
        } catch (PDOException $e) {
            error_log("Failed to mark tour as taken: " . $e->getMessage());
            return false;
        }
    }
    protected static function formatUser($user): array
    {
        return [
            'id' => $user['id'],
            'username' => $user['username'],
            'email' => $user['email'],
            'isGuest' => $user['isGuest'],
            'last_updated' => $user['last_updated'],
            'created_at' => $user['created_at'],
            'takenTour' => $user['taken_tour']
        ];
    }
}
