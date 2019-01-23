<?php

class Auth {

    function __construct() {
        
    }

    public static function handleLogin() {
        session_start();
        $loggedIn = $_SESSION['loggedIn'];
        $role = $_SESSION['role'];
        $user = $_SESSION['user'];
        $email = $_SESSION['email'];
        $firstname = $_SESSION['firstname'];
        $lastname = $_SESSION['lastname'];

//        if (!$name and $loggedIn == FALSE) {
        if (!$role and $loggedIn == FALSE) {
            session_destroy();
            header('location: ' . URL);
            exit();
        }
    }
     
}
