<?php

include ("conexion.php");

if (isset($_POST['bb']))
{
    if ( strlen ($_POST['nombre']) >= 1 && strlen ($_POST['correo']) >= 1 && strlen ($_POST['contrasena']) >= 1)
     {  
        $nombre = trim($_POST['nombre']);
        $correo = trim($_POST['correo']);
        $contrasena = trim($_POST['contrasena']);
        $usuario = "INSERT INTO usuario (nombre,correo, contrasena) VALUES ('$nombre', '$correo', '$contrasena')";
        $resultado = mysqli_query($conex, $usuario);
        if ($resultado) 
        {
            ?>
                <h3 class="success"> Tu consulta ya fue registrada</h3>
                <?php
        } 
        else        
        {
            ?>
                <h3 class="error">Hubo un error en la pagina</h3>
            <?php
        } 
        /* // else 
        // {
        //     ?> 
        //     <h3 class="error">LLena todos los campos</h3>
        //     <?php
        // } */
    }
}

?>