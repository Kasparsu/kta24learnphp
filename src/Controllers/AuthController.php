<?php

namespace App\Controllers;

use App\Models\User;
use PDOException;

class AuthController {
    public function registerForm() {
        include 'views/auth/register.php';
    }
    public function register() {
       
        $email = $_POST['email'] ?? null;
        $password = $_POST['password'] ?? null;
        $passwordConfirm = $_POST['password_confirm'] ?? null;

        if($email && $password && $password === $passwordConfirm) {
            try {
                $user = new User();
                $user->email = $email;
                $user->password = $password;
                $user->save();
                redirect('/login');
                return;
            } catch (PDOException $e) {
                redirect('/register');
            }
        }
        redirect('/register');
    }

    public function loginForm() {
        include 'views/auth/login.php';
    }

    public function login() {
        $email = $_POST['email'] ?? null;
        $password = $_POST['password'] ?? null;
        if(!$email || !$password) {
            redirect('/login');
            return;
        }
        $users = User::where('email', $email);
        $user = $users[0] ?? null;
        if($user && $user->password === $password) {
            $_SESSION['userId'] = $user->id;
            redirect('/');
            return;         
        }
        redirect('/login');
    }

    public function logout(){
        unset($_SESSION['userId']);
        redirect('/');
    }
}


