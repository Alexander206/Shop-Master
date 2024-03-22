<?php

class SessionUser
{

    private string $userData = "userData";
    private string $isLoggedIn = "isLoggedIn";
    private string $expirationTime = "expirationTime";
    private string $lastActivityTime = "lastActivityTime";

    public function __construct()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function login($userData, $expirationTime): void
    {

        $_SESSION[$this->userData] = $userData;
        $_SESSION[$this->isLoggedIn] = true;
        $_SESSION[$this->expirationTime] = $expirationTime;
        $_SESSION[$this->lastActivityTime] = time();
    }

    public function logout()
    {
        session_unset();
        session_destroy();
    }

    public function getUserData()
    {
        return isset($_SESSION[$this->userData]) ? $_SESSION[$this->userData] : null;
    }

    public function isLoggedIn(): bool
    {
        return isset($_SESSION[$this->isLoggedIn]) && !empty($_SESSION[$this->isLoggedIn]);
    }

    public function getLastActivityTime()
    {
        return isset($_SESSION[$this->lastActivityTime]) ? $_SESSION[$this->lastActivityTime] : null;
    }
}
