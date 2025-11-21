<?php
// Guillermo Torres
// Date: Thu 20 Nov 2025
// Time: 13:45
// Description: 'PHP que lee el nombre, los apellidos, el salario,
//              'y la edad de una persona en un formulario y a partir
//              'de esos datos calcula un nuevo salario para esa persona.'
//  Distribution: Arch Linux

/*
    Las reglas que se van a aplicar son:
    - Si el salario es mayor de 2000 euros, no cambiará
    - Si el salario está entre 1000 y 2000:
        - Si la edad > 45 años, se sube un 3%
        - Si la edad <= 45 años, se sube un 10%
    - Si el salario es menor de 1000:
        - Los menores de 30 años cobrarán 1100 euros
        - De 30 a 45 años, sube un 3%
        - A los mayores de 45 años, sube un 15%
*/

// Comprobar si hay peticion POST
if ($_SERVER["REQUEST_METHOD"] == "POST") { // Si se encuentra una petición por POST
    include_once "php/info.php"; // Cargamos la info del formulario
} else {
    include_once "php/form.html"; // Cargamos el formulario
}
?>
