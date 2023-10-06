<?php
include '../conexion/config.php';
include '../conexion/conexion.php';
include '../clases/Vista.php';
include '../clases/SessionChecker.php';

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    session_id();
    session_start();
    session_unset();
    session_destroy();

    header('Location: ../index.php');
    
    exit;
} else {
    header('Location: ../index.php');
    exit;
}