<?php

class Avion
{
    public $id_avion;
    public $nombre_avion;
    public $capacidad_avion;
    public $color_avion;
    public $origen_avion;
    public $destino_avion;

    public function __construct($id_avion, $nombre_avion, $capacidad_avion, $color_avion, $origen_avion, $destino_avion)
    {
        $this->id_avion = $id_avion;
        $this->nombre_avion = $nombre_avion;
        $this->capacidad_avion = $capacidad_avion;
        $this->color_avion = $color_avion;
        $this->origen_avion = $origen_avion;
        $this->destino_avion = $destino_avion;
    }

    public function cambiarColor($nuevo_color)
    {
        $this->color_avion = $nuevo_color;
    }

    public function cambiarOrigen($nuevo_origen)
    {
        $this->origen_avion = $nuevo_origen;
    }

    public function cambiarDestino($nuevo_destino)
    {
        $this->destino_avion = $nuevo_destino;
    }

    public function mostrarOrigenMayusculas()
    {
        return strtoupper($this->origen_avion);
    }
}

// a) Crear 5 aviones
$avion1 = new Avion(1, "Boeing", "300 pasajeros", "azul", "Málaga", "Paris");
$avion2 = new Avion(2, "bombardier", "20 pasajeros", "blanco", "Paris", "Singapur");
$avion3 = new Avion(3, "caza", "2 pasajeros", "verde", "New York", "Chicago");
$avion4 = new Avion(4, "avioneta", "5 pasajeros", "rojo", "Vélez Málaga", "Bruselas");
$avion5 = new Avion(5, "raptor", "1 pasajero", "gris", "Madrid", "Londres");

$aviones = [$avion1, $avion2, $avion3, $avion4, $avion5];

echo "<h3>Estado inicial:</h3>";
foreach ($aviones as $avion) {
    echo "Avion {$avion->nombre_avion} - Color: {$avion->color_avion} - Origen: {$avion->origen_avion} - Destino: {$avion->destino_avion}<br>";
}

// b) Cambiarle el color al avión caza a color rojo
$avion3->cambiarColor("rojo");
echo "<h3>b) Caza color rojo:</h3>";
echo "Avion {$avion3->nombre_avion} ahora es color {$avion3->color_avion}<br>";

// c) cambiar el origen del avión avioneta a Sevilla, caza a Oporto
$avion4->cambiarOrigen("Sevilla");
$avion3->cambiarOrigen("Oporto");
echo "<h3>c) Nuevos orígenes:</h3>";
echo "Avion {$avion4->nombre_avion} ahora tiene origen {$avion4->origen_avion}<br>";
echo "Avion {$avion3->nombre_avion} ahora tiene origen {$avion3->origen_avion}<br>";

// d) cambiar destino Boeing a Lisboa
$avion1->cambiarDestino("Lisboa");
echo "<h3>d) Nuevo destino Boeing:</h3>";
echo "Avion {$avion1->nombre_avion} ahora tiene destino {$avion1->destino_avion}<br>";

// e) Todas las ciudades de origen en mayúsculas
echo "<h3>e) Orígenes en mayúsculas:</h3>";
foreach ($aviones as $avion) {
    echo $avion->mostrarOrigenMayusculas() . "<br>";
}

// f) cantidad de aviones que tenemos
function contarAviones($lista_aviones)
{
    return count($lista_aviones);
}
echo "<h3>f) Cantidad de aviones:</h3>";
echo "Tenemos " . contarAviones($aviones) . " aviones.<br>";

?>