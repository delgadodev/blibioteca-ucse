<?php
include '../conexion/config.php';
include '../conexion/conexion.php';
include '../clases/Vista.php';
include '../clases/SessionChecker.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {       
    $stmt = $conn->prepare("SELECT password FROM users WHERE TRIM(email) = :email");

    $stmt->bindParam(":email", $_POST["email"]);

    $stmt->execute();

    $stmt->setFetchMode(\PDO::FETCH_ASSOC);

    $result = $stmt->fetch();

    if (empty($result)) {
        $msg = "Wrong username or password";
        $this->view->setAction('login');
        $this->view->set('msg', $msg);
        $this->view->render(false);
    } else {
        if (password_verify($_POST["password"], $result["password"])) {
            session_id();
            session_start();
            $_SESSION["email"] = $_POST["email"];                    
            $_SESSION["login_time_stamp"] = time();
            header('Location: ../index.php');
            exit;
        } else {                    
            $msg = "Wrong username or password";
            $vista = new Vista();
            $vista->set('conn', $conn);
            $vista->set('msg', $msg);
            $vista->render('../vistas/auth/login.php', false);
        }
    }
    exit;

    header('Location: index.php');    
} else {
    $vista = new Vista();
    $vista->set('conn', $conn);
    $vista->render('../vistas/auth/login.php', false);
}