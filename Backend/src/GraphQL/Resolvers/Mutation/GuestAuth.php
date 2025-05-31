<?php

    namespace App\GraphQL\Resolvers\Mutation;


    use Core\Session;

    class GuestAuth extends Auth
    {

        public function handleNewGuest()
        {

            // Create new user as a guest
// Create a session for him
            return $this->ds()->handleNewGuest();
        }

        public function deleteGuestSession()
        {
            $user = $this->getCurrentUser();
            if (!$user['isGuest']) {
                return false;
            }
            $this->ds()->handleDeleteUser($user['id']);
            Session::destroy();
            return true;
            //Get The Current Session
            // Executes Delete Query
            // Handle Logout
            // Delete that Guest
        }
    }