<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Formulario en php</title>
    </head>
    <body>
        <h1>Formulario en PHP</h1>
        <form method="POST" action="recibir.php">
            
            <p>
                <label for="nombres">Nombres</label>
                <input type="text" name="nombres" />
            </p>
            
            <p>
                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos" />
            </p>
            
            <input type="submit" value="Enviar datos" />
            
        </form>
    </body>
</html>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

