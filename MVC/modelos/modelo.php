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
        $sql="INSERT INTO empleados(nombre,apellidos,telefono,depart) VALUES ('$nombre','$apellidos','$telefono','$departamento')";
        $result = $this -> database -> query($sql);
        $this -> database = null;
        return $result;
    }

    public function getEmpleado(){
        $sql = "SELECT * FROM empleados";
        $result = $this -> database -> query($sql);
        $this -> empleado = $result -> fetchAll(PDO:: FETCH_ASSOC);
        $this -> database = null;
        return $this -> empleado;
    }
}