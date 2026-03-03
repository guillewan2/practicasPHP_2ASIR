<?php

class Perro
{
    public $dni_perro;
    public $raza;
    public $color;
    public $edad;
    public $nombre;
    public $dueño;
    public $enfermedad;

    public function __construct($dni_perro, $raza, $color, $edad, $nombre, $dueño, $enfermedad)
    {
        $this->dni_perro = $dni_perro;
        $this->raza = $raza;
        $this->color = $color;
        $this->edad = $edad;
        $this->nombre = $nombre;
        $this->dueño = $dueño;
        $this->enfermedad = $enfermedad;
    }

    public function mostrarInfo()
    {
        return "DNI: $this->dni_perro | Raza: $this->raza | Color: $this->color | Edad: $this->edad | Nombre: $this->nombre | Dueño: $this->dueño | Enfermedad: $this->enfermedad";
    }
}

// 5 perros
$perro1 = new Perro("1111A", "Labrador", "Dorado", 3, "Toby", "Juan", "Otitis");
$perro2 = new Perro("2222B", "Pitbull", "Negro", 5, "Rex", "Maria", "Moquillo");
$perro3 = new Perro("3333C", "Caniche", "Blanco", 2, "Lilu", "Pedro", "Gastroenteritis");
$perro4 = new Perro("4444D", "Pastor Alemán", "Marrón", 4, "Lobo", "Ana", "Displasia");
$perro5 = new Perro("5555E", "Bulldog", "Gris", 6, "Thor", "Carlos", "Dermatitis");

$perros = [$perro1, $perro2, $perro3, $perro4, $perro5];

echo "<h2>Todos los perros:</h2><ul>";
foreach ($perros as $perro) {
    echo "<li>" . $perro->mostrarInfo() . "</li>";
}
echo "</ul>";

echo "<h2>Nombre de los 3 primeros perros:</h2><ul>";
for ($i = 0; $i < 3; $i++) {
    echo "<li>" . $perros[$i]->nombre . "</li>";
}
echo "</ul>";

echo "<h2>Modificando dueño de 2 de ellos:</h2>";
$perro1->dueño = "Alberto";
$perro2->dueño = "Laura";
echo "<ul>";
echo "<li>" . $perro1->mostrarInfo() . "</li>";
echo "<li>" . $perro2->mostrarInfo() . "</li>";
echo "</ul>";

echo "<h2>Modificando la enfermedad de todos a curado:</h2><ul>";
foreach ($perros as $perro) {
    $perro->enfermedad = "Curado";
    echo "<li>" . $perro->mostrarInfo() . "</li>";
}
echo "</ul>";

?>