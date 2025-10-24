<?php

class Empleado{
    private $empleado;
    private $database;

    public function __construct()
    {
        $this -> empleado = array();
        $this -> database = new PDO('mysql:host=localhost;dbname=ejemplo_mvc;charset=utf8','root','');
    }

    public function setEmpleado($nombre, $apellidos, $telefono, $departamento){
        $sql="INSERT INTO empleados(nombre,apellidos,telefono,departamento) VALUES ('$nombre','%apellidos','$telefono','$departamento')";
        $result = $this -> database -> query($sql);
        $this -> database = null;
        return $result;
    }

    
}