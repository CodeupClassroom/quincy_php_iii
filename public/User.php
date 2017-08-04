<?php
// class code
class User 
{

    public $username;
    public $email;
    public $password;
    public $isLoggedIn = false;

    public function changePassword($oldPassword, $newPassword)
    {
        if($this->isLoggedIn && $oldPassword == $this->password) {
            $this->password = $newPassword;
        }
    }

    public function login()
    {
        $this->isLoggedIn = true;   
    }

    public function logout()
    {
        $this->isLoggedIn = false;
    }
}