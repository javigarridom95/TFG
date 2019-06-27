<?php
require_once ('db.php');
require_once "funciones.php";

nopasa();

if(isset($_POST['submit'])){
    // obtenemos los datos del archivo
  $fichas =isset($_POST['mischecks']) ? $_POST['mischecks'] : '';
  $id_diagnostico = isset($_POST['id_diagnostico']) ? $_POST['id_diagnostico'] : '';
  $rep  = isset($_POST['repeticiones']) ? $_POST['repeticiones'] : '';
  $tipo_solicitud = isset($_POST['tipo_solicitud']) ? $_POST['tipo_solicitud'] : '';

   foreach ($fichas as $id) {
    //echo "$id<br>";
    //echo "$id_diagnostico<br>";
       AnadirFichaDiagnostico($id, $id_diagnostico, $rep);

    }


$_SESSION['Anadidas'] = $fichas;


}
/*
if(isset($_POST['submit'])){

    $borrar_todos =isset($_POST['borrar']) ? $_POST['borrar'] : '';

    foreach ($borrar_todos as $id) {
       BorrarPlanos($id);
    }
    
}

*/


if ($tipo_solicitud == 1)
  header("Location: paso2publica.php") ;
else
  header("Location: paso2privada.php") ;

?>