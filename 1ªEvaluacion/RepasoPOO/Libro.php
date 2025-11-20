<?php
class Libro
{
    private $autor;
    private $titulo;
    private $paginas;
    private $vecesPrestado;
    private $contieneCD;
    private static $refLibro = 1;
    public static $numeroDeLibros = 0;

    public function __construct($autor, $titulo, $paginas, $refLibro, $vecesPrestado){
        $this->autor = $autor;
        $this->titulo = $titulo;
        $this->paginas = $paginas;
        $this->refLibro = self::$refLibro;
        $this->vecesPrestado = $vecesPrestado;
        $this->vecesPrestado = FALSE;
    }

#region METODOS GET
    public function getAutor(){
        return $this->autor;
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function getPaginas(){
        return $this->paginas;
    }
#endregion
#region METODOS PRINT
    public function printAutor(){
        echo " Autor: ".$this->autor;
    }
    public function printTitulo(){
        echo " Título: ".$this->titulo;
    }
    public function printLibro(){
        echo "Autor: ".$this->autor;
        echo "Título: ".$this->titulo;
        echo "Páginas: ".$this->paginas;
    }
#endregion


}
