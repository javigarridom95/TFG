<?php

session_start();
require_once ('db.php');



$datos['User_name'] = $_POST['name'];
$datos['Clave'] = $_POST['password'];


$res = Login($datos);


 	while ($tupla=mysqli_fetch_array($res))
	{	
		$result = $tupla['User_name'];
	}


    if($res)
    {
        $_SESSION['user'] = $result;

        if (isset($_SESSION['solicitud_login'])) 
            header("location: iniciosolicitud.php");

        else
            header("location: index.php");
       
    }
    else
    {
        echo "Su usuario es incorrecto, intente nuevamente log.";
        echo"<p> <a href=' index.php'>Volver atrás</a> </p>";
    }




?>