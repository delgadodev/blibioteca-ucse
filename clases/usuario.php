<?php
include 'Modelo.php';

class Usuario extends Modelo {

    public $id;
    protected $nombre;
    protected $apellido;
    protected $password;
    protected $telefono;
    protected $email;
    protected $admin;

    public function __construct()
    {
        $this->tabla = 'users';
        parent::__construct();
    }    

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function setPassword($password)
    {
        $this->password= $password;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setTelefono($telefono)
    {
        $this->telefono= $telefono;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }
    
    public function setAdmin($admin)
    {
        $this->admin= $admin;
    }

    public function getAdmin()
    {
        return $this->admin;
    }

    public function setEmail($email)
    {
        $this->email= $email;
    }

    public function getEmail()
    {
        return $this->email;
    }


    public function save(){
        
        $query = "INSERT INTO $this->tabla (nombre, apellido, password, telefono, email, admin) VALUES (:nombre, :apellido, :password, :telefono, :email, :admin)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nombre', $this->nombre);
        $stmt->bindParam(':apellido', $this->apellido);
        $stmt->bindParam(':password', $this->password);
        $stmt->bindParam(':telefono', $this->telefono);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':admin', $this->admin);
        $stmt->execute();

    }

}