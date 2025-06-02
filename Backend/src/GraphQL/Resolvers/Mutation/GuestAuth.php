<?php

    namespace App\GraphQL\Resolvers\Mutation;


    use Core\Session;

    class GuestAuth extends Auth
    {

        public function handleNewGuest()
        {
            return $this->ds()->handleNewGuest();
        }

        public function deleteGuestSession()
        {
            $sessionInfo = self::getCurrentUser();
            $user = $sessionInfo['user'];
            if (!$user['isGuest']) {
                return false;
            }
            $this->ds()->handleDeleteUser($user['id']);
            Session::destroy();
            return true;
        }

        public function deleteAllGuestSession()
        {
            try {
                return $this->ds()->cleanGuests();
            } catch (\PDOException  $e) {
                error_log("Guest cleanup failed: " . $e->getMessage());
                echo "Error: " . $e->getMessage() . "\n";
            }
        }
    }