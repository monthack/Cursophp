<?php

/* 
 * Cookies: Es un fichero que se almacena en el ordenandor del usuario que
 * visita la web con el fin de recordar datos o rastrear el comportamiento del
 * mismo en la web.
 */

//Crear cookies
//setcookie("nombre","valor que solo puede ser texto", caducidad, ruta, dominio);

//Cookie básica
setcookie("micookie","valor de mi galleta");

//Cookie con expiracion
setcookie("unyear","valor de mi cookie de 365 dias",time()+(60*60*24*365));
header('Location:ver_cookies.php');
?>