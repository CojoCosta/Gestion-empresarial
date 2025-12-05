<?php
class Usuario
{
    private $usuario;
    private $db;
    public function __construct()
    {
        $this->usuario = array();
        $this->db = new PDO('mysql:host=localhost;dbname=usuarios;charset=utf8', 'root', '');
    }

    public function setUsuario($nombre, $apellidos, $edad, $telefono, $imagen)
    {
        $sql = "INSERT INTO todos_usuarios(nombre,apellidos,edad,telefono,imagen) VALUES ('$nombre','$apellidos','$edad','$telefono','$imagen')";
        $result = $this->db->query($sql);
        $this->db = null;
        return $result;
    }

    public function getUsuario()
    {
        $sql = "SELECT * FROM todos_usuarios";
        $result = $this->db->query($sql);
        $this->usuario = $result->fetchAll(PDO::FETCH_ASSOC);
        $this->db = null;
        return $this->usuario;
    }
    
    public function borrar($id)
    {
        $sql = "DELETE FROM todos_usuarios WHERE id={$id}";
        $result = $this->db->query($sql);
        $this->db = null;
        return $result;
    }

    public function editar($id){
        $sql="SELECT nombre, apellidos, edad, telefono, imagen FROM todos_usuarios WHERE id={$id}";
        $result = $this -> db -> query($sql);
        $dato = $result -> fetchAll(PDO::FETCH_ASSOC);
        return $dato;
    }

    public function actualizar($id, $nombre, $apellidos, $edad, $telefono, $imagen)
    {
        $sql = "UPDATE todos_usuarios SET nombre = '$nombre', apellidos = '$apellidos', edad = '$edad', telefono = '$telefono', imagen = '$imagen' WHERE id='{$id}'";
        $result = $this->db->query($sql);
        $this->db = null;
        return $result;
    }
}
