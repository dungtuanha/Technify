<?php
class Session{

    public function Hello(){
        return "Hello";
    }

    public function __construct(){
        session_start();
    }

    public function set($key, $value){
        $_SESSION[$key] = $value;
    }

    public function get($key){
        return $_SESSION[$key] ?? '';
    }

    public function remove($key){
        unset($_SESSION[$key]);
    }

    public function isGuest(){
        return !isset($_SESSION['user']);
    }

    public function isRegularUser(){
        return isset($_SESSION['user']) && !isset($_SESSION['isAdmin']);
    }
}