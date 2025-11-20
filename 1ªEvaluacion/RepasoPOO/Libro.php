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

    public function __construct($autor, $titulo, $paginas, $refLibro, $vecesPrestado)
    {
        $this->autor = $autor;
        $this->titulo = $titulo;
        $this->paginas = $paginas;
        $this->refLibro = self::$refLibro;
        $this->vecesPrestado = $vecesPrestado;
        $this->vecesPrestado = FALSE;
        self::$numeroDeLibros++;
    }

    #region METODOS GET
    public function getAutor()
    {
        return $this->autor;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getPaginas()
    {
        return $this->paginas;
    }
    #endregion
    #region METODOS SET
    function setRefLibro($refLibro)
    {
        if (strlen($refLibro) > 3) {
            $this->refLibro = $refLibro;
        } else {
            echo '<p> Longitud no válida <p>';
        }
    }

    public function setPrestado()
    {
        $this->prestado++;
    }

    public function setContieneCD()
    {
        $this->contieneCD = TRUE;
    }
    #endregion
    #region METODOS PRINT
    public function printAutor()
    {
        echo " Autor: " . $this->autor;
    }
    public function printTitulo()
    {
        echo " Título: " . $this->titulo;
    }
    public function printLibro()
    {
        echo "Autor: " . $this->autor . "<br>";
        echo "Título: " . $this->titulo . "<br>";
        if (strlen($this->refLibro) > 0) {
            echo "Referencia: " . $this->refLibro . "<br>";
        }
        echo "Libro prestado: " . $this->vecesPrestado . " veces" . "<br>";
        if ($this->contieneCD) {
            echo "Si contiene CD" . "<br>";
        }
    }
    #endregion
#region MAIN

#endregion

}
