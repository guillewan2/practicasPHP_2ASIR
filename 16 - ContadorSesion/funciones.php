<?php

# Función para terminar una sesión

function killSession()
{
    $_SESSION = []; # Convertimos $_SESSION en un array vacío
    if (ini_get("session.use_cookies")): # Comprobamos que la configuración de PHP está usando cookies para gestionar sesiones
        $params = session_get_cookie_params(); # Guardamos los parámetros de las cookies en un archivo
        setcookie(session_name(), "", time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
        /* --------------------------------------- SETCOOKIE ---------------------------------------------- \*
        - session_name() devuelve el nombre de la cookie que identifica la sesión actual
        - El segundo argumento significa que se reemplaza la session_name() por una cadena vacía
        - El tercer argumento es el tiempo. Obtenemos la fecha actual en formato Unix y le restamos 42000 
        (que son 11.6 horas), que es una fecha de expiració que ya ha pasado. 

        - Usar $params["secure"] y $params["httponly"] significa que la cookie solo viajará por HTTPS
        y evita que scripts de JavaScript tengan acceso a la cookie, lo que mitiga ataques XSS.

        - Usamos tambien domain y path para que la instrucción de expiración llegue al lugar correcto del
        almacenamiento del ordenador

        Todo eso hace que el navegador detecte que la cookie ha caducado y la elimine del almacenamiento local

        \* -------------------------------------------------------------------------------------------------- */
        session_destroy();
    endif;
}
?>
