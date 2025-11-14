<?php

class Empleado{
    private $empleado;
    private $database;

    public function __construct()
    {
        $this -> empleado = array();
        $this -> database = new PDO('mysql:host=localhost;dbname=ejemplo_mvc;charset=utf8','root','');
    }

    public function setEmpleado($nombre, $apellidos, $telefono, $departamento,$imagen){
        $sql="INSERT INTO empleados(nombre,apellidos,telefono,depart,imagen) VALUES ('$nombre','$apellidos','$telefono','$departamento','$imagen')";
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
    
    public function editar($id){
        $sql="SELECT nombre, apellidos, telefono, depart, imagen FROM empleados WHERE id={$id}";
        $result = $this -> database -> query($sql);
        $dato = $result -> fetchAll(PDO::FETCH_ASSOC);
        return $dato;
    }
    public function actualizar($id, $nombre, $apellidos, $telefono, $departamento, $imagen){
        $sql = "UPDATE empleados SET nombre = '$nombre', apellidos = '$apellidos', telefono = '$telefono', departamento = '$departamento', imagen = '$imagen' WHERE id='{$id}'";
        $result = $this -> database -> query($sql);
        $this -> database = null;
        return $result;
    }

    public function borrar($id){
        $sql= "DELETE FROM empleados WHERE id={$id}";
        $result = $this -> database -> query($sql);
        $this -> database = null;
        return $result;
    }
}