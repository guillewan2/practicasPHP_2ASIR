<?php

// Declaramos la clase Player
class Player
{
    private string $name; // Propiedad: NOMBRE
    private int $highScore = 0; // Propiedad: PuntuacionAlta
    /* Por defecto highScore es 0 */

    public function setName(string $name)
    /*
    Función para cambiar el nombre, ya que el
    string es privado 
    */
    {
        $this->name = $name; // Se cambia el name del objeto a $name
    }

    public function setHighScore(int $newScore)
    /*
    Función para cambiar la puntuación alta, ya
    que es privada
    */
    {
        if ($newScore > $this->highScore) {
            $this->highScore = $newScore; // Se cambia el highScore del objeto a $newScore
        }
    }
}

/*
`$this` se refiere al objeto desde el que se ha llamado al método
*/
