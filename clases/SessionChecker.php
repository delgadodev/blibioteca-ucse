<?php
class SessionChecker {
    public static function check() {
        session_id();
        session_start();

        if (!isset($_SESSION["username"])) {
            header('Location: /auth/login.php');
            exit;
        }

        if (time() - $_SESSION["login_time_stamp"] > 3600) {
            session_unset();
            session_destroy();
            header('Location: /auth/login.php');
            exit;
        }
    }
}