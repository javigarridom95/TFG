<?php
require_once ('db.php');
require_once "funciones.php";
ini_set("session.use_cookies","1");  
ini_set("session.use_only_cookies","1");  
ini_set("session.use_trans_sid","0"); 




echo <<< HTML


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <link rel="stylesheet" type="text/css" href="./css/style.css" media="screen" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>Inicio</title>
  </head>
HTML;

HtmlCabeceraIndex();


echo <<< HTML


  <div id= "principal" class="container">
    <div class="container">
      <img src="imagenes/logoblanco.png" width="85%" height="40%">
    </div>
</div>


  <div id= "cita">
      <q>First life, then spaces, then buildings – the other way around never works</q>
      <small>Jan Gehl</small>
  </div>

  <div id="citatraducida">
      <a>(Primero la vida, después los espacios, después los edificios – a la inversa nunca funciona . Jan Gehl)</a>
  </div>

  <div id="descripcion">
    habitABLE se configura como una herramienta de gestión global en materia de accesibilidad universal.
    Teniendo como objetivo la mejora de la calidad de los edificios residenciales y de utilización colectiva, la aplicación de habitABLE permite la realización de un diagnóstico veraz y exhaustivo del propio edificio, la propuesta de diferentes soluciones y la identificación de la actuación óptima a partir de un análisis multicriterio.
  </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </div>
  </body>

HTML;

footer();

echo <<<HTML
HTML;
?>
