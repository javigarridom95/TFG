<?php
require_once ('db.php');
require_once "funciones.php";

nopasa();

if(isset($_POST['submit'])){

    $borrar_todos =isset($_POST['borrar']) ? $_POST['borrar'] : '';

    foreach ($borrar_todos as $id) {
       BorrarFichas($id);
    }

    
    
}


header("Location: paso2publica.php") ;
?>