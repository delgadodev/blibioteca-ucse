<?php
include '../conexion/config.php';
include '../conexion/conexion.php';
include '../clases/Vista.php';
include '../clases/usuario.php';

$apellido = "";
$nombre = "";
$password = "";
$telefono = "";
$email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $usuario = new Usuario();
    $usuario->setNombre($_POST["nombre"]);
    $usuario->setApellido($_POST["apellido"]);
    $usuario->setPassword(password_hash($_POST["password"], PASSWORD_DEFAULT));
    $usuario->setTelefono($_POST["telefono"]);
    $usuario->setEmail($_POST["email"]);
    $usuario->setAdmin(0);
    $usuario->save();

    header('Location: ../index.php');
    exit;
} else {
    $vista = new Vista();
    $vista->set('apellido', $apellido);
    $vista->set('nombre', $nombre);
    $vista->set('password', $password);
    $vista->set('telefono', $telefono);
    $vista->set('email', $email);
    $vista->render('../vistas/auth/register.php', false);
}
?>






