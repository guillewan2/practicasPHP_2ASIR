<?php
class Producto
{
    private string $nombre;
    private float $precio = 0;

    public function __construct(string $nombre, float $precio) {
        // Asi declaramos sin parametros
        $this->setNombre($nombre);
        $this->setPrecio($precio);
    }
    function setPrecio(float $precio)
    {
        if ($precio > 0) {
            $this->precio = $precio;
        }
    }

    function setNombre(string $nombre)
    {
        $this->nombre = $nombre;
    }

    function getPrecio()
    {
        return $this->precio;
    }

    function getNombre()
    {
        return $this->nombre;
    }
};
