<?php
require_once ('db.php');


 
session_start();  





///////////////////////////////////////////

function nopasa()
{


        if(!isset($_SESSION['user']))
            header("location: index.php");
       
}




function HtmlLoginIni()
{
echo <<< HTML

	      <a href="iniciosesion.php" class="btn active text " style="color:#CEF1FF">
            <i class="fa fa-user" style= "color:#CEF1FF; font-size:24px;"></i> Inicio sesión o Crear cuenta
          </a>
            

HTML;
}



function HtmlLogeado()
{
	
echo <<< HTML
<div class="login">
				Bienvenido/a, 
HTML;
				echo " ".htmlspecialchars($_SESSION['user']);

echo <<< HTML

				<form id = "logout" action = "logout.php" method="post"> 
					<label> 
		    			<!-- <a href="logout.php" ><img src="imagenes/apagado_blanco.png" width="25" height="25"></a> -->
						<input  type="submit" class= "logout btn " value="Desconectar" class =  "button" /> 
		    		</label>
	    		</form>
</div>
HTML;





}



function SolicitudLogin()
{
				if(isset($_SESSION['user']) )
                {
echo <<< HTML
                  <a class="nav-link" style= "color:#CEF1FF"  href="iniciosolicitud.php">Solicitud</a>
HTML;

				}
				else
				{
echo <<< HTML
                  <a class="nav-link" style= "color:#CEF1FF"  href="iniciosesion.php">Solicitud</a>
HTML;
				$_SESSION['solicitud_login'] = " ";
				}
}








function HtmlCabeceraIndex()
{
echo <<< HTML
  <body>



    <div class="pagina">
    <div id= "navegadormapa" class=container-fluid>
       <nav id ="superior" class="navbar navbar-expand-lg navbar-dark navbar-fixed-top " style="background-color: #4577B5;">
        <a class="navbar-brand" href="#" > <img src="imagenes/logougr.png" width="131" height="45"><img src="imagenes/logo.png" width="150" height="75"> </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
          <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link text-white" style= "color:#CEF1FF"  href="#">Inicio <span class="sr-only">(current)</span></a>
              </li>

              <li class="nav-item">
HTML;

//para hacer la solicitud hay que estar logueado

SolicitudLogin();



echo <<< HTML
              </li>

              <li class="nav-item ">
                <a class="nav-link" style= "color:#CEF1FF"  href="mapa.php">Mapa</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" style= "color:#CEF1FF"  href="contacto.php">Contacto</a>
              </li>

          </ul>
          <a class="nav-link" href="descargaManual.php" style= "font-size: 15px;color:#CEF1FF" ><img src="imagenes/descargaceleste.png" width="30" height="25">Manual de Usuario &nbsp &nbsp &nbsp &nbsp</a>
            
HTML;

//Login
  

  if(isset($_SESSION['user']) )
  {
    HtmlLogeado();
  }
  else
    HtmlLoginIni();






echo <<< HTML
        </div>
    </nav>

  </div>


<div  id="manualusuario" class="container-fluid">
 </div>
HTML;
}







function HtmlCabeceraSolicitud()
{

echo <<< HTML
 <body>

    <div id= "navegadormapa" class=container-fluid>
       <nav id ="superior" class="navbar navbar-expand-lg navbar-dark navbar-fixed-top " style="background-color: #4577B5;">
        <a class="navbar-brand" href="#" ><img src="imagenes/logougr.png" width="131" height="45"><img src="imagenes/logo.png" width="150" height="75"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
          <ul class="navbar-nav mr-auto">
              <li class="nav-item ">
                <a class="nav-link" style= "color:#CEF1FF"  href="index.php">Inicio <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white" style= "color:#CEF1FF"  href="#">Solicitud</a>
              </li>

              <li class="nav-item ">
                <a class="nav-link" style= "color:#CEF1FF"  href="mapa.php">Mapa</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" style= "color:#CEF1FF"  href="contacto.php">Contacto</a>
              </li>
          </ul>

          <a class="nav-link" href="descargaManual.php" style= "font-size: 15px;color:#CEF1FF" ><img src="imagenes/descargaceleste.png" width="30" height="25">Manual de Usuario &nbsp &nbsp &nbsp &nbsp</a>
            
HTML;

//Login
  

  if(isset($_SESSION['user']) )
  {
    HtmlLogeado();
  }
  else
    HtmlLoginIni();






echo <<< HTML
        </div>
    </nav>
  </div>

<!--
<div  id="manualusuario" class="container-fluid">
 </div>-->
HTML;
}




function HtmlCabeceraMapa()
{
echo <<< HTML

  <body >


  	<div id= "navegadormapa" class=container-fluid>
       <nav id ="superior" class="navbar navbar-expand-lg navbar-dark navbar-fixed-top " style="background-color: #4577B5;">
        <a class="navbar-brand" href="#" ><img src="imagenes/logougr.png" width="131" height="45"><img src="imagenes/logo.png" width="150" height="75"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
          <ul class="navbar-nav mr-auto">
              <li class="nav-item ">
                <a class="nav-link" style= "color:#CEF1FF"  href="index.php">Inicio <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style= "color:#CEF1FF"  href="iniciosolicitud.php">Solicitud</a>
              </li

              <li class="nav-item active">
                <a class="nav-link text-white" style= "color:#CEF1FF"  href="#">Mapa</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" style= "color:#CEF1FF"  href="contacto.php">Contacto</a>
              </li>
          </ul>
          <a class="nav-link" href="descargaManual.php" style= "font-size: 15px;color:#CEF1FF" ><img src="imagenes/descargaceleste.png" width="30" height="25">Manual de Usuario &nbsp &nbsp &nbsp &nbsp</a>
HTML;

//Login
  

  if(isset($_SESSION['user']) )
  {
    HtmlLogeado();
  }
  else
    HtmlLoginIni();






echo <<< HTML
        </div>
    </nav>
  </div>


HTML;

}


function HtmlCabeceraContacto()
{
echo <<< HTML


  <body >
  	<div id= "navegadormapa" class=container-fluid>
       <nav id ="superior" class="navbar navbar-expand-lg navbar-dark navbar-fixed-top " style="background-color: #4577B5;">
        <a class="navbar-brand" href="#" ><img src="imagenes/logougr.png" width="131" height="45"><img src="imagenes/logo.png" width="150" height="75"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
          <ul class="navbar-nav mr-auto">
              <li class="nav-item ">
                <a class="nav-link" style= "color:#CEF1FF"  href="index.php">Inicio <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style= "color:#CEF1FF"  href="iniciosolicitud.php">Solicitud</a>
              </li>

              <li class="nav-item ">
                <a class="nav-link" style= "color:#CEF1FF"  href="mapa.php">Mapa</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link text-white" style= "color:#CEF1FF"  href="#">Contacto</a>
              </li>
          </ul>
        <a class="nav-link" href="descargaManual.php" style= "font-size: 15px;color:#CEF1FF" ><img src="imagenes/descargaceleste.png" width="30" height="25">Manual de Usuario &nbsp &nbsp &nbsp &nbsp</a>
HTML;

//Login
  

  if(isset($_SESSION['user']) )
  {
    HtmlLogeado();
  }
  else
    HtmlLoginIni();






echo <<< HTML
        </div>
    </nav>
  </div>


HTML;
}


function EvaluarCampo($codigo, $id, $valor)
{
  $datos = SelectFichaById($id);

  if ($datos)
  {
    if(mysqli_num_rows($datos)>0)
    {     
      while ($tupla=mysqli_fetch_array($datos))
      {
        $relevancia_dxt = $tupla['Relevancia_dxt'];
        $relevancia_mov = $tupla['Relevancia_mov'];
        $relevancia_au = $tupla['Relevancia_au'];
        $relevancia_vi = $tupla['Relevancia_vi'];
        $tipo = $tupla['Tipo'];
        $obstaculo = $tupla['Obstaculo'];
        $facilitador = $tupla['Facilitador'];
              
      }
    }

  }

  //echo "$tipo<br>";


  switch ($tipo) {
    case '0':
      if($valor == "Si" || $valor == "si" || $valor = "s")
      {
        $dxt = $relevancia_dxt;
        $mov = $relevancia_mov;
        $au = $relevancia_au;
        $vi = $relevancia_vi;
      }
      else if($valor == "No" || $valor == "no" || $valor = "n")
      {
        $dxt = 0;
        $mov = 0;
        $au = 0;
        $vi = 0;
      }

      break;

    case '1':
      if ($valor >= $facilitador) 
      {
        $dxt = $relevancia_dxt;
        $mov = $relevancia_mov;
        $au = $relevancia_au;
        $vi = $relevancia_vi;
      }
      else if($valor < $obstaculo)
      {
        $dxt = 0;
        $mov = 0;
        $au = 0;
        $vi = 0;
      }
      else
      {
        $dxt = $relevancia_dxt/2;
        $mov = $relevancia_mov/2;
        $au = $relevancia_au/2;
        $vi = $relevancia_vi/2;
      }

      break;
    case '2':
        if($valor <= $facilitador && $valor >= $obstaculo)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        else
        {
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;
    case '3':
        if($valor < $facilitador)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        else
        {
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;
    case '4':
        if($valor < 80 || $valor > 120)
        {
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
        else if($valor < 90 )
        {
          $dxt = $relevancia_dxt/2;
          $mov = $relevancia_mov/2;
          $au = $relevancia_au/2;
          $vi = $relevancia_vi/2;
        }
        else
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
      break;
    case '5':
        if($valor <= $facilitador)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        else
        {
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;
      case '6':
      if ($valor <= $facilitador) 
      {
        $dxt = $relevancia_dxt;
        $mov = $relevancia_mov;
        $au = $relevancia_au;
        $vi = $relevancia_vi;
      }
      else if($valor > $obstaculo)
      {
        $dxt = 0;
        $mov = 0;
        $au = 0;
        $vi = 0;
      }
      else
      {
        $dxt = $relevancia_dxt/2;
        $mov = $relevancia_mov/2;
        $au = $relevancia_au/2;
        $vi = $relevancia_vi/2;
      }

      break;

    case '7':
        if($valor == 80)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        elseif($valor > 80 || $valor < 80)
        {
          $dxt = $relevancia_dxt/2;
          $mov = $relevancia_mov/2;
          $au = $relevancia_au/2;
          $vi = $relevancia_vi/2;
        }
      break;
    case '8':
        if($valor >= 85 && $valor <= 110)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        elseif($valor > 110 || $valor < 85)
        {
          $dxt = $relevancia_dxt/2;
          $mov = $relevancia_mov/2;
          $au = $relevancia_au/2;
          $vi = $relevancia_vi/2;
        }
      break;
    case '9':
        if($valor >= 4.5 && $valor <= 5)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        elseif($valor < 4.5 && $valor <= 3.5)
        {
          $dxt = $relevancia_dxt/2;
          $mov = $relevancia_mov/2;
          $au = $relevancia_au/2;
          $vi = $relevancia_vi/2;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;
    case '10':
        if($valor >= 80 && $valor <= 90)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        elseif($valor < 80 || $valor > 90)
        {
          $dxt = $relevancia_dxt/2;
          $mov = $relevancia_mov/2;
          $au = $relevancia_au/2;
          $vi = $relevancia_vi/2;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;
    case '11':
        if($valor >= 80 && $valor <= 100)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        elseif($valor > 100 && $valor <= 120)
        {
          $dxt = $relevancia_dxt/2;
          $mov = $relevancia_mov/2;
          $au = $relevancia_au/2;
          $vi = $relevancia_vi/2;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;
    case '12':
        if($valor >= 5)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        elseif($valor < 5)
        {
          $dxt = $relevancia_dxt/2;
          $mov = $relevancia_mov/2;
          $au = $relevancia_au/2;
          $vi = $relevancia_vi/2;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;
    case '13':
        if($valor >= 90 && $valor <= 120)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        elseif($valor >= 80 && $valor < 90)
        {
          $dxt = $relevancia_dxt/2;
          $mov = $relevancia_mov/2;
          $au = $relevancia_au/2;
          $vi = $relevancia_vi/2;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;
    case '14':
        if($valor >= 70 && $valor <= 80)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        elseif($valor > 85 && $valor <= 85)
        {
          $dxt = $relevancia_dxt/2;
          $mov = $relevancia_mov/2;
          $au = $relevancia_au/2;
          $vi = $relevancia_vi/2;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;
    case '15':
        if($valor == 60)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;
    case '16':
        if($valor >= 80 && $valor <= 120)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        elseif($valor >= 70 && $valor < 80)
        {
          $dxt = $relevancia_dxt/2;
          $mov = $relevancia_mov/2;
          $au = $relevancia_au/2;
          $vi = $relevancia_vi/2;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;
    case '17':
        if($valor >= 45 && $valor <= 50)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        elseif($valor >= 40 && $valor < 45)
        {
          $dxt = $relevancia_dxt/2;
          $mov = $relevancia_mov/2;
          $au = $relevancia_au/2;
          $vi = $relevancia_vi/2;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;
    case '18':
        if($valor >= 70 && $valor <= 75)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;
    case '19':
        if($valor >= 20 && $valor <= 25)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        elseif($valor >= 10 && $valor < 20)
        {
          $dxt = $relevancia_dxt/2;
          $mov = $relevancia_mov/2;
          $au = $relevancia_au/2;
          $vi = $relevancia_vi/2;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;
    case '20':
        if($valor >= 3 && $valor <= 4)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        elseif($valor > 4 && $valor <= 5)
        {
          $dxt = $relevancia_dxt/2;
          $mov = $relevancia_mov/2;
          $au = $relevancia_au/2;
          $vi = $relevancia_vi/2;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;
    case '21':
        if($valor == 70)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        elseif($valor > 70 && $valor <= 75)
        {
          $dxt = $relevancia_dxt/2;
          $mov = $relevancia_mov/2;
          $au = $relevancia_au/2;
          $vi = $relevancia_vi/2;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;
    case '22':
        if($valor == 60)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        else if($valor < 60 && $valor >= 10){
          $dxt = $relevancia_dxt/2;
          $mov = $relevancia_mov/2;
          $au = $relevancia_au/2;
          $vi = $relevancia_vi/2;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;
    case '23':
        if($valor >= 95 && $valor <= 105)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        elseif($valor < 95 || $valor > 105)
        {
          $dxt = $relevancia_dxt/2;
          $mov = $relevancia_mov/2;
          $au = $relevancia_au/2;
          $vi = $relevancia_vi/2;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;
    case '24':
        if($valor >= 70 && $valor <= 80)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;
      //Duda revisar
    case '25':
        if($valor >= 95 && $valor <= 105)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        elseif($valor < 95 || $valor > 105)
        {
          $dxt = $relevancia_dxt/2;
          $mov = $relevancia_mov/2;
          $au = $relevancia_au/2;
          $vi = $relevancia_vi/2;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;
    case '26':
        if($valor >= 94 && $valor <= 110)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;
    case '27':
        if($valor >= 90 && $valor <= 120)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        elseif($valor < 90 || $valor >= 80)
        {
          $dxt = $relevancia_dxt/2;
          $mov = $relevancia_mov/2;
          $au = $relevancia_au/2;
          $vi = $relevancia_vi/2;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;
    case '28':
        if($valor >= 70 && $valor <= 80)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;
      //Duda preguntar
    case '29':
        if($valor >= 90 && $valor <= 120)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        elseif($valor < 90 || $valor >= 80)
        {
          $dxt = $relevancia_dxt/2;
          $mov = $relevancia_mov/2;
          $au = $relevancia_au/2;
          $vi = $relevancia_vi/2;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;
    case '30':
        if($valor >= 12600)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        elseif($valor < 12600 || $valor >= 10800)
        {
          $dxt = $relevancia_dxt/2;
          $mov = $relevancia_mov/2;
          $au = $relevancia_au/2;
          $vi = $relevancia_vi/2;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;
    case '31':
        if($valor >= 12000)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;
    case '32':
        if($valor >= 90 && $valor <= 120)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        elseif($valor < 90 || $valor >= 80)
        {
          $dxt = $relevancia_dxt/2;
          $mov = $relevancia_mov/2;
          $au = $relevancia_au/2;
          $vi = $relevancia_vi/2;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;
    case '33':
        if($valor >= 90 && $valor <= 120)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        elseif($valor < 90 || $valor >= 80)
        {
          $dxt = $relevancia_dxt/2;
          $mov = $relevancia_mov/2;
          $au = $relevancia_au/2;
          $vi = $relevancia_vi/2;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;
      //Dudas preguntar
    case '34':
        if($valor >= 90 && $valor <= 120)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        elseif($valor < 90 || $valor >= 80)
        {
          $dxt = $relevancia_dxt/2;
          $mov = $relevancia_mov/2;
          $au = $relevancia_au/2;
          $vi = $relevancia_vi/2;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;
    case '35':
        if($valor >= 94 && $valor <= 110)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;
    case '36':
        if($valor >= 94 && $valor <= 110)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;
    case '37':
        if($valor >= $obstaculo && $valor <= $facilitador)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;
    case '38':
        if($valor >= 12000)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;
    case '39':
        if($valor >= 140)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        elseif($valor <= 120 || $valor > 140)
        {
          $dxt = $relevancia_dxt/2;
          $mov = $relevancia_mov/2;
          $au = $relevancia_au/2;
          $vi = $relevancia_vi/2;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;

    case '40':
        if($valor >= 70 && $valor <= 80)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;
    //Duda pensar bien
    case '41':
        if($valor >= 90 && $valor <= 120)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        elseif($valor < 90 || $valor >= 80)
        {
          $dxt = $relevancia_dxt/2;
          $mov = $relevancia_mov/2;
          $au = $relevancia_au/2;
          $vi = $relevancia_vi/2;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;
    case '42':
        if($valor >= 90 && $valor <= 120)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        elseif($valor < 90 || $valor >= 80)
        {
          $dxt = $relevancia_dxt/2;
          $mov = $relevancia_mov/2;
          $au = $relevancia_au/2;
          $vi = $relevancia_vi/2;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;
    case '43':
        if($valor >= 40 && $valor <= 140)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        elseif($valor < 140 || $valor > 120)
        {
          $dxt = $relevancia_dxt/2;
          $mov = $relevancia_mov/2;
          $au = $relevancia_au/2;
          $vi = $relevancia_vi/2;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;
    case '44':
        if($valor >= 70 && $valor <= 80)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        elseif($valor <= 85 || $valor > 80)
        {
          $dxt = $relevancia_dxt/2;
          $mov = $relevancia_mov/2;
          $au = $relevancia_au/2;
          $vi = $relevancia_vi/2;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;
    case '45':
        if($valor >= 3500)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        elseif($valor == 2275)
        {
          $dxt = $relevancia_dxt/2;
          $mov = $relevancia_mov/2;
          $au = $relevancia_au/2;
          $vi = $relevancia_vi/2;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;
    case '46':
        if($valor >= 80 && $valor <= 120)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        elseif($valor < 80 || $valor >= 70)
        {
          $dxt = $relevancia_dxt/2;
          $mov = $relevancia_mov/2;
          $au = $relevancia_au/2;
          $vi = $relevancia_vi/2;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;
    case '47':
        if($valor >= 45 && $valor <= 50)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        elseif($valor < 45 || $valor >= 40)
        {
          $dxt = $relevancia_dxt/2;
          $mov = $relevancia_mov/2;
          $au = $relevancia_au/2;
          $vi = $relevancia_vi/2;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;
    case '48':
        if($valor >= 70 && $valor <= 75)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;
    case '49':
        if($valor >= 20 && $valor <= 25)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        elseif($valor < 20 || $valor >= 10)
        {
          $dxt = $relevancia_dxt/2;
          $mov = $relevancia_mov/2;
          $au = $relevancia_au/2;
          $vi = $relevancia_vi/2;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;
    case '50':
        if($valor == 75)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;
    case '51':
        if($valor >= 3 && $valor <= 4)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        elseif($valor <= 5 || $valor > 4)
        {
          $dxt = $relevancia_dxt/2;
          $mov = $relevancia_mov/2;
          $au = $relevancia_au/2;
          $vi = $relevancia_vi/2;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;
    case '52':
        if($valor >= 9600)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;
    case '53':
        if($valor == 70)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        elseif($valor <= 75 || $valor > 70)
        {
          $dxt = $relevancia_dxt/2;
          $mov = $relevancia_mov/2;
          $au = $relevancia_au/2;
          $vi = $relevancia_vi/2;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;
    case '54':
        if($valor == 60)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;
    case '55':
        if($valor >= 80 && $valor <= 120)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;

      case '56':
        if($valor >= 65 && $valor <= 75)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        elseif($valor > 110 || $valor < 85)
        {
          $dxt = $relevancia_dxt/2;
          $mov = $relevancia_mov/2;
          $au = $relevancia_au/2;
          $vi = $relevancia_vi/2;
        }
      break;
      case '57':
        if($valor >= 40 && $valor <= 120)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        elseif($valor > 120 && $valor <= 140)
        {
          $dxt = $relevancia_dxt/2;
          $mov = $relevancia_mov/2;
          $au = $relevancia_au/2;
          $vi = $relevancia_vi/2;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;
      case '58':
        if($valor >= 50)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        elseif($valor > 35 && $valor <= 50)
        {
          $dxt = $relevancia_dxt/2;
          $mov = $relevancia_mov/2;
          $au = $relevancia_au/2;
          $vi = $relevancia_vi/2;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;
      case '59':
        if($valor <= $facilitador)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        elseif($valor > $facilitador && $valor <= $obstaculo)
        {
          $dxt = $relevancia_dxt/2;
          $mov = $relevancia_mov/2;
          $au = $relevancia_au/2;
          $vi = $relevancia_vi/2;
        }
        else
        {
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;
      case '60':
        if($valor <= 110 && $valor >= 90)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;
      case '61':
        if($valor >= 21000)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        else if($valor >= 14400)
        {
          $dxt = $relevancia_dxt/2;
          $mov = $relevancia_mov/2;
          $au = $relevancia_au/2;
          $vi = $relevancia_vi/2;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;
      case '62':
        if($valor >= 180000)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        else if($valor >= 158400)
        {
          $dxt = $relevancia_dxt/2;
          $mov = $relevancia_mov/2;
          $au = $relevancia_au/2;
          $vi = $relevancia_vi/2;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;
      case '63':
        if($valor >= 3500)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        else if($valor == 2275)
        {
          $dxt = $relevancia_dxt/2;
          $mov = $relevancia_mov/2;
          $au = $relevancia_au/2;
          $vi = $relevancia_vi/2;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;

      case '64':
        if($valor >= 9600)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;

      case '65':
        if($valor >= 210600)
        {
          $dxt = $relevancia_dxt;
          $mov = $relevancia_mov;
          $au = $relevancia_au;
          $vi = $relevancia_vi;
        }
        else if($valor >= 158400)
        {
          $dxt = $relevancia_dxt/2;
          $mov = $relevancia_mov/2;
          $au = $relevancia_au/2;
          $vi = $relevancia_vi/2;
        }
        else{
          $dxt = 0;
          $mov = 0;
          $au = 0;
          $vi = 0;
        }
      break;

   
    default:
      # code...
      break;
  }


  $totales = [$dxt,$mov,$au,$vi];

  return $totales;

}


function TotalDiscapacidad($codigoSolicitud){

	$numero_total = 0;
    $res = SelectEdificio($codigoSolicitud);
    if ($res){
      	if(mysqli_num_rows($res)>0){
        	while ($tupla=mysqli_fetch_array($res)){
          		$m_vision = $tupla['Mujeres_vision'];
          		$m_ruedas = $tupla['Mujeres_silla_ruedas'];
          		$m_movilidad = $tupla['Mujeres_movilidad'];
          		$m_audicion = $tupla['Mujeres_audicion'];
				$m_intelectual = $tupla['Mujeres_intelectual'];
          		$h_vision = $tupla['Hombres_vision'];
          		$h_ruedas = $tupla['Hombres_silla_ruedas'];
          		$h_movilidad = $tupla['Hombres_movilidad'];
          		$h_audicion = $tupla['Hombres_audicion'];
				$h_intelectual = $tupla['Hombres_intelectual'];
				$na_vision = $tupla['Ninas_vision'];
          		$na_ruedas = $tupla['Ninas_silla_ruedas'];
          		$na_movilidad = $tupla['Ninas_movilidad'];
          		$na_audicion = $tupla['Ninas_audicion'];
				$na_intelectual = $tupla['Ninas_compresion'];
				$no_vision = $tupla['Ninos_vision'];
          		$no_ruedas = $tupla['Ninos_silla_ruedas'];
          		$no_movilidad = $tupla['Ninos_movilidad'];
          		$no_audicion = $tupla['Ninos_audicion'];
				$no_intelectual = $tupla['Ninos_compresion'];

				$numero_total = $m_vision+$m_ruedas+$m_movilidad+$m_audicion+$m_intelectual+$h_vision+$h_ruedas+$h_movilidad+
				$h_audicion+$h_intelectual+$na_vision+$na_ruedas+$na_movilidad + $na_audicion + $na_intelectual +$no_vision + 
				$no_ruedas + $no_movilidad + $no_audicion + $no_intelectual;
        	}
   		}	
   	}

	return $numero_total;
}


function DiscapacidadMovilidad($codigoSolicitud){

	$numero_total = 0;
    $res = SelectEdificio($codigoSolicitud);
    if ($res){
      	if(mysqli_num_rows($res)>0){
        	while ($tupla=mysqli_fetch_array($res)){
                $m_ruedas = $tupla['Mujeres_silla_ruedas'];
          		$m_movilidad = $tupla['Mujeres_movilidad'];
          		$h_ruedas = $tupla['Hombres_silla_ruedas'];
          		$h_movilidad = $tupla['Hombres_movilidad'];
                $na_ruedas = $tupla['Ninas_silla_ruedas'];
          		$na_movilidad = $tupla['Ninas_movilidad'];
          		$no_ruedas = $tupla['Ninos_silla_ruedas'];
          		$no_movilidad = $tupla['Ninos_movilidad'];
          		
				$numero_total = $m_ruedas+$m_movilidad+$h_ruedas+$h_movilidad+$na_ruedas+$na_movilidad+$no_ruedas + $no_movilidad;
        	}
   		}	
   	}

	return $numero_total;
}


function DiscapacidadVision($codigoSolicitud){

	$numero_total = 0;
    $res = SelectEdificio($codigoSolicitud);
    if ($res){
      	if(mysqli_num_rows($res)>0){
        	while ($tupla=mysqli_fetch_array($res)){
          		$m_vision = $tupla['Mujeres_vision'];
                $h_vision = $tupla['Hombres_vision'];
        		$na_vision = $tupla['Ninas_vision'];
				$no_vision = $tupla['Ninos_vision'];
          		
				$numero_total = $m_vision+$h_vision+$na_vision+$no_vision ;
        	}
   		}	
   	}

	return $numero_total;
}


function DiscapacidadAudicion($codigoSolicitud){

	$numero_total = 0;
    $res = SelectEdificio($codigoSolicitud);
    if ($res){
      	if(mysqli_num_rows($res)>0){
        	while ($tupla=mysqli_fetch_array($res)){
               	$m_audicion = $tupla['Mujeres_audicion'];
                $h_audicion = $tupla['Hombres_audicion'];
          		$na_audicion = $tupla['Ninas_audicion'];
          		$no_audicion = $tupla['Ninos_audicion'];

				$numero_total = $m_audicion+$h_audicion+$na_audicion+$no_audicion ;
        	}
   		}	
   	}

	return $numero_total;

}

function PersonasMayores($codigoSolicitud){

	$numero_total = 0;
    $res = SelectEdificio($codigoSolicitud);
    if ($res){
      	if(mysqli_num_rows($res)>0){
        	while ($tupla=mysqli_fetch_array($res)){
               	$m_mayores = $tupla['Mujeres_mayores'];
                $h_mayores = $tupla['Hombres_mayores'];
      
				$numero_total = $m_mayores+$h_mayores;
        	}
   		}	
   	}

	return $numero_total;

}

function PorcentajePersonasMayores($codigoSolicitud){

	$discapacitados = PersonasMayores($codigoSolicitud);
	$totalPersonas = PersonasUsuarias($codigoSolicitud);

	$porcentaje = ($discapacitados/$totalPersonas)*100;

	return $porcentaje;
}



function EstabilidadPresupuestaria($codigoSolicitud){

	$numero_total = 0;
    $res = SelectEdificioPublico($codigoSolicitud);
    if ($res){
      	if(mysqli_num_rows($res)>0){
        	while ($tupla=mysqli_fetch_array($res)){
               	$ingresos = $tupla['Ingresos'];
                $gastos = $tupla['Gastos'];
      
				$numero_total = $ingresos/$gastos;
        	}
   		}	
   	}

  return round(($numero_total), 2);



}

function RentabilidadEconomica($codigoSolicitud){

    $res = SelectEdificioPublico($codigoSolicitud);
    if ($res){
      	if(mysqli_num_rows($res)>0){
        	while ($tupla=mysqli_fetch_array($res)){
               	$rentabilidad = $tupla['Rentabilidad'];
           	}
   		}	
   	}

	return $rentabilidad;

}

function Cultural($codigoSolicitud){

    $res = SelectEdificioPublico($codigoSolicitud);
    if ($res){
      	if(mysqli_num_rows($res)>0){
        	while ($tupla=mysqli_fetch_array($res)){
               	$cultural = $tupla['Cultural'];
           	}
   		}	
   	}

	return $cultural;

}


function PosibilidadFinanciacion($codigoSolicitud){

    $res = SelectEdificioPublico($codigoSolicitud);
    if ($res){
      	if(mysqli_num_rows($res)>0){
        	while ($tupla=mysqli_fetch_array($res)){
               	$financiacion = $tupla['Financiacion_externa'];
           	}
   		}	
   	}

	return $financiacion;

}


function PersonasUsuarias($codigoSolicitud){

    $res = SelectEdificio($codigoSolicitud);
    if ($res){
      	if(mysqli_num_rows($res)>0){
        	while ($tupla=mysqli_fetch_array($res)){
               	$personas = $tupla['Personas_usuarias'];

           	}
   		}	
   	}

	return $personas;

}


function DiagnosticoNivelDXT($codigoDiagnostico){

	$fichas = SelectFichasDiagnostico($codigoDiagnostico);
	$porcentaje = 0;
  $i = 0;

	if ($fichas)
	{
        if(mysqli_num_rows($fichas)>0)
        {     
			while ($tupla=mysqli_fetch_array($fichas))
            {
                $i++;
                $porcentaje += $tupla['Porcentaje_general'];

            }
        }
    }

    return ($porcentaje / $i);
}

function DiagnosticoNivelMovilidad($codigoDiagnostico){

	$fichas = SelectFichasDiagnostico($codigoDiagnostico);
	$porcentaje = 0;
  $i = 0;


	if ($fichas)
	{
        if(mysqli_num_rows($fichas)>0)
        {     
			while ($tupla=mysqli_fetch_array($fichas))
            {
                $i++;
                $porcentaje += $tupla['Porcentaje_mov'];
            }
        }
    }

      return ($porcentaje / $i);

}

function DiagnosticoNivelAuditiva($codigoDiagnostico){

	$fichas = SelectFichasDiagnostico($codigoDiagnostico);
	$porcentaje = 0;
  $i = 0;

	if ($fichas)
	{
        if(mysqli_num_rows($fichas)>0)
        {     
			while ($tupla=mysqli_fetch_array($fichas))
            {
                $i++;
                $porcentaje += $tupla['Porcentaje_au'];
            }
        }
    }

      return ($porcentaje / $i);

}

function DiagnosticoNivelVision($codigoDiagnostico){

	$fichas = SelectFichasDiagnostico($codigoDiagnostico);
	$porcentaje = 0;
  $i = 0;


	if ($fichas)
	{
        if(mysqli_num_rows($fichas)>0)
        {     
			while ($tupla=mysqli_fetch_array($fichas))
            {
                $i++;
                $porcentaje += $tupla['Porcentaje_vi'];
            }
        }
    }

    return ($porcentaje / $i);

}


function NivelDXT($idAlternativa){

	$res = SelectEvaFicha($idAlternativa);
	$suma_porcentaje = 0;
  $i = 0;

	if($res){
		if(mysqli_num_rows($res)>0){
        	while ($tupla=mysqli_fetch_array($res)){
            $i++;
        		$suma_porcentaje += $tupla['Porcentaje_general'];
            
        	}
        }
    }


    return round(($suma_porcentaje / $i), 2);


}

function NivelMovilidad($idAlternativa){

	$res = SelectEvaFicha($idAlternativa);
	$suma_porcentaje = 0;
    $i = 0;

	if($res){
		if(mysqli_num_rows($res)>0){
        	while ($tupla=mysqli_fetch_array($res)){
            $i++;
        		$suma_porcentaje += $tupla['Porcentaje_mov'];

        	}
        }
    }

    return round(($suma_porcentaje / $i), 2);
}

function NivelAuditiva($idAlternativa){

	$res = SelectEvaFicha($idAlternativa);
	$suma_porcentaje = 0;
  $i = 0;

	if($res){
		if(mysqli_num_rows($res)>0){
        	while ($tupla=mysqli_fetch_array($res)){
            $i++;
        		$suma_porcentaje += $tupla['Porcentaje_au'];

        	}
        }
    }

    return round(($suma_porcentaje / $i), 2);
}

function NivelVision($idAlternativa){

	$res = SelectEvaFicha($idAlternativa);
	$suma_porcentaje = 0;
  $i = 0;

	if($res){
		if(mysqli_num_rows($res)>0){
        	while ($tupla=mysqli_fetch_array($res)){
            $i++;
        		$suma_porcentaje += $tupla['Porcentaje_vi'];

        	}
        }
    }

    return round(($suma_porcentaje / $i), 2);

}

function IncrementoDXT($codigoDiagnostico,$idAlternativa){

	$total = NivelDXT($idAlternativa) - DiagnosticoNivelDXT($codigoDiagnostico);

	return $total;

}

function TecnicosIncrementoDXT($codigoDiagnostico, $idAlternativa){

	$res = NivelDXT($idAlternativa) - DiagnosticoNivelDXT($codigoDiagnostico);

	if($res <= 5){
		$sol = 0;
	}
	elseif($res <= 9){
		$sol = 1;
	}
	elseif($res <= 14){
		$sol = 2;
	}
	elseif($res <= 19){
		$sol = 3;
	}
	else{
		$sol = 4;
	}

	return $sol;

}

function IncrementoMovilidad($codigoDiagnostico,$idAlternativa){

	$total = NivelMovilidad($idAlternativa) - DiagnosticoNivelMovilidad($codigoDiagnostico);

	return $total;
}

function TecnicosIncrementoMovilidad($codigoDiagnostico,$idAlternativa){

	$res = NivelMovilidad($idAlternativa) - DiagnosticoNivelMovilidad($codigoDiagnostico);

	if($res <= 5){
		$sol = 0;
	}
	elseif($res <= 9){
		$sol = 1;
	}
	elseif($res <= 14){
		$sol = 2;
	}
	elseif($res <= 19){
		$sol = 3;
	}
	else{
		$sol = 4;
	}

	return $sol;
}

function IncrementoAuditiva($codigoDiagnostico,$idAlternativa){

	$total = NivelAuditiva($idAlternativa) - DiagnosticoNivelAuditiva($codigoDiagnostico);

	return $total;
}

function TecnicosIncrementoAuditiva($codigoDiagnostico, $idAlternativa){

	$res = NivelAuditiva($idAlternativa) - DiagnosticoNivelAuditiva($codigoDiagnostico);

	if($res <= 5){
		$sol = 0;
	}
	elseif($res <= 9){
		$sol = 1;
	}
	elseif($res <= 14){
		$sol = 2;
	}
	elseif($res <= 19){
		$sol = 3;
	}
	else{
		$sol = 4;
	}

	return $sol;

}

function IncrementoVision($codigoDiagnostico,$idAlternativa){

	$total = NivelVision($idAlternativa) - DiagnosticoNivelVision($codigoDiagnostico);

	return $total;
}

function TecnicosIncrementoVision($codigoDiagnostico,$idAlternativa){

	$res = NivelVision($idAlternativa) - DiagnosticoNivelVision($codigoDiagnostico);

	if($res <= 5){
		$sol = 0;
	}
	elseif($res <= 9){
		$sol = 1;
	}
	elseif($res <= 14){
		$sol = 2;
	}
	elseif($res <= 19){
		$sol = 3;
	}
	else{
		$sol = 4;
	}
	return $sol;

}


function PersonasDiscapacidad($codigoSolicitud){

	$discapacitados = TotalDiscapacidad($codigoSolicitud);
	$totalPersonas = PersonasUsuarias($codigoSolicitud);

	$porcentaje = ($discapacitados/$totalPersonas);

	return $porcentaje;
}

function SocialesPersonasDiscapacidad($codigoSolicitud){

	$discapacitados = TotalDiscapacidad($codigoSolicitud);
	$totalPersonas = PersonasUsuarias($codigoSolicitud);

	$porcentaje = ($discapacitados/$totalPersonas)*100;

	if($porcentaje < 5)
		$res = 0;
	elseif($porcentaje == 5 || $porcentaje < 9)
		$res = 2;
	else
		$res = 4;

	return $res;
}

function PersonasMovilidad($codigoSolicitud){

	$discapacitados = DiscapacidadMovilidad($codigoSolicitud);
	$totalPersonas = PersonasUsuarias($codigoSolicitud);

	$porcentaje = ($discapacitados/$totalPersonas);

	return $porcentaje;
}

function SocialesPersonasMovilidad($codigoSolicitud){

	$discapacitados = DiscapacidadMovilidad($codigoSolicitud);
	$totalPersonas = PersonasUsuarias($codigoSolicitud);

	$porcentaje = ($discapacitados/$totalPersonas)*100;

	if($porcentaje < 3)
		$res = 0;
	elseif($porcentaje == 3 || $porcentaje < 6)
		$res = 2;
	else
		$res = 4;

	return $res;
}


function PersonasVisual($codigoSolicitud){

	$discapacitados = DiscapacidadVision($codigoSolicitud);
	$totalPersonas = PersonasUsuarias($codigoSolicitud);

	$porcentaje = ($discapacitados/$totalPersonas);

	return $porcentaje;
}

function SocialesPersonasVisual($codigoSolicitud){

	$discapacitados = DiscapacidadVision($codigoSolicitud);
	$totalPersonas = PersonasUsuarias($codigoSolicitud);

	$porcentaje = ($discapacitados/$totalPersonas)*100;

	if($porcentaje < 1.15)
		$res = 0;
	elseif($porcentaje == 1.15 || $porcentaje < 2.3)
		$res = 2;
	else
		$res = 4;

	return $res;
}


function PersonasAuditiva($codigoSolicitud){

	$discapacitados = DiscapacidadAudicion($codigoSolicitud);
	$totalPersonas = PersonasUsuarias($codigoSolicitud);

	$porcentaje = ($discapacitados/$totalPersonas);

	return $porcentaje;

}
function SocialesPersonasAuditiva($codigoSolicitud){

	$discapacitados = DiscapacidadAudicion($codigoSolicitud);
	$totalPersonas = PersonasUsuarias($codigoSolicitud);

	$porcentaje = ($discapacitados/$totalPersonas)*100;

	if($porcentaje < 1.25)
		$res = 0;
	elseif($porcentaje == 1.25 || $porcentaje < 2.5)
		$res = 2;
	else
		$res = 4;

	return $res;

}




function SocialesPersonasMayores($codigoSolicitud){

	$discapacitados = PersonasMayores($codigoSolicitud);
	$totalPersonas = PersonasUsuarias($codigoSolicitud);

	$porcentaje = ($discapacitados/$totalPersonas)*100;

	if($porcentaje < 1.25)
		$res = 0;
	elseif($porcentaje == 1.25 || $porcentaje < 2.5)
		$res = 2;
	else
		$res = 4;

	return $res;
}


function PersonasDependientes($idAlternativa){

	$res = SelectValoracion($idAlternativa);

	if ($res){
      	if(mysqli_num_rows($res)>0){
        	while ($tupla=mysqli_fetch_array($res)){
               	if($tupla['Criterio'] == "Numero de personas dependientes")
               		$sol = $tupla['valor_valoracion'];
           	}
   		}	
   	}

   	return $sol;

}

function SocialesDependientes($idAlternativa,$codigoSolicitud){

	$pd = PersonasDependientes($idAlternativa);
	$totalPersonas = PersonasUsuarias($codigoSolicitud);

	$sol = ($pd/$totalPersonas)*100;

   	if($sol < 5)
   		$sol = 0;
   	elseif($sol == 5 || $sol < 10)
   		$sol = 2;
   	else
   		$sol = 4;

   	return $sol;
}


//Preguntar a Jesus

function IntensidadUso(){

	return 0;
}

function SocialesIntensidadUso(){

	return 0;
}


function HorarioFuncionamiento($idAlternativa){

	$res = SelectValoracion($idAlternativa);

	if ($res){
      	if(mysqli_num_rows($res)>0){
        	while ($tupla=mysqli_fetch_array($res)){
               	if($tupla['Criterio'] == "Horario de funcionamiento(h/dia)")
               		$sol = $tupla['valor_valoracion'];
           	}
   		}	
   	}

   	return $sol;
}

function SocialesHorarioFuncionamiento($idAlternativa){

	$sol = HorarioFuncionamiento($idAlternativa);

   	if($sol < 8)
   		$sol = 0;
   	elseif($sol == 8 || $sol < 16)
   		$sol = 2;
   	else
   		$sol = 4;

   	return $sol;
}


function LPHE($idAlternativa){

	$res = SelectValoracion($idAlternativa);

	if ($res){
      	if(mysqli_num_rows($res)>0){
        	while ($tupla=mysqli_fetch_array($res)){
               	if($tupla['Criterio'] == "Clasificación según LPHE")
               		$sol = $tupla['valor_valoracion'];
           	}
   		}	
   	}
   	return $sol;
}


function SocialesLPHE($idAlternativa){

	$sol = LPHE($idAlternativa);

   	if($sol == "Sin protección o baja protección")
   		$sol = 0;
   	elseif($sol == "Media protección")
   		$sol = 2;
   	else
   		$sol = 4;

   	return $sol;

}


function TipoIntervencion($idAlternativa){

	$res = SelectValoracion($idAlternativa);

	if ($res){
      	if(mysqli_num_rows($res)>0){
        	while ($tupla=mysqli_fetch_array($res)){
               	if($tupla['Criterio'] == "Tipo de Intervención")
               		$sol = $tupla['valor_valoracion'];
           	}
   		}	
   	}
   	return $sol;
}

function SocialesTipoIntervencion($idAlternativa){

	$sol = TipoIntervencion($idAlternativa);

   	if($sol == "Intensa")
   		$sol = 0;
   	elseif($sol == "Moderada")
   		$sol = 2;
   	else
   		$sol = 4;

   	return $sol;
}


function EstadoAmbientalPatrimonial($idAlternativa){

	$res = SelectValoracion($idAlternativa);

	if ($res){
      	if(mysqli_num_rows($res)>0){
        	while ($tupla=mysqli_fetch_array($res)){
               	if($tupla['Criterio'] == "Estado ambiental y patrimonial")
               		$sol = $tupla['valor_valoracion'];
           	}
   		}	
   	}

   	return $sol;

}

function SocialesEstadoAmbientalPatrimonial($idAlternativa){

	$sol = EstadoAmbientalPatrimonial($idAlternativa);

   	if($sol == "Escaso o Nula")
   		$sol = 0;
   	elseif($sol == "Medio")
   		$sol = 2;
   	else
   		$sol = 4;

   	return $sol;

}


function ArraigoPoblacion($idAlternativa){

	$res = SelectValoracion($idAlternativa);

	if ($res){
      	if(mysqli_num_rows($res)>0){
        	while ($tupla=mysqli_fetch_array($res)){
               	if($tupla['Criterio'] == "Arraigo de la población")
               		$sol = $tupla['valor_valoracion'];
           	}
   		}	
   	}
   	return $sol;
}

function SocialesArraigoPoblacion($idAlternativa){

	$sol = ArraigoPoblacion($idAlternativa);

   	if($sol == "Escaso o Nula")
   		$sol = 0;
   	elseif($sol == "Medio")
   		$sol = 2;
   	else
   		$sol = 4;

   	return $sol;
}

function CaracterAsistencial($idAlternativa){

	$res = SelectValoracion($idAlternativa);

	if ($res){
      	if(mysqli_num_rows($res)>0){
        	while ($tupla=mysqli_fetch_array($res)){
               	if($tupla['Criterio'] == "Caracter Asistencial"){
               		$sol = $tupla['valor_valoracion'];
               	}
           	}
   		}	
   	}
   	return $sol;
}


function SocialesCaracterAsistencial($idAlternativa){

	$sol = CaracterAsistencial($idAlternativa);

   	if($sol == "Escaso o Nula")
   		$sol = 0;
   	elseif($sol == "Medio")
   		$sol = 2;
   	else
   		$sol = 4;

   	return $sol;

}

function TecnicosNivelDXT($idAlternativa){

	$res = NivelDXT($idAlternativa);
	
	if($res <= 59){
		$sol = 0;
	}
	elseif($res <= 69){
		$sol = 1;
	}
	elseif($res <= 79){
		$sol = 2;
	}
	elseif($res <= 89){
		$sol = 3;
	}
	else{
		$sol = 4;
	}

    return $sol;

}

function TecnicosNivelMovilidad($idAlternativa){

	$res = NivelMovilidad($idAlternativa);
	
	if($res <= 59){
		$sol = 0;
	}
	elseif($res <= 69){
		$sol = 1;
	}
	elseif($res <= 79){
		$sol = 2;
	}
	elseif($res <= 89){
		$sol = 3;
	}
	else{
		$sol = 4;
	}

    return $sol;
}

function TecnicosNivelAuditiva($idAlternativa){

	$res = NivelAuditiva($idAlternativa);
	
	if($res <= 59){
		$sol = 0;
	}
	elseif($res <= 69){
		$sol = 1;
	}
	elseif($res <= 79){
		$sol = 2;
	}
	elseif($res <= 89){
		$sol = 3;
	}
	else{
		$sol = 4;
	}

    return $sol;
}

function TecnicosNivelVision($idAlternativa){

	$res = NivelVision($idAlternativa);
	
	if($res <= 59){
		$sol = 0;
	}
	elseif($res <= 69){
		$sol = 1;
	}
	elseif($res <= 79){
		$sol = 2;
	}
	elseif($res <= 89){
		$sol = 3;
	}
	else{
		$sol = 4;
	}

    return $sol;
}

function ConfiguracionArquitectonica($idAlternativa){

	$res = SelectValoracion($idAlternativa);

	if ($res){
      	if(mysqli_num_rows($res)>0){
        	while ($tupla=mysqli_fetch_array($res)){
               	if($tupla['Criterio'] == "Configuración Arquitectónica"){
               		$sol = $tupla['valor_valoracion'];
               	}
           	}
   		}	
   	}
   	return $sol;
}

function TecnicosConfiguracionArquitectonica($idAlternativa){

	$sol = ConfiguracionArquitectonica($idAlternativa);

   	if($sol == "Alta")
   		$sol = 0;
   	elseif($sol == "Media")
   		$sol = 2;
   	else
   		$sol = 4;

   	return $sol;

}


function EstadoFisico($idAlternativa){

	$res = SelectValoracion($idAlternativa);

	if ($res){
      	if(mysqli_num_rows($res)>0){
        	while ($tupla=mysqli_fetch_array($res)){
               	if($tupla['Criterio'] == "Estado Físico"){
               		$sol = $tupla['valor_valoracion'];
               	}
           	}
   		}	
   	}
   	return $sol;
}

function TecnicosEstadoFisico($idAlternativa){

	$sol = EstadoFisico($idAlternativa);

   	if($sol == "Alta")
   		$sol = 0;
   	elseif($sol == "Media")
   		$sol = 2;
   	else
   		$sol = 4;

   	return $sol;

}


function UsosActividades($idAlternativa){

	$res = SelectValoracion($idAlternativa);

	if ($res){
      	if(mysqli_num_rows($res)>0){
        	while ($tupla=mysqli_fetch_array($res)){
               	if($tupla['Criterio'] == "Usos y actividades"){
               		$sol = $tupla['valor_valoracion'];
               	}
           	}
   		}	
   	}

   	return $sol;

}


function TecnicosUsosActividades($idAlternativa){

	$sol = UsosActividades($idAlternativa);

   	if($sol == "Alta")
   		$sol = 0;
   	elseif($sol == "Media")
   		$sol = 2;
   	else
   		$sol = 4;

   	return $sol;

}


function RelacionesEntorno($idAlternativa){

	$res = SelectValoracion($idAlternativa);

	if ($res){
      	if(mysqli_num_rows($res)>0){
        	while ($tupla=mysqli_fetch_array($res)){
               	if($tupla['Criterio'] == "Relaciones con el entorno")
               		$sol = $tupla['valor_valoracion'];
           	}
   		}	
   	}
   	return $sol;

}

function TecnicosRelacionesEntorno($idAlternativa){

	$sol = RelacionesEntorno($idAlternativa);

   	if($sol == "Alta")
   		$sol = 0;
   	elseif($sol == "Media")
   		$sol = 2;
   	else
   		$sol = 4;

   	return $sol;

}


function Tecnico($idAlternativa){

	$res = SelectValoracion($idAlternativa);

	if ($res){
      	if(mysqli_num_rows($res)>0){
        	while ($tupla=mysqli_fetch_array($res)){
               	if($tupla['Criterio'] == "Técnico(dificultad de implantación)")
               		$sol = $tupla['valor_valoracion'];
           	}
   		}	
   	}

   	return $sol;

}

function TecnicosTecnico($idAlternativa){

	$sol = Tecnico($idAlternativa);

   	if($sol == "Alta")
   		$sol = 0;
   	elseif($sol == "Media")
   		$sol = 2;
   	else
   		$sol = 4;

   	return $sol;

}

function Urbanistico($idAlternativa){

	$res = SelectValoracion($idAlternativa);

	if ($res){
      	if(mysqli_num_rows($res)>0){
        	while ($tupla=mysqli_fetch_array($res)){
               	if($tupla['Criterio'] == "Urbanístico(dificultad de implantación)")
               		$sol = $tupla['valor_valoracion'];
           	}
   		}	
   	}
   	return $sol;
}

function TecnicosUrbanistico($idAlternativa){

	$sol = Urbanistico($idAlternativa);

   	if($sol == "Alta")
   		$sol = 0;
   	elseif($sol == "Media")
   		$sol = 2;
   	else
   		$sol = 4;

   	return $sol;

}

function Administrativo($idAlternativa){

	$res = SelectValoracion($idAlternativa);

	if ($res){
      	if(mysqli_num_rows($res)>0){
        	while ($tupla=mysqli_fetch_array($res)){
               	if($tupla['Criterio'] == "Administrativo(dificultad de implantación)")
               		$sol = $tupla['valor_valoracion'];
           	}
   		}	
   	}

   	return $sol;

}

function TecnicosAdministrativo($idAlternativa){

	$sol = Administrativo($idAlternativa);

   	if($sol == "Alta")
   		$sol = 0;
   	elseif($sol == "Media")
   		$sol = 2;
   	else
   		$sol = 4;

   	return $sol;
}

function EconomicosEstabilidadPresupuestaria($codigoSolicitud){

	$sol = EstabilidadPresupuestaria($codigoSolicitud);

	if($sol < 1.4)
   		$sol = 0;
   	elseif($sol ==1.4 || $sol < 1.10)
   		$sol = 2;
   	else
   		$sol = 4;

   	return $sol;

}



function EconomicosRentabilidadEconomica($codigoSolicitud){

	$sol = RentabilidadEconomica($codigoSolicitud);

	if($sol == "Escasa")
   		$sol = 0;
   	elseif($sol == "Media")
   		$sol = 2;
   	else
   		$sol = 4;

    return $sol;

}

function CosteMedida(){
	return 0;
}

function EconomicosCosteMedida(){
	return 0;
}

function EconomicosCultural($codigoSolicitud){

	$sol = Cultural($codigoSolicitud);

	if($sol == "No")
   		$sol = 0;
   	elseif($sol == "Media")
   		$sol = 2;
   	else
   		$sol = 4;


    return $sol;

}

function EconomicosFinanciacionExterna($codigoSolicitud){

	$sol = PosibilidadFinanciacion($codigoSolicitud);

	
	if($sol == "No")
   		$sol = 0;
   	elseif($sol == "Media")
   		$sol = 2;
   	else
   		$sol = 4;

    return $sol;

}

function ValorReposicion(){

	return 0;
}

function EconomicosValorReposicion(){

	return 0;
}


function OtrasActuaciones($idAlternativa){

	$res = SelectValoracion($idAlternativa);

	if ($res){
      	if(mysqli_num_rows($res)>0){
        	while ($tupla=mysqli_fetch_array($res)){
               	if($tupla['Criterio'] == "Otras actuaciones (no de Acc.) previstas en el edificio")
               		$sol = $tupla['valor_valoracion'];
           	}
   		}	
   	}
   	return $sol;
}

function EconomicosOtrasActuaciones($idAlternativa){

	$sol = OtrasActuaciones($idAlternativa);

   	if($sol == "sin otras actuaciones o no afectan a la Acc.")
   		$sol = 0;
   	elseif($sol == "tras actuaciones con afección media o baja a la Acc")
   		$sol = 2;
   	else
   		$sol = 4;

   	return $sol;

}





function IntroducirTecnicos($idAlternativa,$codigoDiagnostico){

	IntroducirTuplaTecnicos($idAlternativa,$codigoDiagnostico,0.027, NivelDXT($idAlternativa),TecnicosNivelDXT($idAlternativa),0.027*TecnicosNivelDXT($idAlternativa));
	IntroducirTuplaTecnicos($idAlternativa,$codigoDiagnostico,0.027, NivelMovilidad($idAlternativa),TecnicosNivelMovilidad($idAlternativa), 0.027*TecnicosNivelAuditiva($idAlternativa));
	IntroducirTuplaTecnicos($idAlternativa,$codigoDiagnostico,0.027, NivelAuditiva($idAlternativa),TecnicosNivelAuditiva($idAlternativa),0.027*TecnicosNivelAuditiva($idAlternativa));
	IntroducirTuplaTecnicos($idAlternativa,$codigoDiagnostico,0.027, NivelVision($idAlternativa),TecnicosNivelVision($idAlternativa), 0.027*TecnicosNivelVision($idAlternativa));
	IntroducirTuplaTecnicos($idAlternativa,$codigoDiagnostico,0.027, IncrementoDXT($idAlternativa,$codigoDiagnostico),TecnicosIncrementoDXT($idAlternativa,$codigoDiagnostico), 0.027*TecnicosIncrementoDXT($idAlternativa,$codigoDiagnostico));
	IntroducirTuplaTecnicos($idAlternativa,$codigoDiagnostico,0.027, IncrementoMovilidad($idAlternativa,$codigoDiagnostico),TecnicosIncrementoMovilidad($idAlternativa,$codigoDiagnostico), 0.027*TecnicosIncrementoMovilidad($idAlternativa,$codigoDiagnostico));
	IntroducirTuplaTecnicos($idAlternativa,$codigoDiagnostico,0.027, IncrementoAuditiva($idAlternativa,$codigoDiagnostico),TecnicosIncrementoAuditiva($idAlternativa,$codigoDiagnostico), 0.027*TecnicosIncrementoAuditiva($idAlternativa,$codigoDiagnostico));
	IntroducirTuplaTecnicos($idAlternativa,$codigoDiagnostico,0.027, IncrementoVision($idAlternativa,$codigoDiagnostico),TecnicosIncrementoVision($idAlternativa,$codigoDiagnostico), 0.027*TecnicosIncrementoVision($idAlternativa,$codigoDiagnostico));
	IntroducirTuplaTecnicos($idAlternativa,$codigoDiagnostico,0.017, ConfiguracionArquitectonica($idAlternativa),TecnicosConfiguracionArquitectonica($idAlternativa), 0.017*TecnicosConfiguracionArquitectonica($idAlternativa));
	IntroducirTuplaTecnicos($idAlternativa,$codigoDiagnostico,0.017, EstadoFisico($idAlternativa),TecnicosEstadoFisico($idAlternativa), 0.017*TecnicosEstadoFisico($idAlternativa));
	IntroducirTuplaTecnicos($idAlternativa,$codigoDiagnostico,0.017, UsosActividades($idAlternativa),TecnicosUsosActividades($idAlternativa), 0.017*TecnicosUsosActividades($idAlternativa));
	IntroducirTuplaTecnicos($idAlternativa,$codigoDiagnostico,0.017, RelacionesEntorno($idAlternativa),TecnicosRelacionesEntorno($idAlternativa), 0.017*TecnicosRelacionesEntorno($idAlternativa));
	IntroducirTuplaTecnicos($idAlternativa,$codigoDiagnostico,0.017, Tecnico($idAlternativa),TecnicosTecnico($idAlternativa), 0.017*TecnicosTecnico($idAlternativa));
	IntroducirTuplaTecnicos($idAlternativa,$codigoDiagnostico,0.017, Urbanistico($idAlternativa),TecnicosUrbanistico($idAlternativa), 0.017*TecnicosUrbanistico($idAlternativa));
	IntroducirTuplaTecnicos($idAlternativa,$codigoDiagnostico,0.017, Administrativo($idAlternativa),TecnicosAdministrativo($idAlternativa), 0.017*TecnicosAdministrativo($idAlternativa));

}


function IntroducirEconomicos($codigoDiagnostico){

	IntroducirTuplaTecnicos($codigoSolicitud,0.054, CosteMedida(),EconomicosCosteMedida(),0.054*EconomicosCosteMedida());
	IntroducirTuplaTecnicos($codigoSolicitud,0.054, EstabilidadPresupuestaria($codigoSolicitud),EconomicosEstabilidadPresupuestaria($codigoSolicitud),0.054*EconomicosEstabilidadPresupuestaria($codigoSolicitud));
	IntroducirTuplaTecnicos($codigoSolicitud,0.054, RentabilidadEconomica($codigoSolicitud),EconomicosRentabilidadEconomica($codigoSolicitud),0.054*EconomicosRentabilidadEconomica($codigoSolicitud));
	IntroducirTuplaTecnicos($codigoSolicitud,0.054, Cultural($codigoDiagnostico),EconomicosCultural($codigoDiagnostico), 0.054*EconomicosCultural($codigoDiagnostico));
	IntroducirTuplaTecnicos($codigoSolicitud,0.054, PosibilidadFinanciacion($codigoDiagnostico),EconomicosFinanciacionExterna($codigoDiagnostico), 0.054*EconomicosFinanciacionExterna($codigoDiagnostico));
	IntroducirTuplaTecnicos($codigoSolicitud,0.054, ValorReposicion(),EconomicosValorReposicion(),0.054*EconomicosValorReposicion());
	IntroducirTuplaTecnicos($codigoSolicitud,0.054, OtrasActuaciones($codigoDiagnostico),EconomicosOtrasActuaciones($codigoDiagnostico),0.054*EconomicosOtrasActuaciones($codigoDiagnostico));

}


function IntroducirSociales($idAlternativa,$codigoDiagnostico){

	IntroducirTuplaSociales($idAlternativa,$codigoDiagnostico,0.054,PersonasDiscapacidad($codigoDiagnostico),SocialesPersonasDiscapacidad($codigoDiagnostico),0.054*SocialesPersonasDiscapacidad($codigoDiagnostico));
	IntroducirTuplaSociales($idAlternativa,$codigoDiagnostico,0.054, PersonasMovilidad($codigoDiagnostico),SocialesPersonasMovilidad($codigoDiagnostico),0.054*SocialesPersonasMovilidad($codigoDiagnostico));
	IntroducirTuplaSociales($idAlternativa,$codigoDiagnostico,0.054, PersonasVisual($codigoDiagnostico),SocialesPersonasVisual($codigoDiagnostico),0.054*SocialesPersonasVisual($codigoDiagnostico));
	IntroducirTuplaSociales($idAlternativa,$codigoDiagnostico,0.054, PersonasAuditiva($codigoDiagnostico),SocialesPersonasAuditiva($codigoDiagnostico), 0.054*SocialesPersonasAuditiva($codigoDiagnostico));
	IntroducirTuplaSociales($idAlternativa,$codigoDiagnostico,0.054, PorcentajePersonasMayores($codigoDiagnostico),SocialesPersonasMayores($codigoDiagnostico), 0.054*SocialesPersonasMayores($codigoDiagnostico));
	IntroducirTuplaSociales($idAlternativa,$codigoDiagnostico,0.017, PersonasDependientes($idAlternativa),SocialesDependientes($idAlternativa),0.017*SocialesDependientes($idAlternativa));
	IntroducirTuplaSociales($idAlternativa,$codigoDiagnostico,0.017, IntensidadUso($idAlternativa),SocialesIntesidadUso($idAlternativa),0.017*SocialesIntesidadUso($idAlternativa));
	IntroducirTuplaSociales($idAlternativa,$codigoDiagnostico,0.017, HorarioFuncionamiento($idAlternativa),SocialesHorarioFuncionamiento($idAlternativa),0.017*SocialesHorarioFuncionamiento($idAlternativa));
	IntroducirTuplaSociales($idAlternativa,$codigoDiagnostico,0.017,LPHE($idAlternativa),SocialesLPHE($idAlternativa),0.017*SocialesLPHE($idAlternativa));
	IntroducirTuplaSociales($idAlternativa,$codigoDiagnostico,0.017, TipoIntervencion($idAlternativa),SocialesTipoIntervencion($idAlternativa),0.017*SocialesTipoIntervencion($idAlternativa));
	IntroducirTuplaSociales($idAlternativa,$codigoDiagnostico,0.017, EstadoAmbientalPatrimonial($idAlternativa),SocialesEstadoAmbientalPatrimonial($idAlternativa),0.017*SocialesEstadoAmbientalPatrimonial($idAlternativa));
	IntroducirTuplaSociales($idAlternativa,$codigoDiagnostico,0.017, ArraigoPoblacion(),SocialesArraigoPoblacion(),0.017*SocialesArraigoPoblacion());
	IntroducirTuplaSociales($idAlternativa,$codigoDiagnostico,0.017, CaracterAsistencial($idAlternativa),SocialesCaracterAsistencial($idAlternativa),0.017*SocialesCaracterAsistencial($idAlternativa));

}



function MostrarDatosFormulario($codigo_solicitud)
{


  $html = "";
  $edificio = SelectEdificio($codigo_solicitud);
  $edificio_publico = SelectEdificioPublico($codigo_solicitud);
  $edificio_privado = SelectEdificioPrivado($codigo_solicitud);

  $selectSolicitud = selectSolicitud($codigo_solicitud);



  if ($selectSolicitud)
  {
    if(mysqli_num_rows($selectSolicitud)>0)
    {     
      while ($tupla=mysqli_fetch_array($selectSolicitud))
      {
        $id_persona = $tupla['Id_persona'];
        $id_rep = $tupla['Id_representante'];

      }
    }
  }


  $Persona = selectPersona($id_persona);
  $Representante = selectRepresentante($id_rep);



  if ($Persona)
  {
    if(mysqli_num_rows($Persona)>0)
    {     
      while ($tupla=mysqli_fetch_array($Persona))
      {
        $nombre_apellidos = $tupla['Nombre_Apellidos'];
        $telefono = $tupla['Telefono'];
        $email = $tupla['Email'];
        $dni = $tupla['DNI'];
        $calle = $tupla['Calle'];
        $numero = $tupla['Numero'];
        $puerta = $tupla['Puerta'];
        $planta = $tupla['Planta'];
        $codigo_postal = $tupla['Codigo_Postal'];
        $municipio = $tupla['Municipio'];
        $provincia = $tupla['Provincia'];
      }
    }
  }

$html .=
"

  <div id='tablapdf' >
  <table >
       <thead>
 
 
        <tr align=center>
            <th colspan='2'>A. Identificación y datos jurídicos</th>
        </tr>

        <tr align=center>
            <th colspan='2' > A.1. Datos de la persona solicitante </th>
        </tr>

      </thead>

      <tbody >
           <tr >
           <td> Código Postal: $codigo_postal </td>
           <td> Municipio: $municipio </td>
           </tr>
           <tr >
           <td> Provincia: $provincia </td>
           <td></td>
           </tr>
           <tr >
           <td> Nombre y Apellidos: $nombre_apellidos </td>
           <td> Telefono: $telefono </td>
           </tr>
           <tr >
           <td> Email: $email </td>
           <td> Nº: $numero </td>
           </tr>
           <tr >
           <td> Puerta: $puerta </td>
           <td> DNI: $dni </td>
           </tr>
           <tr >
           <td> Calle: $calle </td>
           <td> Planta: $planta </td>
           </tr>
        </tbody>
      </table>
      </div>

";

if ($Representante)
  {
    if(mysqli_num_rows($Representante)>0)
    {     
      while ($tupla2=mysqli_fetch_array($Representante))
      {
        $nombre_apellidos = $tupla2['Nombre_Apellidos'];
        $telefono = $tupla2['Telefono'];
        $email = $tupla2['Email'];
        $dni = $tupla2['DNI'];
        $calle = $tupla2['Calle'];
        $numero = $tupla2['Numero'];
        $puerta = $tupla2['Puerta'];
        $planta = $tupla2['Planta'];
        $codigo_postal = $tupla2['Codigo_Postal'];
        $municipio = $tupla2['Municipio'];
        $provincia = $tupla2['Provincia'];
        $calidad = $tupla2['Actua_en_calidad_de'];
      }
    
  
$html .=
"
<div id='tablapdf' >
   <table >
       <thead>
        <tr align=center>
            <th colspan='2' >A.2. Datos de la persona representante (en su caso) </th>
        </tr>

      </thead>

      <tbody >
           <tr >
           <td> Código Postal: $codigo_postal </td>
           <td> Municipio: $municipio </td>
           </tr>
           <tr >
           <td> Provincia: $provincia </td>
           <td> Actúa en calidad de: $calidad </td>
           </tr>
           <tr >
           <td> Nombre y Apellidos: $nombre_apellidos </td>
           <td> Telefono: $telefono </td>
           </tr>
           <tr >
           <td> Email: $email </td>
           <td> Nº: $numero </td>
           </tr>
           <tr >
           <td> Puerta: $puerta </td>
           <td> DNI: $dni </td>
           </tr>
           <tr >
           <td> Calle: $calle </td>
           <td> Planta: $planta </td>
           </tr>
        </tbody>
      </table>
      </div>

";


  }
}


if ($edificio_privado)
  {
    if(mysqli_num_rows($edificio_privado)>0)
    {     
      while ($tupla3=mysqli_fetch_array($edificio_privado))
      {
        $hombres_ayuda = $tupla3['Hombres_ayuda'];
        $mujeres_ayuda = $tupla3['Mujeres_ayuda'];
        $hombres_ayuda_aveces = $tupla3['Hombres_ayuda_aveces'];
        $mujeres_ayuda_aveces = $tupla3['Mujeres_ayuda_aveces'];
        $hombres_ayuda_siempre = $tupla3['Hombres_ayuda_siempre'];
        $mujeres_ayuda_siempre = $tupla3['Mujeres_ayuda_siempre'];
        $hombres_ayuda_privada = $tupla3['Hombres_ayuda_entidad_privada'];
        $hombres_ayuda_publica = $tupla3['Hombres_ayuda_entidad_publica'];
        $mujeres_ayuda_privada = $tupla3['Mujeres_ayuda_entidad_privada'];
        $mujeres_ayuda_publica = $tupla3['Mujeres_ayuda_entidad_publica'];
        $hombres_ayuda_familiar = $tupla3['Hombres_ayuda_familiar'];
        $mujeres_ayuda_familiar = $tupla3['Mujeres_ayuda_familiar'];
        $mujeres_desplazamiento_aveces = $tupla3['Mujeres_desplazamiento_aveces'];
        $mujeres_desplazamiento_siempre = $tupla3['Mujeres_desplazamiento_siempre'];
        $hombres_desplazamiento_aveces = $tupla3['Hombres_desplazamiento_aveces'];
        $hombres_desplazamiento_siempre = $tupla3['Hombres_desplazamiento_siempre'];
        $mujeres_tiempo_ayuda = $tupla3['Mujeres_tiempo_ayuda'];
        $hombres_tiempo_ayuda = $tupla3['Hombres_tiempo_ayuda'];


      }
    }
  }

if ($edificio_publico)
  {
    if(mysqli_num_rows($edificio_publico)>0)
    {     
      while ($tupla4=mysqli_fetch_array($edificio_publico))
      {
        $ingresos = $tupla4['Ingresos'];
        $gastos = $tupla4['Gastos']; 
        $estabilidad = $tupla4['Estabilidad'];
        $rentabilidad = $tupla4['Rentabilidad'];
        $cultural = $tupla4['Cultural'];
        $posibilidad = $tupla4['Financiacion_externa'];

      }
    }
  }


if ($edificio)
  {
    if(mysqli_num_rows($edificio)>0)
    {     
      while ($tupla5=mysqli_fetch_array($edificio))
      {
        $direccion = $tupla5['Direccion'];
        $catastral = $tupla5['Ref_catastral'];
        $provincia = $tupla5['Provincia'];
        $numero = $tupla5['Numero'];
        $localidad = $tupla5['Localidad'];
        $puerta = $tupla5['Puerta'];
        $planta = $tupla5['Planta'];
        $codigo_postal = $tupla5['Codigo_postal'];
        $municipio = $tupla5['Municipio'];
        $provincia = $tupla5['Provincia'];
        $tenencia = $tupla5['Tenencia'];


        //datos 2

        $personas = $tupla5['Personas_usuarias'];
        $num_mujeres = $tupla5['Personas_usuarias_femeninas']; 
        $num_hombres  = $tupla5['Personas_usuarias_masculinas'];
        $mujeres_mayores = $tupla5['Mujeres_mayores'];
        $hombres_mayores =  $tupla5['Hombres_mayores'];
        $mujeres_ruedas = $tupla5['Mujeres_silla_ruedas'];
        $hombres_ruedas = $tupla5['Hombres_silla_ruedas'];
        $mujeres_vision = $tupla5['Mujeres_vision'];
        $hombres_vision = $tupla5['Hombres_vision'];
        $mujeres_intelectuales = $tupla5['Mujeres_intelectual'];
        $hombres_intelectuales = $tupla5['Hombres_intelectual'];
        $mujeres_audicion = $tupla5['Mujeres_audicion'];
        $hombres_audicion = $tupla5['Hombres_audicion'];
        $mujeres_movilidad = $tupla5['Mujeres_movilidad'];
        $hombres_movilidad = $tupla5['Hombres_movilidad'];
        $niñas_ruedas = $tupla5['Ninas_silla_ruedas'];
        $niños_ruedas = $tupla5['Ninos_silla_ruedas'];
        $niñas_audicion = $tupla5['Ninas_audicion'];
        $niños_audicion = $tupla5['Ninos_audicion'];
        $niñas_comprension = $tupla5['Ninas_compresion'];
        $niños_comprension = $tupla5['Ninos_compresion'];
        $niñas_vision = $tupla5['Ninas_vision'];
        $niños_vision = $tupla5['Ninos_vision']; 
        $niñas_movilidad  = $tupla5['Ninas_movilidad'];
        $niños_movilidad = $tupla5['Ninos_movilidad'];



        //Datos 5 cambian en privada y publica
/*
        $ingresos = $tupla5['Ingresos'];
        $gastos = $tupla5['Gastos']; 
        $estabilidad = $tupla5['Estabilidad'];
        $rentabilidad = $tupla5['Rentabilidad'];
        $cultural = $tupla5['Cultural'];
        $posibilidad = $tupla5['Financiacion_externa'];

*/



        //Datos 4
        $acceso_exterior = $tupla5['Acceso_exterior'];
        $vestibulo_escalera = $tupla5['Vestibulo_escalera'];
        $escalera_comunitaria = $tupla5['Escalera_comunitaria']; 
        $ascensor_comunitario = $tupla5['Ascensor_comunitario'];
        $portal_ascensor_comunitario = $tupla5['Portal_ascensor_comunitario'];
        $ascensor_comunitario_problemas = $tupla5['Problemas_ascensor_comunitar'];
        $otros_lugares = $tupla5['Otros_lugares'];
        $vestibulo_comunitario = $tupla5['Vestibulo'];

        $ascensor_garaje = $tupla5['Ascensor_garaje'];
        $aparcamiento = $tupla5['Aparcamiento'];
        $acceso_exterior_garaje = $tupla5['Acceso_exterior_garaje'];
        $ascensor_garaje_problemas = $tupla5['Problemas_ascensor_garaje'];
        $vestibulo_aparcamiento = $tupla5['Vestibulo_aparcamiento'];
        $escalera_garaje = $tupla5['Escalera_garaje'];
        $vestibulo_garaje = $tupla5['Vestibulo_garaje'];


        $zona_juegos = $tupla5['Zona_juegos'];
        $acceso_vestuarios = $tupla5['Acceso_vestuarios_exterior'];
        $recorrido_zona_juegos = $tupla5['Acceso_zona_juegos'];
        $vestuarios_exterior = $tupla5['Vestuarios_exterior'];
        $acceso_exterior_2 = $tupla5['Edificio_exterior'];
        $acceso_piscina = $tupla5['Acceso_piscina_exterior'];
        $piscina_exterior = $tupla5['Piscina_exterior'];



      }
    }
  }
    
  
$html .=
"
<div id='tablapdf' >
 <table >
       <thead>
        <tr align=center>
            <th colspan='2' >A.3. Datos del edificio (sobre el que se quiere intervenir) </th>
        </tr>

      </thead>

      <tbody>
           <tr >
           <td> Calle: $direccion </td>
           <td> Planta: $planta </td>
           </tr>
           <tr >
           <td> Referencia catastral: $catastral </td>
            <td> Código Postal: $codigo_postal </td>
           </tr>
           <tr >
           <td> Provincia: $provincia </td>
           <td> Municipio: $municipio </td>
           </tr>
           <tr >
           <td> Localidad: $localidad </td>
           <td> Tenencia : $tenencia </td>
           </tr>
           <tr >
           <td> Nº: $numero </td>
           <td> Puerta: $puerta </td>
  
           </tr>

        </tbody>
      </table>
      </div>

";


$html .=
"
<br><br>
 <div id='tablapdf' >
<table >
       <thead>
        <tr align=center>
            <th colspan='2' >B. Datos de carácter social </th>
        </tr>

        <tr align=center>
            <th colspan='2' >B.1. Datos de las personas en la unidad de convivencia (por sexo)</th>
        </tr>


      </thead>

      <tbody>
           <tr >
           <td> Nº de personas usuarias en el edificio: $personas </td> 
           <td></td> 
           </tr>
           <tr >
           <td> Nº de mujeres en el edificio: $num_mujeres </td>
           <td> Nº de hombres en el edificio: $num_hombres </td> 
           </tr>
           <tr >
           <td> Nº de mujeres mayores de 65 años en el edificio: $mujeres_mayores </td>
           <td> Nº de hombres mayores de 65 años en el edificio: $hombres_mayores </td>
           </tr>

        </tbody>
      </table>

    <table >
       <thead>
        <tr align=center>
            <th colspan='2' > B.2. Datos de las discapacidades que tienen las personas de 6 o más años</th>
        </tr>

      </thead>
      <tbody>

         <tr >
           <td> Nº de mujeres en silla de ruedas: $mujeres_ruedas </td>
           <td> Nº de hombres en silla de ruedas: $hombres_ruedas </td>
          </tr>
          <tr >
           <td> Nº de mujeres con problemas de visión: $mujeres_vision </td>
           <td> Nº de hombres con problemas de visión: $hombres_vision </td>
          </tr>
          <tr >
           <td> Nº de mujeres con problemas en el funcionamiento intelectual y la conducta adaptativa: $mujeres_intelectuales </td>
           <td> Nº de hombres con problemas en el funcionamiento intelectual y la conducta adaptativa: $hombres_intelectuales </td>
          </tr>
          <tr >
           <td> Nº de mujeres con problemas de audición: $mujeres_audicion </td>
           <td> Nº de hombres con problemas de audición: $hombres_audicion </td>
          </tr>
          <tr >
           <td> Nº de mujeres con problemas de movilidad: $mujeres_movilidad </td>
           <td> Nº de hombres con problemas de movilidad: $hombres_movilidad </td>
          </tr>



      </tbody>
      </table>

    <table >
       <thead>
        <tr align=center>
            <th colspan='2' > B.3. Datos de las discapacidades que tienen las personas menores de 6 años</th>
        </tr>

      </thead>
      <tbody >

         <tr >
           <td> Nº de niñas en silla de ruedas: $mujeres_ruedas </td>
           <td> Nº de niños en silla de ruedas: $hombres_ruedas </td>
          </tr>
          <tr >
           <td> Nº de niñas con problemas de visión: $niñas_vision </td>
           <td> Nº de niños con problemas de visión: $niños_vision </td>
          </tr>
          <tr >
           <td> Nº de niñas con problemas en el funcionamiento intelectual y la conducta adaptativa: $niñas_comprension </td>
           <td> Nº de niños con problemas en el funcionamiento intelectual y la conducta adaptativa: $niños_comprension </td>
          </tr>
          <tr >
           <td> Nº de niñas con problemas de audición: $niñas_audicion </td>
           <td> Nº de niños con problemas de audición: $niños_audicion </td>
          </tr>
          <tr >
           <td> Nº de niñas con problemas de movilidad: $niñas_movilidad </td>
           <td> Nº de niños con problemas de movilidad: $niños_movilidad </td>
          </tr>



      </tbody>
      </table>

      </div>

";


$tipoSolicitud = $_SESSION['Tipo_solicitud'];
  
if($tipoSolicitud == 1)
{
$html .=
"
<br><br><br>
 <div id='tablapdf' >
  <table >
       <thead>
        <tr align=center>
            <th colspan='2' > C. Datos económicos del edificio </th>
        </tr>
        <tr align=center>
            <th colspan='2' > C.1. Capacidad económica </th>
        </tr>

      </thead>

      <tbody>
           <tr >
           <td> Ingresos: $ingresos </td>
           <td> Gastos: $gastos </td>
           </tr>
           <tr >
           <td> Estabilidad: $estabilidad </td>
           <td> Rentabilidad económica: $rentabilidad </td>
           </tr>

         </tbody>
      </table>

<table >
       <thead>
        <tr align=center>
            <th colspan='2' > C.2. Facilitadores de la mejora </th>
        </tr>

      </thead>

      <tbody>
          <tr >
           <td> 1% cultural (solo en edificios de la Administración Pública: $cultural </td>
           <td> Posibilidad de financiación externa: $posibilidad </td>
           </tr>


         </tbody>
      </table>


      </div>

";

}
else
{

  $html .=
"
<br><br><br>
 <div id='tablapdf' >
  <table >
       <thead>
        <tr align=center>
            <th colspan='2' > C. Datos económicos del edificio </th>
        </tr>
        <tr align=center>
            <th colspan='2' > C.1. Capacidad económica </th>
        </tr>

      </thead>

      <tbody>
           <tr >
           <td> Ingresos: $ingresos </td>
           <td> Gastos: $gastos </td>
           </tr>
           <tr >
           <td> Estabilidad: $estabilidad </td>
           <td> Rentabilidad económica: $rentabilidad </td>
           </tr>

         </tbody>
      </table>

<table >
       <thead>
        <tr align=center>
            <th colspan='2' > C.2. Facilitadores de la mejora </th>
        </tr>

      </thead>

      <tbody>
          <tr >
           <td> 1% cultural (solo en edificios de la Administración Pública: $cultural </td>
           <td> Posibilidad de financiación externa: $posibilidad </td>
           </tr>


         </tbody>
      </table>


      </div>

";

}

$html .=
"
<br><br>
 <div id='tablapdf' >
<table >
       <thead>
        <tr align=center>
            <th colspan='2' > D. Relación de problemas de accesibilidad del edificio </th>
        </tr>
        <tr align=center>
            <th colspan='2' > D.1 Relación de problemas de accesibilidad en el interior del edificio </th>
        </tr>

      </thead>

      <tbody>
           <tr >
           <td> Acceso desde el exterior: $acceso_exterior </td>
           <td> Recorrido desde el vestíbulo hasta la escalera: $vestibulo_escalera </td>
           </tr>
           <tr >
           <td> Escalera: $escalera_comunitaria </td>
           <td> Ascensor: $ascensor_comunitario </td>
           </tr>
            <tr >
           <td> Recorrido desde el vestíbulo hasta el ascensor: $portal_ascensor_comunitario </td>
           <td> Ascensor con problemas: $ascensor_comunitario_problemas </td>
           </tr>
           <tr >
           <td> Otros lugares: $otros_lugares </td>
           <td> Vestíbulo: $vestibulo_comunitario </td>
           </tr>

         </tbody>
      </table>

<table >
       <thead>
        <tr align=center>
            <th colspan='2' > D.2 Zona de garaje/aparcamiento </th>
        </tr>

      </thead>

      <tbody >
           <tr >
           <td> Ascensor: $ascensor_garaje </td>
           <td> Plaza de aparcamiento: $aparcamiento </td>
           </tr>
           <tr >
           <td> Acceso desde el exterior: $acceso_exterior_garaje </td>
           <td> Ascensor con problemas: $ascensor_garaje_problemas </td>
           </tr>
            <tr >
           <td> Recorrido desde el vestíbulo hasta el aparcamiento: $vestibulo_aparcamiento </td>
           <td> Escalera: $escalera_garaje </td>
           </tr>
           <tr >
           <td> Vestíbulo: $vestibulo_garaje </td>
           <td></td>
           </tr>

         </tbody>
      </table>


      <table >
       <thead>
  
        <tr align=center>
            <th colspan='2' > D.3 Zona de espacios abiertos </th>
        </tr>

      </thead>

      <tbody>
           <tr >
           <td> Zonas de juego/deporte: $zona_juegos </td>
           <td> Recorrido desde el acceso hasta las zonas de vestuarios: $acceso_vestuarios </td>
           </tr>
           <tr >
           <td> Recorrido desde el acceso hasta las zonas de juego/deportes: $recorrido_zona_juegos </td>
           <td> Zona de vestuarios: $vestuarios_exterior </td>
           </tr>
            <tr >
           <td> Acceso desde el edificio: $acceso_exterior_2 </td>
           <td> Recorrido desde el acceso hasta piscina: $acceso_piscina </td>
           </tr>
           <tr >
           <td> Piscina: $piscina_exterior </td>
           <td></td>
           </tr>

         </tbody>
      </table>




      </div>

";





return $html;

}

function MostrarDatosDiagnostico($id_diagnostico)
{
  $tipo =  $_SESSION['Tipo_solicitud'];

  $fichas = SelectFichasDiagnostico($id_diagnostico);

  $paratodos_general = DiagnosticoNivelDXT($id_diagnostico);
  $vision_general = DiagnosticoNivelVision($id_diagnostico);
  $auditivo_general = DiagnosticoNivelAuditiva($id_diagnostico);
  $movilidad_general = DiagnosticoNivelMovilidad($id_diagnostico);

  $valores = array();
  $valores_dxt = array();
  $valores_mov = array();
  $valores_au= array();
  $valores_vi = array();



  $html = "";


  $html .=
"
<br><br><br>



 <div id='DiagnosticoGeneral' style = 'clear:both;'> 

 <h3>Valores de accesibilidad generales</h3>

<div id='tablapdf' >
  <table>

      <tbody >
           <tr align=center>
           <td> Para todos: </td>
           <td> $paratodos_general %</td>
           </tr>
           <tr align=center>
            <td> Discapacidad auditiva:</td> 
            <td> $vision_general %</td>
           </tr>
           <tr align=center>
            <td> Discapacidad auditiva:</td> 
            <td> $auditivo_general %</td>
           </tr>
           <tr align=center>
            <td> Discapacidad movilidad:</td> 
            <td> $movilidad_general %</td>
           </tr>


         </tbody>
      </table>

 </div>

</div>

";




  if ($fichas)
  {
    if(mysqli_num_rows($fichas)>0)
    {     
      while ($tupla=mysqli_fetch_array($fichas))
      {
        $codigo_componente = $tupla['Codigo_componente'];
        $contador = $tupla['Contador'];
        $id = $tupla['Id_ficha'];
        $repeticiones = $tupla['Repeticiones'];
        $pg = $tupla['Porcentaje_general'];
        $pm = $tupla['Porcentaje_mov'];
        $pa = $tupla['Porcentaje_au'];
        $pv = $tupla['Porcentaje_vi'];


        $i = 0;

        $datosFicha = SelectDatosFicha($id);

        if ($datosFicha)
        {
          if(mysqli_num_rows($datosFicha)>0)
          {     
            while ($tupla2=mysqli_fetch_array($datosFicha))
             {
                array_push($valores, $tupla2['Valor']);
                array_push($valores_dxt, $tupla2['Relevancia_dxt']);
                array_push($valores_mov, $tupla2['Relevancia_mov']);
                array_push($valores_au, $tupla2['Relevancia_au']);
                array_push($valores_vi, $tupla2['Relevancia_vi']);
             }

          }
        }

        $tod = array_sum($valores_dxt);
        $mov = array_sum($valores_mov);
        $au = array_sum($valores_au);
        $vi = array_sum($valores_vi);





$html .=
"
<br><br><br>
 <div id='DiagnosticoFicha'>

";

      $ficha = SelectFichaByCodigo($codigo_componente,$tipo);

      if ($ficha)
      {
        if(mysqli_num_rows($ficha)>0)
        {     
          while ($tupla3=mysqli_fetch_array($ficha))
          {
            $titulo_componente = $tupla3['Titulo_componente'];
          }
        }
      }
$html .=
"
 <h3>Ficha: $codigo_componente -  $contador: $titulo_componente</h3>
";

      $ficha = SelectFichaByCodigo($codigo_componente,$tipo);
  
      if ($ficha)
      {
        if(mysqli_num_rows($ficha)>0)
        {     
        $html .=
        "

        <div id='tablapdf'>
          <table>

            <thead>
      
            <tr align=center>
                <th> Componentes y Características </th>
                <th> Valor  </th>
                <th> Todos </th>
                <th> D.Movilidad </th>
                <th> D.Vision </th>
                <th> D.Auditiva </th>
            </tr>

            </thead>

            <tbody>   
        ";

          while ($tupla4=mysqli_fetch_array($ficha))
          {
            $componentes = $tupla4['Componentes_y_caracteristicas'];
          

            $valor = array_shift($valores);
            $todos = array_shift($valores_dxt);
            $movilidad = array_shift($valores_mov);
            $vision = array_shift($valores_vi);
            $auditiva = array_shift($valores_au);

            $html .=
            "
              <tr align=center>
                <td> $componentes </td>
                <td> $valor</td>
                <td> $todos %</td>
                <td> $movilidad %</td>
                <td> $vision %</td>
                <td> $auditiva %</td>


              </tr>
            ";
          }
        }
        $html .=
        "
            </tbody>
            </table>

      


    

        <table>
        <thead>
  
        <tr align=center>
            <th  colspan='2' align=center> Resumen </th>
        </tr>
        </thead>

        <tbody>   

        <tr>
              <td> Repeticiones </td>
              <td align=center> $repeticiones </td>
        </tr>

        <tr>
           <td> Para todos: </td>
           <td align=center> $tod %</td>
           </tr>
        <tr>

            <td> Discapacidad visual:</td> 
            <td align=center> $vi %</td>
           </tr>
         <tr>

            <td> Discapacidad auditiva:</td> 
            <td align=center> $au %</td>
           </tr>
        <tr>

            <td> Discapacidad movilidad:</td> 
            <td align=center> $mov %</td>
           </tr>



         </tbody>
        </table>
        </div>

        ";





      }
      


 $html .=
"


      </div>

";
          }


      }
}


return $html;
      

}



function MostrarDatosAlternativas($id_diagnostico)
{

  $Alternativas = MostrarAlternativas($id_diagnostico);


  $i = 0;

  $precio_alternativas = array();
 
     

  $html = "
  <div class='Alternativas' style = 'clear:both;'>
  <br><br><br>
  <h3>Alternativas propuestas</h3>

  ";

  if ($Alternativas)
  {
    if(mysqli_num_rows($Alternativas)>0)
    {     
      while ($tupla=mysqli_fetch_array($Alternativas))
      {
        $id = $tupla['Id'];
        $precio = $tupla['Precio'];
        $i++;
        array_push($precio_alternativas, $precio);

        $html .=
        "
        <br><br>
      
        <h3>Alternativa: $i -  Precio: $precio (€)</h3>
        ";

        $datosSolucion = SelectHabit($id);

        if ($datosSolucion)
        {
          if(mysqli_num_rows($datosSolucion)>0)
          {     

          $html .=
          "

<div id='tablapdf' >
    <table>
       <thead>

          <tr align=center>
              <th> Código </th>
              <th> Título  </th>
              <th> Unidad </th>
              <th> Cantidad </th>
              <th> Precio (€)</th>
          </tr>

        </thead>

          <tbody>   
          ";




            while ($tupla2=mysqli_fetch_array($datosSolucion))
             {
                $codigo =  $tupla2['Codigo_solucion'];
                $titulo =  $tupla2['Titulo'];
                $unidad =  $tupla2['Unidad'];
                $cantidad = $tupla2['Cantidad'];
                $precio =  $tupla2['Precio_item'];


                $html .=
                "
                <tr align=center>
                  <td> $codigo </td>
                  <td> $titulo</td>
                  <td> $unidad</td>
                  <td> $cantidad</td>
                  <td> $precio</td>


                </tr>
                ";


             }


        $html .=
        "
        </tbody>
        </table>
        </div>

        ";



          }
        }




      }
      
    }


}


$html .=
          "
          </div>
        
          ";

/*


$Alternativas = MostrarAlternativas($id_diagnostico);
*/
$html .=
"
<br><br><br><br><br><br>

  <h3>Resumen de alternativas</h3>
  <br>

";


$html .=
"


<div id='tablapdf' >
    <table>
       <thead>

          <tr align=center>
              <th> Alternativa </th>
              <th> Precio (€)</th>
          </tr>

    </thead>

    <tbody>
";

$i=0;

    foreach ($precio_alternativas as $key) {

$i++;

$html .=
"     
       <tr align=center>
           <td> $i </td>
           <td> $key </td>
      </tr>   
";

    }
     

$html .=
  "
    </tbody>
    </table>


  </div>
  ";



return $html;
      

}






function MostrarDatosEvaluacionFichas($id_diagnostico)
{

  

  $valores = array();
  $valores_dxt = array();
  $valores_mov = array();
  $valores_au= array();
  $valores_vi = array();

  $tipo =  $_SESSION['Tipo_solicitud'];



  $html = "
<div class='Evaluacion' style = 'clear:both;'>

  <br><br><h3>Evaluacion de alternativas </h3>";



  $Alternativas = MostrarAlternativasHabitables($id_diagnostico);
  //$fichas = SelectFichasDiagnostico($id_diagnostico);

  $ids_fichas = array();
  $codigos = array();
  $ids_unicos = array();

  $i = 0;

  if ($Alternativas)
  {
        foreach ($Alternativas as $id) 
        {
          $id_alternativa = $id;

          $i++;

          $paratodos_general = NivelDXT($id_alternativa);
          $vision_general = NivelVision($id_alternativa);
          $auditivo_general = NivelAuditiva($id_alternativa);
          $movilidad_general = NivelMovilidad($id_alternativa);

          $fichas = SelectFichasDiagnostico($id_diagnostico);

          $html .=
          "
          <br><br>
          <div class ='Alternativa'>
          <h3>Alternativa: $i </h3>

          <br>
   
          <h5> Fichas Evaluadas</h5>
          <br>

  ";
              
                if ($fichas)
                {
                  if(mysqli_num_rows($fichas)>0)
                  {     

                    $html .=
                          "
                          <div id='tablapdf2' >
                          <table>
                             <thead>

                          <tr align=center>
                               <th>Codigo</th>
                              <th>DPTP Actual</th>
                              <th>DPTP Alt $i</th>
                              <th>Movilidad Actual</th>
                              <th>Movilidad Alt $i</th>
                              <th>Auditiva Actual </th>
                              <th>Auditiva Alt $i</th>
                              <th>Visual Actual</th>
                              <th>Visual Alt $i</th>
                          </tr>

                          </thead>
                          <tbody>
                    ";

                    while ($tupla2=mysqli_fetch_array($fichas))
                    {
                      $codigo_componente = $tupla2['Codigo_componente'];
                      $contador = $tupla2['Contador'];
                      $id_ficha = $tupla2['Id_ficha'];
                      $repeticiones = $tupla2['Repeticiones'];
                      $pg = $tupla2['Porcentaje_general'];
                      $pm = $tupla2['Porcentaje_mov'];
                      $pa = $tupla2['Porcentaje_au'];
                      $pv = $tupla2['Porcentaje_vi'];
                      
                      array_push($codigos, $codigo_componente);




                      $fichasEvaluacion = SelectFichasAlternativaByIdAlternativa($id_ficha, $id_alternativa );
                      if ($fichasEvaluacion)
                      {
                        if(mysqli_num_rows($fichasEvaluacion)>0)
                        {     
                          while ($tupla3=mysqli_fetch_array($fichasEvaluacion))
                          {

                             $pg_alt = $tupla3['Porcentaje_general'];
                             $pm_alt = $tupla3['Porcentaje_mov'];
                             $pa_alt = $tupla3['Porcentaje_au'];
                             $pv_alt = $tupla3['Porcentaje_vi'];
                             $id_ficha = $tupla3['Id'];

                            // echo "$id_ficha ";
                             /*
                             $existe = "false";

                             foreach ($ids_fichas as $key) {
                              if($key == $id_ficha)
                                $existe = "true";
                             }

                             if($existe = "false")*/
                              array_push($ids_fichas, $id_ficha);
                             
                           

                          }
                        }
                      }

                      $html .=
                              "
                                <tr align=center>
                                  <td>$codigo_componente</td>
                                  <td >$pg %</td>
                                  <td>$pg_alt %</td>
                                  <td >$pm %</td>
                                  <td>$pm_alt %</td>
                                  <td >$pa %</td>
                                  <td>$pa_alt %</td>
                                  <td >$pv %</td>
                                  <td>$pv_alt %</td>
                              </tr>
                              ";



                    }
                   

                  }
                }


                  $fichas_evaluacion = SelectFichasAlternativasSinFichaDiagnosticoByIdAlternativa($id_alternativa);


                  
                  if ($fichas_evaluacion)
                  {

                    if(mysqli_num_rows($fichas_evaluacion)>0)
                    {  
                     
                                    $porcentaje_general = 0;
                                    $porcentaje_mov = 0;
                                    $porcentaje_au = 0;
                                    $porcentaje_vi = 0;

                                while ($tupla3=mysqli_fetch_array($fichas_evaluacion))
                                {
                                      
                                  $porcentaje_general_Eval = $tupla3['Porcentaje_general'];
                                  $porcentaje_mov_Eval = $tupla3['Porcentaje_mov'];
                                  $porcentaje_au_Eval = $tupla3['Porcentaje_au'];
                                  $porcentaje_vi_Eval = $tupla3['Porcentaje_vi'];
                                  $id_ficha = $tupla3['Id'];

                                 // echo "$id_ficha ";

                                 
                                  /*
                                  $existe = "false";
                             
                                 foreach ($ids_fichas as $key) {
                                  if($key == $id_ficha)
                                    $existe = "true";
                                 }

                                 if($existe = "false")*/
                                  array_push($ids_fichas, $id_ficha);
                                 

                                  


                                  $codigo_componente = $tupla3['Codigo_componente'];


                                  $cod = substr("$codigo_componente",1);

                                  $codigo = "TC".$cod."";

                                  array_push($codigos, $codigo);
                                  



                                  $html .=
                              "
                                <tr align=center>
                                  <td>$codigo</td>
                                  <td >$porcentaje_general %</td>
                                  <td>$porcentaje_general_Eval %</td>
                                  <td >$porcentaje_mov %</td>
                                  <td>$porcentaje_mov_Eval %</td>
                                  <td >$porcentaje_au %</td>
                                  <td>$porcentaje_au_Eval %</td>
                                  <td >$porcentaje_vi %</td>
                                  <td>$porcentaje_vi_Eval %</td>
                              </tr>
                              ";

     

                              }
                   

                      }


                   $html .=
                              "
                              </tbody>
                              </table>
                              </div>
                              ";
                  }


         // echo "<br>";
           
                foreach ($ids_fichas as $key) 
                {

                    //echo "$key ";

                    
                   $datosFicha = SelectDatosFichaEvaluacionByIdEval($key);
                   $codigo = array_shift($codigos);

                   //echo "$codigo<br>";


                   
                  
                      $html .=
                      "
                      <br><br>
                      <h3>Ficha: $codigo -  $contador</h3>

                      <div id='tablapdf2' >
                      <table>
                         <thead>
                
                      <tr align=center>
                          <th  > Componentes y Características </th>
                          <th  > Valor  </th>
                          <th  > Todos </th>
                          <th  > D.Movilidad </th>
                          <th  > D.Vision </th>
                          <th  > D.Auditiva </th>
                      </tr>

                    </thead>

                      <tbody>   
                      ";

                  if ($datosFicha)
                  {
                    if(mysqli_num_rows($datosFicha)>0)
                    {     
                      


                      while ($tupla4=mysqli_fetch_array($datosFicha))
                       {
                          array_push($valores, $tupla4['Valor']);
                          array_push($valores_dxt, $tupla4['Relevancia_dxt']);
                          array_push($valores_mov, $tupla4['Relevancia_mov']);
                          array_push($valores_au, $tupla4['Relevancia_au']);
                          array_push($valores_vi, $tupla4['Relevancia_vi']);
                       }

                    }
                  }

                    $ficha = SelectFichaByCodigo($codigo,$tipo);


                    if ($ficha)
                    {
                            if(mysqli_num_rows($ficha)>0)
                            { 

                                while ($tupla5=mysqli_fetch_array($ficha))
                                {
                                  $componentes = $tupla5['Componentes_y_caracteristicas'];
                                  

                                  $valor = array_shift($valores);
                                  $todos = array_shift($valores_dxt);
                                  $movilidad = array_shift($valores_mov);
                                  $vision = array_shift($valores_vi);
                                  $auditiva = array_shift($valores_au);

                                  $html .=
                                  "
                                  <tr align=center>
                                    <td> $componentes </td>
                                    <td> $valor</td>
                                    <td> $todos %</td>
                                    <td> $movilidad %</td>
                                    <td> $vision %</td>
                                    <td> $auditiva %</td>


                                  </tr>
                                  ";
                                }
                            
                              $html .=
                              "
                              </tbody>
                              </table>
                              </div>

                                ";

                              }
                    }


                }

              unset($ids_fichas);
              $ids_fichas = array();




                $html .=
                "
                        <div id='DiagnosticoGeneral'>

           

                      <br><br>
            <div id='tablapdf2' >
            <table>
               <thead>
    
              <tr align=center>
                  <th colspan='2' ><h5> Resumen de valores </h5></th>
              </tr>

        </thead>

                <tbody>
                     <tr align=center>
                     <td> Para todos: </td>
                     <td> $paratodos_general %</td>
                     </tr>
                     <tr align=center>
                      <td> Discapacidad auditiva:</td> 
                      <td> $vision_general %</td>
                     </tr>
                     <tr align=center>
                      <td> Discapacidad auditiva:</td> 
                      <td> $auditivo_general %</td>
                     </tr>
                     <tr align=center>
                      <td> Discapacidad movilidad:</td> 
                      <td> $movilidad_general %</td>
                     </tr>


                   </tbody>
                </table>
                </div>




        </div>
        </div>

            ";

  }
    
}



return $html;
      

}


function MostrarMulticriterio($id_diagnostico, $codigo_solicitud)
{

$res = MostrarAlternativasHabitables($id_diagnostico);


if(isset($_SESSION['Elegidas']))
  $elegidas = $_SESSION['Elegidas'];


$nelementos = count($elegidas);

if($nelementos > 0)
  $peso = (0.21645 / ($nelementos * 2));
else
  $peso = 1;



$señalT = " ";
$señalM = " ";
$señalA = " ";
$señalV = " ";


foreach ($elegidas as $key ) {

  if($key == "Todos")
    $señalT = "*";
  else if($key == "Mov")
    $señalM = "*";
  else if($key == "Au")
    $señalA = "*";
  else if($key == "Vi")
    $señalV = "*";
}

$html = "";


$html .=
"

<br><br><br>

<div id='multicriteriopdf'>
  <h2> Multicriterio </h2>

";



$html .=
"
<div id='tablapdf3' >
            <table>
              <tbody>
            <tr align=center>
            <td style=' background-color: #4577B5; color: white;'>Grupo de Criterios</td>

            <td colspan='15' style='background-color: #CEF1FF; color: black; '> Técnicos (0,333)</td>
            <td style='background-color: #FFFFFF; color = #000000;' rowspan='4'> Celda de comprobación del peso del grupo de criterios.(Sum Wtecn)</td>
            </tr>

            <tr align=center>
            <td style='background-color: #4577B5; color: white;' >Subgrupo de Criterios</td>
            <td colspan='8'>Satisfacción necesidades PCD (65% /técnicos)</td>
            <td colspan='4'>Condiciones tecnológicas del edificio</td>
            <td colspan='3'>Marco normativo</td>
            </tr>

            <tr align=center>
            <td style='background-color: #4577B5; color: white;' > Selección </td>
            <td> $señalT </td>
            <td> $señalM </td>
            <td> $señalA </td>
            <td> $señalV </td>
            <td> $señalT </td>
            <td> $señalM </td>
            <td> $señalA </td>
            <td> $señalV </td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>

            </tr>


            <tr align=center>

            <td style='background-color: #4577B5; color: white;' >Criterios</td>
            <td>Nivel acc de la propuesta diseño para todos (%)</td>
            <td>Nivel acc de la propuesta movilidad (%)</td>
            <td>Nivel acc de la propuesta auditiva (%)</td>
            <td>Nivel acc de la propuesta visión (%)</td>
            <td>Incremento nivel acc diseño para todos (%)</td>
            <td>Incremento nivel acc movilidad (%)</td>
            <td>Incremento nivel acc auditiva (%)</td>
            <td>Incremento nivel acc visión (%)</td>
            <td>Configuración arquitectónica</td>
            <td>Estado físico</td>
            <td>Usos y actividades</td>
            <td>Relaciones con el entorno</td>
            <td>Técnico</td>
            <td>Urbanístico</td>
            <td>Administrativo</td>
 
            </tr>


            <tr align=center>
            <td  style='background-color: #4577B5; color: white;' >Peso W(0 a 1)</td>

";
            if($señalT != '*')
              $pesoM = " ";
            else
               $pesoM = $peso;

$html .=
"
            <td>$pesoM</td>
";
            if($señalM != '*')
              $pesoM = " ";
            else
               $pesoM = $peso;

$html .=
"
            <td>$pesoM</td>
";

            if($señalA != "*")
              $pesoM = " ";
            else
              $pesoM = $peso;
$html .=
" 
            <td>$pesoM</td>
";
            if($señalV != "*")
              $pesoM = " ";
            else
              $pesoM = $peso;

$html .=
" 
            <td>$pesoM</td>

";  

            if($señalT != "*")
              $pesoM = " ";
            else
              $pesoM = $peso;

$html .=
" 
            <td>$pesoM</td>

";
            if($señalM != '*')
              $pesoM = " ";
            else
               $pesoM = $peso;

$html .=
"
            <td>$pesoM</td>
";

            if($señalA != "*")
              $pesoM = " ";
            else
              $pesoM = $peso;
$html .=
" 
            <td>$pesoM</td>
";
            if($señalV != "*")
              $pesoM = " ";
            else
              $pesoM = $peso;

$html .=
" 
            <td>$pesoM</td>
            <td>0,017</td>
            <td>0,017</td>
            <td>0,017</td>
            <td>0,017</td>
            <td>0,017</td>
            <td>0,017</td>
            <td>0,017</td>
            <td style='background-color: #FFFFFF;'>0,333</td>


            </tr>


            </tbody>
            </table>
          </div>

";





$i = 0;
$s = " ";

foreach ($res as $id) 
{
          $i++;
          $total_tecnicos = 0; 



        if($señalT == "*")
        {
           $dxt = NivelDXT($id);
           $dxt = round($dxt, 4);

           $nivelDXT = TecnicosNivelDXT($id);
           $nivelDXT = round($nivelDXT, 4);

           $producto_dxt = $peso * $nivelDXT;
           $producto_dxt = round($producto_dxt, 4);

           $total_tecnicos += $producto_dxt;
        }
        else
        {
           $dxt = "     -     ";
           $nivelDXT = "     -     ";
           $producto_dxt = "     -     ";
        }

          if($señalM == "*")
         {
            $mov = NivelMovilidad($id);
            $mov = round( $mov, 4);

            $nivelmov = TecnicosNivelMovilidad($id);
            $nivelmov = round($nivelmov, 4);

            $producto_mov = $peso * $nivelmov;
            $producto_mov = round($producto_mov, 4);

            $total_tecnicos += $producto_mov;  
         }
         else
        {
           $mov = "     -     ";
           $nivelmov = "     -     ";
           $producto_mov = "     -     ";
        }


          if($señalA == "*")
         {
           $au = NivelAuditiva($id);
           $au = round($au, 4);

           $nivelau = TecnicosNivelAuditiva($id);
           $nivelau = round($nivelau, 4);

           $producto_au = $peso * $nivelau; 
           $producto_au = round($producto_au, 4);

           $total_tecnicos += $producto_au;
         }
         else
        {
           $au = "     -     ";
           $nivelau = "     -     ";
           $producto_au = "     -     ";
        }

          if($señalV == "*")
         {
           $vi = NivelVision($id);
           $vi = round($vi, 4);

           $nivelvi = TecnicosNivelVision($id);
           $nivelvi = round($nivelvi, 4);

           $producto_vi = $peso * $nivelvi; 
           $producto_vi = round($producto_vi, 4);

           $total_tecnicos += $producto_vi;
         }
           else
          {
           $vi = "     -     ";
           $nivelvi = "     -     ";
           $producto_vi = "     -     ";
          } 

          if($señalT == "*")
         {
           $incremento_dxt = IncrementoDXT($id_diagnostico,$id);
           $incremento_dxt = round($incremento_dxt, 4);

           $Rating_DXT = TecnicosIncrementoDXT($id_diagnostico,$id);
           $Rating_DXT = round($Rating_DXT, 4);

           $producto_incremento_dxt = $peso * $Rating_DXT; 
           $producto_incremento_dxt = round($producto_incremento_dxt, 4);

           $total_tecnicos += $producto_incremento_dxt;
          }
          else
          {
           $incremento_dxt = "     -     ";
           $Rating_DXT = "     -     ";
           $producto_incremento_dxt = "     -     ";
          } 

          if($señalM == "*")
         {
           $incremento_mov = IncrementoMovilidad($id_diagnostico,$id);
           $incremento_mov = round($incremento_mov, 4);

           $Rating_mov = TecnicosIncrementoMovilidad($id_diagnostico,$id);
           $Rating_mov = round($Rating_mov, 4);

           $producto_incremento_mov = $peso * $Rating_mov;
           $producto_incremento_mov = round($producto_incremento_mov, 4);

           $total_tecnicos += $producto_incremento_mov; 
          }
           else
          {
           $incremento_mov = "     -     ";
           $Rating_mov = "     -     ";
           $producto_incremento_mov = "     -     ";
          } 

          if($señalA == "*")
         {
           $incremento_au = IncrementoAuditiva($id_diagnostico,$id);
           $incremento_au = round($incremento_au, 4);

           $Rating_au = TecnicosIncrementoAuditiva($id_diagnostico,$id);
           $Rating_au = round($Rating_au, 4);

           $producto_incremento_au = $peso * $Rating_au;
           $producto_incremento_au = round($producto_incremento_au, 4);

           $total_tecnicos += $producto_incremento_au;
        }
        else
          {
           $incremento_au = "     -     ";
           $Rating_au = "     -     ";
           $producto_incremento_au = "     -     ";
          } 

          if($señalV == "*")
         {
           $incremento_vi = IncrementoVision($id_diagnostico,$id);
           $incremento_vi = round($incremento_vi, 4);

           $Rating_vi = TecnicosIncrementoVision($id_diagnostico,$id);
           $Rating_vi = round($Rating_vi, 4);

           $producto_incremento_vi = $peso * $Rating_vi;
           $producto_incremento_vi = round($producto_incremento_vi, 4);
           $total_tecnicos += $producto_incremento_vi;
          }
          else
          {
           $incremento_vi = "     -     ";
           $Rating_vi = "     -     ";
           $producto_incremento_vi = "     -     ";
          }  

          $peso_2 = 0.017;

         $conf_arquitectonica = ConfiguracionArquitectonica($id);
         $Rating_conf_arquitectonica = TecnicosConfiguracionArquitectonica($id);
         $producto_conf_arquitectonica = $peso_2 * $Rating_conf_arquitectonica;
         $total_tecnicos += $producto_conf_arquitectonica;  

                   /////////////////////////////////
         $estado_fisico = EstadoFisico($id);
         $Rating_estado_fisico = TecnicosEstadoFisico($id);
         $producto_estado_fisico = $peso_2 * $Rating_estado_fisico; 
         $total_tecnicos += $producto_estado_fisico;

                  /////////////////////////////////
         $usos_actividades = UsosActividades($id);
         $Rating_usos_actividades = TecnicosUsosActividades($id);
         $producto_usos_actividades = $peso_2 * $Rating_usos_actividades; 
         $total_tecnicos += $producto_usos_actividades;


         /////////////////////////////////
         $relaciones_entorno = RelacionesEntorno($id);
         $Rating_relaciones_entorno = TecnicosRelacionesEntorno($id);
         $producto_relaciones_entorno = $peso_2 * $Rating_relaciones_entorno;
         $total_tecnicos += $producto_relaciones_entorno;


         /////////////////////////////////
         $tecnico = Tecnico($id);
         $Rating_tecnico = TecnicosTecnico($id);
         $producto_tecnico = $peso_2 * $Rating_tecnico; 
         $total_tecnicos += $producto_tecnico;


         /////////////////////////////////
         $urbanistico = Urbanistico($id);
         $Rating_urbanistico = TecnicosUrbanistico($id);
         $producto_urbanistico = $peso_2 * $Rating_urbanistico; 
         $total_tecnicos += $producto_urbanistico;


         /////////////////////////////////
         $administrativo = Administrativo($id);
         $Rating_administrativo = TecnicosAdministrativo($id);
         $producto_administrativo = $peso_2 * $Rating_administrativo; 
         $total_tecnicos += $producto_administrativo;



$html .=
"
      
          <div id='tablapdfTecnicos' >
            <table>
              <tbody>
          <tr align=center>
            <td rowspan='4' style='background-color: #4577B5; color: white;'>$i</td>     
            <td style='background-color: #4577B5; color: white;width: 57px;'>Edificio</td>
            <td style='width: 55px;'> $dxt </td>
            <td style='width: 55px;'> $mov </td>
            <td style='width: 55px;'> $au </td>
            <td style='width: 55px;'> $vi </td>
            <td style='width: 55px;'> $incremento_dxt </td>
            <td style='width: 55px;'> $incremento_mov </td>
            <td style='width: 55px;'> $incremento_au </td>
            <td style='width: 55px;'> $incremento_vi </td>
            <td style='width: 55px;'> $conf_arquitectonica </td>
            <td style='width: 55px;'> $estado_fisico </td>
            <td style='width: 55px;'> $usos_actividades </td>
            <td style='width: 55px;'> $relaciones_entorno </td>
            <td style='width: 55px;'> $tecnico </td>
            <td style='width: 55px;'> $urbanistico </td>
            <td style='width: 55px;'> $administrativo </td>
            <td style='background-color: #FFFFFF; width: 70px;'> Total Tecn= </td>
          </tr>

          <tr align=center>
          
            <td style='background-color: #4577B5; color: white;width: 40px;'>Rating R (0 a 4)</td>
            <td style='width: 55px;'> $nivelDXT </td>
            <td style='width: 55px;'> $nivelmov </td>
            <td style='width: 55px;'> $nivelau </td>
            <td style='width: 55px;'> $nivelvi </td>
            <td style='width: 55px;'> $Rating_DXT </td>
            <td style='width: 55px;'> $Rating_mov </td>
            <td style='width: 55px;'> $Rating_au </td>
            <td style='width: 55px;'> $Rating_vi </td>
            <td style='width: 55px;'> $Rating_conf_arquitectonica </td>
            <td style='width: 55px;'> $Rating_estado_fisico </td>
            <td style='width: 55px;'> $Rating_usos_actividades </td>
            <td style='width: 55px;'> $Rating_relaciones_entorno </td>
            <td style='width: 55px;'> $Rating_tecnico </td>
            <td style='width: 55px;'> $Rating_urbanistico </td>
            <td style='width: 55px;'> $Rating_administrativo </td>
            <td style='background-color: #FFFFFF; width: 70px;'> Sum WtecnxR= </td>
          </tr>

          <tr align=center>

            <td style='background-color: #4577B5; color: white;width: 40px;'>WxR</td>
            <td> $producto_dxt </td>
            <td > $producto_mov </td>
            <td > $producto_au  </td>
            <td > $producto_vi </td>
            <td > $producto_incremento_dxt </td>
            <td > $producto_incremento_mov </td>
            <td > $producto_incremento_au </td>
            <td > $producto_incremento_vi </td>
            <td > $producto_conf_arquitectonica </td>
            <td > $producto_estado_fisico </td>
            <td > $producto_usos_actividades </td>
            <td > $producto_relaciones_entorno </td>
            <td > $producto_tecnico </td>
            <td > $producto_urbanistico </td>
            <td > $producto_administrativo </td>
            <td style='background-color: #FFFFFF; width: 70px;'>$total_tecnicos</td>

          </tr>
               

           </tbody>
        </table>
        </div>


      
";


}



/*


$i = 0;
$s = " ";

        foreach ($res as $id) 
        {
          $i++;
          $total_tecnicos = 0; 

$html .=
"
      
          <div id='tablapdfTecnicos' >
            <table>

          <tr>
          <td rowspan='4'>Alternativa $i</td>     
            <td  >Edificio</td>
           
            </tr>
               

        <tbody>
";

        if($señalT == "*")
        {
           $dxt = NivelDXT($id);
           $nivelDXT = TecnicosNivelDXT($id);
           $producto_dxt = $peso * $nivelDXT;
           $total_tecnicos += $producto_dxt;
        }
        else
        {
           $dxt = "-";
           $nivelDXT = "-";
           $producto_dxt = "-";
        }

$html .=
"
         <tr class='tr3' align=center>
         <td> $dxt </td>
          <td colspan='2'> $nivelDXT </td>
         <td> $producto_dxt </td>
         </tr>

";


         /////////////////////////////////
         if($señalM == "*")
         {
            $mov = NivelMovilidad($id);
            $nivelmov = TecnicosNivelMovilidad($id);
            $producto_mov = $peso * $nivelmov;
            $total_tecnicos += $producto_mov;  
         }
         else
        {
           $mov = "-";
           $nivelmov = "-";
           $producto_mov = "-";
        }

$html .=
"
        <tr class='tr2' align=center>
        <td > $mov </td>
        <td colspan='2' > $nivelmov </td>
        <td > $producto_mov </td>
        </tr>

";
          /////////////////////////////////
         if($señalA == "*")
         {
           $au = NivelAuditiva($id);
           $nivelau = TecnicosNivelAuditiva($id);
           $producto_au = $peso * $nivelau; 
           $total_tecnicos += $producto_au;
         }
         else
        {
           $au = "-";
           $nivelau = "-";
           $producto_au = "-";
        }
$html .=
"
        <tr class='tr2' align=center>
        <td > $au </td>
        <td colspan='2' > $nivelau </td>
        <td > $producto_au </td>
        </tr>

";
        

          /////////////////////////////////
         if($señalV == "*")
         {
           $vi = NivelVision($id);
           $nivelvi = TecnicosNivelVision($id);
           $producto_vi = $peso * $nivelvi; 
           $total_tecnicos += $producto_vi;
         }
           else
          {
           $vi = "-";
           $nivelvi = "-";
           $producto_vi = "-";
          } 

$html .=
"
         <tr class='tr2' align=center>
          <td > $vi </td>
         <td colspan='2' > $nivelvi </td>
         <td > $producto_vi </td>
         </tr>
";
       


         ///INCREMENTO////////
          /////////////////////////////////
         if($señalT == "*")
         {
           $incremento_dxt = IncrementoDXT($id_diagnostico,$id);
           $Rating_DXT = TecnicosIncrementoDXT($id_diagnostico,$id);
           $producto_incremento_dxt = $peso * $Rating_DXT; 
           $total_tecnicos += $producto_incremento_dxt;
          }
          else
          {
           $incremento_dxt = "-";
           $Rating_DXT = "-";
           $producto_incremento_dxt = "-";
          } 
$html .=
"
         <tr class='tr3' align=center>
        <td > $incremento_dxt </td>
        <td colspan='2' >  $Rating_DXT </td>
        <td > $producto_incremento_dxt </td>
        </tr>

";

 
         

          /////////////////////////////////
         
         if($señalM == "*")
         {
           $incremento_mov = IncrementoMovilidad($id_diagnostico,$id);
           $Rating_mov = TecnicosIncrementoMovilidad($id_diagnostico,$id);
           $producto_incremento_mov = $peso * $Rating_mov;
           $total_tecnicos += $producto_incremento_mov; 
          }
           else
          {
           $incremento_mov = "-";
           $Rating_mov = "-";
           $producto_incremento_mov = "-";
          } 

$html .=
"
        <tr class='tr1' align=center>
        <td > $incremento_mov </td>
        <td colspan='2' > $Rating_mov </td>
        <td > $producto_incremento_mov </td>
        </tr>


";

         

          /////////////////////////////////
         if($señalA == "*")
         {
           $incremento_au = IncrementoAuditiva($id_diagnostico,$id);
           $Rating_au = TecnicosIncrementoAuditiva($id_diagnostico,$id);
           $producto_incremento_au = $peso * $Rating_au;
           $total_tecnicos += $producto_incremento_au;
        }
        else
          {
           $incremento_au = "-";
           $Rating_au = "-";
           $producto_incremento_au = "-";
          } 

$html .=
"
         <tr class='tr2'align=center>
         <td > $incremento_au </td>
         <td colspan='2' > $Rating_au </td>
        <td > $producto_incremento_au </td>
         </tr>
";


         


          /////////////////////////////////
         if($señalV == "*")
         {
           $incremento_vi = IncrementoVision($id_diagnostico,$id);
           $Rating_vi = TecnicosIncrementoVision($id_diagnostico,$id);
           $producto_incremento_vi = $peso * $Rating_vi;
           $total_tecnicos += $producto_incremento_vi;
          }
          else
          {
           $incremento_vi = "-";
           $Rating_vi = "-";
           $producto_incremento_vi = "-";
          }  

$html .=
"
        <tr class='tr2'align=center>
        <td > $incremento_vi </td>
        <td colspan='2' > $Rating_vi </td>
        <td > $producto_incremento_vi </td>
        </tr>
";


        


         //////////Parte 2////////////////
         /////////////////////////////////

         $peso_2 = 0.017;

         $conf_arquitectonica = ConfiguracionArquitectonica($id);
         $Rating_conf_arquitectonica = TecnicosConfiguracionArquitectonica($id);
         $producto_conf_arquitectonica = $peso_2 * $Rating_conf_arquitectonica;
         $total_tecnicos += $producto_conf_arquitectonica;  

$html .=
"
         <tr class='tr6'align=center>
         <td > $conf_arquitectonica </td>
         <td colspan='2' > $Rating_conf_arquitectonica </td>
         <td > $producto_conf_arquitectonica </td>
         </tr>
";

         

          /////////////////////////////////
         $estado_fisico = EstadoFisico($id);
         $Rating_estado_fisico = TecnicosEstadoFisico($id);
         $producto_estado_fisico = $peso_2 * $Rating_estado_fisico; 
         $total_tecnicos += $producto_estado_fisico;
$html .=
"        
          <tr class='tr10' align=center>
          <td > $estado_fisico </td>
          <td colspan='2' > $Rating_estado_fisico </td>
          <td > $producto_estado_fisico </td>
          </tr>
";




         /////////////////////////////////
         $usos_actividades = UsosActividades($id);
         $Rating_usos_actividades = TecnicosUsosActividades($id);
         $producto_usos_actividades = $peso_2 * $Rating_usos_actividades; 
         $total_tecnicos += $producto_usos_actividades;

$html .=
"
         <tr class='tr6' align=center>
         <td > $usos_actividades </td>
         <td colspan='2' > $Rating_usos_actividades </td>
         <td > $producto_usos_actividades </td>
         </tr>

";


         


         /////////////////////////////////
         $relaciones_entorno = RelacionesEntorno($id);
         $Rating_relaciones_entorno = TecnicosRelacionesEntorno($id);
         $producto_relaciones_entorno = $peso_2 * $Rating_relaciones_entorno;
         $total_tecnicos += $producto_relaciones_entorno;
$html .=
"         <tr class='tr1' align=center>
          <td > $relaciones_entorno </td>
          <td colspan='2' > $Rating_relaciones_entorno </td>
          <td > $producto_relaciones_entorno </td>
          </tr>
";

         

         /////////////////////////////////
         $tecnico = Tecnico($id);
         $Rating_tecnico = TecnicosTecnico($id);
         $producto_tecnico = $peso_2 * $Rating_tecnico; 
         $total_tecnicos += $producto_tecnico;
$html .=
"         
          <tr class='tr10'align=center>
          <td > $tecnico </td>
          <td colspan='2' > $Rating_tecnico </td>
          <td > $producto_tecnico </td>
          </tr>
";

         



         /////////////////////////////////
         $urbanistico = Urbanistico($id);
         $Rating_urbanistico = TecnicosUrbanistico($id);
         $producto_urbanistico = $peso_2 * $Rating_urbanistico; 
         $total_tecnicos += $producto_urbanistico;

$html .=
"         <tr class='tr10'align=center>
          <td > $urbanistico </td>
          <td colspan='2' > $Rating_urbanistico </td>
          <td > $producto_urbanistico </td>
          </tr>
";


         

         /////////////////////////////////
         $administrativo = Administrativo($id);
         $Rating_administrativo = TecnicosAdministrativo($id);
         $producto_administrativo = $peso_2 * $Rating_administrativo; 
         $total_tecnicos += $producto_administrativo;

$html .=
"       
        <tr class='tr10'align=center>
        <td > $administrativo </td>
        <td colspan='2' > $Rating_administrativo </td>
        <td > $producto_administrativo </td>
        </tr>
";
         
   


         /////Resultado//////////////
         /////////////////////////////////
      
     
$html .=
"         
        <tr class='tr6'style='background-color: #FFFFFF'>
        <td> Total Tecn= </td>
        <td colspan='2'> ∑ WtecnxR= </td>
        <td>$total_tecnicos</td>
        </tr>


    

        




         </tbody>
        </table>
        </div>

       </div> 
";

        }
*/

/////////////////TABLA SOCIALES///////////////////




$peso_3 = 0.043;
$peso_4 = 0.017;


$html .=
"
<br><br><br><br><br><br>

<div id='tablapdf4' >
            <table>
              <tbody>
            <tr align=center>
            <td style=' background-color: #4577B5; color: white;'>Grupo de Criterios</td>

            <td colspan='13' style='background-color: #CEF1FF; color: black; '> Sociales (0,333)</td>
            <td style='background-color: #FFFFFF; color = #000000;' rowspan='4'> Celda de comprobación del peso del grupo de criterios.(Sum Wtecn)</td>
            </tr>

            <tr align=center>
            <td style='background-color: #4577B5; color: white;' >Subgrupo de Criterios</td>
            <td colspan='5'> Diversidad funcional de las personas (65% s/sociales)</td>
            <td colspan='3'>Situación de ocupación del edificio</td>
            <td colspan='3'>Condiciones patrimoniales</td>
            <td colspan='2'>Valores Socio-Culturales</td>
            </tr>

            <tr align=center>
            <td style='background-color: #4577B5; color: white;' > Selección </td>
            <td colspan='4'>1</td>
            <td>2</td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>8</td>

            </tr>


            <tr align=center>

            <td style='background-color: #4577B5; color: white;' >Criterios</td>
            <td>Número total de personas con discapacidad (pcd)</td>
            <td>Número de personas con problemas de movilidad</td>
            <td>Número de personas con discapacidad visual</td>
            <td>Número de personas con discapacidad auditiva</td>
            <td>Número de personas mayores (pm)</td>
            <td>Número de personas dependientes (pd)</td>
            <td>Intensidad de uso (do - m²/pers)</td>
            <td>Horario de funcionamiento (h/dia)</td>
            <td>Clasificación según LPHE</td>
            <td>Tipo de intervención</td>
            <td>Estado ambiental y patrimonial</td>
            <td>Arraigo de la población</td>
            <td>Carácter Asistencial</td>
 
            </tr>


            <tr align=center>
            <td  style='background-color: #4577B5; color: white;' >Peso W(0 a 1)</td>
            <td>0,054</td>
            <td>0,054</td>
            <td>0,054</td>
            <td>0,054</td>
            <td>0,054</td>
            <td>0,017</td>
            <td>0,017</td>
            <td>0,017</td>
            <td>0,017</td>
            <td>0,017</td>
            <td>0,017</td>
            <td>0,017</td>
            <td>0,017</td>
            <td style='background-color: #FFFFFF;'>0,333</td>
            </tr>






             </tbody>
        </table>
        

       </div> 



";



$i = 0;
        foreach ($res as $id) 
        {
          $i++;
          $total_sociales = 0; 

          $total_discapacidad = PersonasDiscapacidad($codigo_solicitud);
          $total_discapacidad = round($total_discapacidad, 4);

         $rating_total_discapacidad= SocialesPersonasDiscapacidad($codigo_solicitud);
         $rating_total_discapacidad = round($rating_total_discapacidad, 4);

         $producto_total_discapacidad = $peso_3 * $rating_total_discapacidad; 
         $producto_total_discapacidad = round($producto_total_discapacidad, 4);

         $total_sociales += $producto_total_discapacidad; 


         //////////////////////////////

          $total_movilidad = PersonasMovilidad($codigo_solicitud);
          $total_movilidad = round($total_movilidad, 4);

         $rating_total_movilidad= SocialesPersonasMovilidad($codigo_solicitud);
         $rating_total_movilidad= round($rating_total_movilidad, 4);

         $producto_total_movilidad = $peso_3 * $rating_total_movilidad; 
         $producto_total_movilidad= round($producto_total_movilidad, 4);

         $total_sociales += $producto_total_movilidad;


         //////////////////////////////


          $total_visual = PersonasVisual($codigo_solicitud);
          $total_visual = round($total_visual, 4);

         $rating_total_visual= SocialesPersonasVisual($codigo_solicitud);
         $rating_total_visual= round($rating_total_visual, 4);

         $producto_total_visual = $peso_3 * $rating_total_visual; 
         $producto_total_visual= round($producto_total_visual, 4);

         $total_sociales += $producto_total_visual; 


          //////////////////////////////


         $total_auditiva = PersonasAuditiva($codigo_solicitud);
         $total_auditiva = round($total_auditiva, 4);

         $rating_total_auditiva= SocialesPersonasAuditiva($codigo_solicitud);
         $rating_total_auditiva= round($rating_total_auditiva, 4);

         $producto_total_auditiva = $peso_3 * $rating_total_auditiva; 
         $producto_total_auditiva= round($producto_total_auditiva, 4);

         $total_sociales += $producto_total_auditiva;


         ////////////////////////////// 

           $total_mayores = PersonasMayores($codigo_solicitud);
           $total_mayores = round($total_mayores, 4);

         $rating_total_mayores= SocialesPersonasMayores($codigo_solicitud);
         $rating_total_mayores= round($rating_total_mayores, 4);

         $producto_total_mayores = $peso_3 * $rating_total_mayores;
           

         $total_sociales += $producto_total_mayores; 



         ////////////////////////////// 


         $dependientes = PersonasDependientes($id);
         $dependientes = round($dependientes, 4);

         $rating_dependientes = SocialesDependientes($id,$codigo_solicitud);
         $rating_dependientes= round($rating_dependientes, 4);

         $producto_dependientes = $peso_4 * $rating_dependientes;
         $producto_dependientes = round($producto_dependientes, 4);

         $total_tecnicos += $producto_dependientes; 


          ////////////////////////////// 


         $intensidad = IntensidadUso();
         $intensidad = round($intensidad, 4);

         $rating_intensidad = SocialesIntensidadUso();
         $rating_intensidad= round($rating_intensidad, 4);

         $producto_intensidad = $peso_4 * $rating_intensidad;
         $producto_intensidad = round($producto_intensidad, 4); 

         $total_tecnicos += $producto_intensidad; 

          ////////////////////////////// 

         $horario = HorarioFuncionamiento($id);
         $horario = round($horario, 4);

         $rating_horario = SocialesHorarioFuncionamiento($id);
         $rating_horario= round($rating_horario, 4);

         $producto_horario = $peso_4 * $rating_horario; 
         $producto_horario = round($producto_horario, 4);
         $total_tecnicos += $producto_horario; 



          //////////////////////////////


          $lphe = LPHE($id);
          $lphe = round($lphe, 4);

         $rating_lphe = SocialesLPHE($id);
         $rating_lphe= round($rating_lphe, 4);

         $producto_lphe = $peso_4 * $rating_lphe; 
         $producto_lphe= round($producto_lphe, 4);

         $total_tecnicos += $producto_lphe;


         //////////////////////////////

          $tipo_intervencion = TipoIntervencion($id);
          $tipo_intervencion = round($tipo_intervencion, 4);

         $rating_tipo_intervencion = SocialesTipoIntervencion($id);
         $rating_tipo_intervencion= round($rating_tipo_intervencion, 4);

         $producto_tipo_intervencion = $peso_4 * $rating_tipo_intervencion; 
         $producto_tipo_intervencion= round($producto_tipo_intervencion, 4);
         $total_tecnicos += $producto_tipo_intervencion;


         //////////////////////////////

         $ambiental = EstadoAmbientalPatrimonial($id);
         $ambiental = round($ambiental, 4);

         $rating_ambiental = SocialesEstadoAmbientalPatrimonial($id);
         $rating_ambiental= round($rating_ambiental, 4);

         $producto_ambiental = $peso_4 * $rating_ambiental;
         $producto_ambiental= round($producto_ambiental, 4);

         $total_tecnicos += $producto_ambiental;  


         //////////////////////////////


           $arraigo = ArraigoPoblacion($id);
           $arraigo = round($arraigo, 4);

         $rating_arraigo = SocialesArraigoPoblacion($id);
         $rating_arraigo= round($rating_arraigo, 4);

         $producto_arraigo = $peso_4 * $rating_arraigo; 
         $producto_arraigo= round($producto_arraigo, 4);
         $total_tecnicos += $producto_arraigo; 


          //////////////////////////////



         $asistencial = CaracterAsistencial($id);
         $asistencial = round($asistencial, 4);
         $rating_asistencial = SocialesCaracterAsistencial($id);
          $rating_asistencial= round($rating_asistencial, 4);

         $producto_asistencial = $peso_4 * $rating_asistencial; 
         $producto_asistencial= round($producto_asistencial, 4);

         $total_tecnicos += $producto_asistencial; 


$html .=
"
<div id='tablapdfSociales' >
            <table>
              <tbody>



             <tr align=center>
             <td rowspan='4' style='background-color: #4577B5; color: white;'>$i</td>    
            <td  style='background-color: #4577B5; color: white;' >Edificio</td>
            <td style='width: 70px;'>$total_discapacidad </td>
            <td style='width: 70px;'>$total_movilidad</td>
            <td style='width: 70px;'>$total_visual</td>
            <td style='width: 70px;'>$total_auditiva</td>
            <td style='width: 55px;'>$total_mayores</td>
            <td style='width: 70px;'>$dependientes</td>
            <td style='width: 70px;'>$intensidad</td>
            <td style='width: 70px;'>$horario</td>
            <td style='width: 70px;'>$lphe</td>
            <td style='width: 70px;'>$tipo_intervencion</td>
            <td style='width: 70px;'>$ambiental</td>
            <td style='width: 70px;'>$arraigo</td>
            <td style='width: 70px;'>$asistencial</td>
            <td style='background-color: #FFFFFF;'> Total Tecn= </td>
            </tr>

             <tr align=center>
            <td  style='background-color: #4577B5; color: white;' >Rating R(0 a 4)</td>
            <td style='width: 55px;'>$rating_total_discapacidad </td>
            <td style='width: 55px;'>$rating_total_movilidad</td>
            <td style='width: 55px;'>$rating_total_visual</td>
            <td style='width: 55px;'>$rating_total_auditiva</td>
            <td style='width: 55px;'>$rating_total_mayores</td>
            <td style='width: 55px;'> $rating_dependientes</td>
            <td style='width: 55px;'>$rating_intensidad</td>
            <td style='width: 55px;'>$rating_horario</td>
            <td style='width: 55px;'>$rating_lphe</td>
            <td style='width: 55px;'>$rating_tipo_intervencion</td>
            <td style='width: 50px;'>$rating_ambiental</td>
            <td style='width: 55px;'>$rating_arraigo</td>
            <td style='width: 55px;'>$rating_asistencial</td>
            <td style='background-color: #FFFFFF;'> Sum WtecnxR= </td>
            </tr>

             <tr align=center>
            <td  style='background-color: #4577B5; color: white;' >WxR</td>
            <td>$producto_total_discapacidad </td>
            <td>$producto_total_movilidad</td>
            <td>$producto_total_visual</td>
            <td>$producto_total_auditiva</td>
            <td>$producto_total_mayores</td>
            <td>$producto_dependientes</td>
            <td>$producto_intensidad</td>
            <td>$producto_horario</td>
            <td>$producto_lphe</td>
            <td>$producto_tipo_intervencion</td>
            <td>$producto_ambiental</td>
            <td>$producto_arraigo</td>
            <td>$producto_asistencial</td>
            <td style='background-color: #FFFFFF;'>  $total_sociales </td>
            </tr>





             </tbody>
        </table>
        

       </div> 



";

}

//////////////////////////////////////
/*


$i = 0;
        foreach ($res as $id) 
        {
          $i++;
          $total_sociales = 0; 

          $total_discapacidad = PersonasDiscapacidad($codigo_solicitud);
         $rating_total_discapacidad= SocialesPersonasDiscapacidad($codigo_solicitud);
         $producto_total_discapacidad = $peso_3 * $rating_total_discapacidad; 
         $total_sociales += $producto_total_discapacidad; 


$html .=
"  
         <tr class = 'tr3' align=center>
          <td> $total_discapacidad </td>
         <td colspan='2'> $rating_total_discapacidad </td>
         <td> $producto_total_discapacidad </td>
         </tr>
";


         /////////////////////////////////

         $total_movilidad = PersonasMovilidad($codigo_solicitud);
         $rating_total_movilidad= SocialesPersonasMovilidad($codigo_solicitud);
         $producto_total_movilidad = $peso_3 * $rating_total_movilidad; 
         $total_sociales += $producto_total_movilidad; 

$html .=
"  
         <tr class = 'tr3' align=center>
         <td> $total_movilidad </td>
         <td colspan='2'> $rating_total_movilidad </td>
         <td> $producto_total_movilidad </td>
         </tr>
";



          /////////////////////////////////

         $total_visual = PersonasVisual($codigo_solicitud);
         $rating_total_visual= SocialesPersonasVisual($codigo_solicitud);
         $producto_total_visual = $peso_3 * $rating_total_visual; 
         $total_sociales += $producto_total_visual; 

$html .=
"  
         <tr class = 'tr3' align=center>
         <td> $total_visual </td>
         <td colspan='2'> $rating_total_visual </td>
         <td> $producto_total_visual </td>
         </tr>
";


          /////////////////////////////////

         $total_auditiva = PersonasAuditiva($codigo_solicitud);
         $rating_total_auditiva= SocialesPersonasAuditiva($codigo_solicitud);
         $producto_total_auditiva = $peso_3 * $rating_total_auditiva; 
         $total_sociales += $producto_total_auditiva; 
$html .=
"  

         <tr class = 'tr3' align=center>
         <td> $total_auditiva </td>
         <td colspan='2'> $rating_total_auditiva </td>
         <td> $producto_total_auditiva </td>
         </tr>
";


         /////////////////////////////////

         $total_mayores = PersonasMayores($codigo_solicitud);
         $rating_total_mayores= SocialesPersonasMayores($codigo_solicitud);
         $producto_total_mayores = $peso_3 * $rating_total_mayores; 
         $total_sociales += $producto_total_mayores; 

$html .=
"  
         <tr class = 'tr1' align=center>
         <td> $total_mayores </td>
         <td colspan='2'> $rating_total_mayores </td>
         <td> $producto_total_mayores </td>
         </tr>
";




         ///INCREMENTO////////
          /////////////////////////////////

         $dependientes = PersonasDependientes($id);
         $rating_dependientes = SocialesDependientes($id,$codigo_solicitud);
         $producto_dependientes = $peso_4 * $rating_dependientes; 
         $total_tecnicos += $producto_dependientes; 

$html .=
"  
         <tr class = 'tr3' align=center>
         <td> $dependientes </td>
         <td colspan='2'> $rating_dependientes </td>
         <td> $producto_dependientes </td>
         </tr>
";

          /////////////////////////////////

         $intensidad = IntensidadUso();
         $rating_intensidad = SocialesIntensidadUso();
         $producto_intensidad = $peso_4 * $rating_intensidad; 
         $total_tecnicos += $producto_intensidad; 

$html .=
"  
         <tr class = 'tr1' align=center>
         <td> $intensidad </td>
         <td colspan='2'> $rating_intensidad </td>
         <td> $producto_intensidad </td>
         </tr>
";

          /////////////////////////////////

         $horario = HorarioFuncionamiento($id);
         $rating_horario = SocialesHorarioFuncionamiento($id);
         $producto_horario = $peso_4 * $rating_horario; 
         $total_tecnicos += $producto_horario; 

$html .=
"         
        <tr class = 'tr1' align=center>
        <td> $horario </td>
        <td colspan='2'> $rating_horario </td>
        <td> $producto_horario </td>
        </tr>
";


          /////////////////////////////////

         $lphe = LPHE($id);
         $rating_lphe = SocialesLPHE($id);
         $producto_lphe = $peso_4 * $rating_lphe; 
         $total_tecnicos += $producto_lphe; 

$html .=
"  
          <tr class = 'tr6' align=center>
          <td> $lphe </td>
          <td colspan='2'> $rating_lphe </td>
          <td> $producto_lphe </td>
          </tr>

";


         /////////////////////////////////

         $tipo_intervencion = TipoIntervencion($id);
         $rating_tipo_intervencion = SocialesTipoIntervencion($id);
         $producto_tipo_intervencion = $peso_4 * $rating_tipo_intervencion; 
         $total_tecnicos += $producto_tipo_intervencion; 

$html .=
"  
        <tr class = 'tr6' align=center>
        <td> $tipo_intervencion </td>
        <td colspan='2'> $rating_tipo_intervencion </td>
        <td> $producto_tipo_intervencion </td>
        </tr>

";

          /////////////////////////////////
        

         $ambiental = EstadoAmbientalPatrimonial($id);
         $rating_ambiental = SocialesEstadoAmbientalPatrimonial($id);
         $producto_ambiental = $peso_4 * $rating_ambiental; 
         $total_tecnicos += $producto_ambiental; 

$html .=
"  
          <tr class = 'tr1' align=center>
          <td> $ambiental </td>
          <td colspan='2'> $rating_ambiental </td>
          <td> $producto_ambiental </td>
          </tr>
";


         /////////////////////////////////
     
         $arraigo = ArraigoPoblacion($id);
         $rating_arraigo = SocialesArraigoPoblacion($id);
         $producto_arraigo = $peso_4 * $rating_arraigo; 
         $total_tecnicos += $producto_arraigo; 

$html .=
"  
        <tr class = 'tr6' align=center>
        <td> $arraigo </td>
        <td colspan='2'> $rating_arraigo </td>
        <td> $producto_arraigo </td>
        </tr>

";


        /////////////////////////////////

         $asistencial = CaracterAsistencial($id);
         $rating_asistencial = SocialesCaracterAsistencial($id);
         $producto_asistencial = $peso_4 * $rating_asistencial; 
         $total_tecnicos += $producto_asistencial; 

$html .=
"  
         <tr class = 'tr6' align=center>
         <td> $asistencial </td>
         <td colspan='2'> $rating_asistencial </td>
         <td> $producto_asistencial </td>
         </tr>
";

         


         /////Resultado//////////////
         /////////////////////////////////
      
$html .=
"  
          <tr class = 'tr6' style='background-color: #FFFFFF'>
          <td> Total Tecn= </td>
          <td colspan='2'> ∑ WtecnxR= </td>
          <td>$total_sociales</td>
          </tr>


$html .=
"
      
          <div id='tablapdfSociales' >
            <table>
              <tbody>
          <tr align=center>
            <td rowspan='4' style='background-color: #4577B5; color: white;'>$i</td>     
            <td style='background-color: #4577B5; color: white;width: 57px;'>Edificio</td>
            <td style='width: 55px;'> $dxt </td>
            <td style='width: 55px;'> $mov </td>
            <td style='width: 55px;'> $au </td>
            <td style='width: 55px;'> $vi </td>
            <td style='width: 55px;'> $incremento_dxt </td>
            <td style='width: 55px;'> $incremento_mov </td>
            <td style='width: 55px;'> $incremento_au </td>
            <td style='width: 55px;'> $incremento_vi </td>
            <td style='width: 55px;'> $conf_arquitectonica </td>
            <td style='width: 55px;'> $estado_fisico </td>
            <td style='width: 55px;'> $usos_actividades </td>
            <td style='width: 55px;'> $relaciones_entorno </td>
            <td style='width: 55px;'> $tecnico </td>
            <td style='width: 55px;'> $urbanistico </td>
            <td style='width: 55px;'> $administrativo </td>
            <td style='background-color: #FFFFFF; width: 70px;'> Total Tecn= </td>
          </tr>

          <tr align=center>
          
            <td style='background-color: #4577B5; color: white;width: 40px;'>Rating R (0 a 4)</td>
            <td style='width: 55px;'> $nivelDXT </td>
            <td style='width: 55px;'> $nivelmov </td>
            <td style='width: 55px;'> $nivelau </td>
            <td style='width: 55px;'> $nivelvi </td>
            <td style='width: 55px;'> $Rating_DXT </td>
            <td style='width: 55px;'> $Rating_mov </td>
            <td style='width: 55px;'> $Rating_au </td>
            <td style='width: 55px;'> $Rating_vi </td>
            <td style='width: 55px;'> $Rating_conf_arquitectonica </td>
            <td style='width: 55px;'> $Rating_estado_fisico </td>
            <td style='width: 55px;'> $Rating_usos_actividades </td>
            <td style='width: 55px;'> $Rating_relaciones_entorno </td>
            <td style='width: 55px;'> $Rating_tecnico </td>
            <td style='width: 55px;'> $Rating_urbanistico </td>
            <td style='width: 55px;'> $Rating_administrativo </td>
            <td style='background-color: #FFFFFF; width: 70px;'> Sum WtecnxR= </td>
          </tr>

          <tr align=center>

            <td style='background-color: #4577B5; color: white;width: 40px;'>WxR</td>
            <td> $producto_dxt </td>
            <td > $producto_mov </td>
            <td > $producto_au  </td>
            <td > $producto_vi </td>
            <td > $producto_incremento_dxt </td>
            <td > $producto_incremento_mov </td>
            <td > $producto_incremento_au </td>
            <td > $producto_incremento_vi </td>
            <td > $producto_conf_arquitectonica </td>
            <td > $producto_estado_fisico </td>
            <td > $producto_usos_actividades </td>
            <td > $producto_relaciones_entorno </td>
            <td > $producto_tecnico </td>
            <td > $producto_urbanistico </td>
            <td > $producto_administrativo </td>
            <td style='background-color: #FFFFFF; width: 70px;'>$total_tecnicos</td>

          </tr>
               

           </tbody>
        </table>
        </div>


      
";




/*

$html .=
"  

<div id = multicriterioSociales>
<div id='tablapdf3' >
            <table>
               <thead>
        <tr align=center>
            <th scope='col' rowspan='2' >Grupo de Criterios</th>
            <th scope='col' rowspan='2'>Subgrupo de Criterios</th>
            <th scope='col' rowspan='2'></th>
            <th scope='col' rowspan='2'>Criterios</th>
            <th scope='col' rowspan='2'>Peso W(0 a 1)</th>

        </tr>
      </thead>
      <tbody>
           <tr >
            <td rowspan='13'>Sociales (0,333)</td>
            <td rowspan='5'>Diversidad funcional de las personas (65% s/sociales)</td>
            <td rowspan ='4'>1</td>
            <td>Número total de personas con discapacidad (pcd)</td>
            <td>0,054</td>
          </tr>
          <tr>
            <td>Número de personas con problemas de movilidad</td>
            <td>0,054</td>
          </tr>
          <tr>
            <td>Número de personas con discapacidad visual</td>
            <td>0,054</td>
          </tr>
          <tr>
            <td>Número de personas con discapacidad auditiva</td>
            <td>0,054</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Número de personas mayores (pm)</td>
            <td>0,054</td>
          </tr>


          <tr>
            <td rowspan='3'>Situación de ocupación del edificio</td>
            <td>1</td>
            <td>Número de personas dependientes (pd)</td>
            <td>0,017</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Intensidad de uso (do - m²/pers)</td>
            <td>0,017</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Horario de funcionamiento (h/dia)</td>
            <td>0,017</td>
          </tr>

          <tr>
            <td rowspan='3'>Condiciones patrimoniales</td>
            <td>4</td>
            <td>Clasificación según LPHE</td>
            <td>0,017</td>
          </tr>
          <tr>
            <td>5</td>
            <td>Tipo de intervención</td>
            <td>0,017</td>
          </tr>
          <tr>
            <td>6</td>
            <td>Estado ambiental y patrimonial</td>
            <td>0,017</td>
          </tr>
          <tr>
            <td rowspan='2'>Valores Socio - Culturales</td>
            <td>7</td>
            <td>Arraigo de la población</td>
            <td>0,017</td>
          </tr>
          <tr>
            <td>8</td>
            <td>Carácter Asistencial</td>
            <td>0,017</td>
          </tr>
          <tr style='background-color: #FFFFFF'>
            <td colspan='4'>Celda de comprobación del peso del grupo de criterios.(∑ Wtecn)</td>
            <td>0,333</td>
          </tr>

      </tr>
    </tbody>
  </table>
  </div>
  </div>

";


$i = 0;
        foreach ($res as $id) 
        {
          $i++;
          $total_sociales = 0; 

$html .=
"  
          <div class = alternativasSociales>
         <div id='tablapdf3' >
            <table>
               <thead>
            <tr align=center>
              <th scope='col' colspan='4'>Alternativa $i</th>     
            </tr>


           <tr class = 'cab1' align=center >
            <th  >Edificio</th>
            <th colspan='2' >Rating R (0 a 4)</th>
            <th  >WxR</th>
            </tr>
               
        </thead>
        <tbody>
";
         $total_discapacidad = PersonasDiscapacidad($codigo_solicitud);
         $rating_total_discapacidad= SocialesPersonasDiscapacidad($codigo_solicitud);
         $producto_total_discapacidad = $peso_3 * $rating_total_discapacidad; 
         $total_sociales += $producto_total_discapacidad; 


$html .=
"  
         <tr class = 'tr3' align=center>
          <td> $total_discapacidad </td>
         <td colspan='2'> $rating_total_discapacidad </td>
         <td> $producto_total_discapacidad </td>
         </tr>
";


         /////////////////////////////////

         $total_movilidad = PersonasMovilidad($codigo_solicitud);
         $rating_total_movilidad= SocialesPersonasMovilidad($codigo_solicitud);
         $producto_total_movilidad = $peso_3 * $rating_total_movilidad; 
         $total_sociales += $producto_total_movilidad; 

$html .=
"  
         <tr class = 'tr3' align=center>
         <td> $total_movilidad </td>
         <td colspan='2'> $rating_total_movilidad </td>
         <td> $producto_total_movilidad </td>
         </tr>
";



          /////////////////////////////////

         $total_visual = PersonasVisual($codigo_solicitud);
         $rating_total_visual= SocialesPersonasVisual($codigo_solicitud);
         $producto_total_visual = $peso_3 * $rating_total_visual; 
         $total_sociales += $producto_total_visual; 

$html .=
"  
         <tr class = 'tr3' align=center>
         <td> $total_visual </td>
         <td colspan='2'> $rating_total_visual </td>
         <td> $producto_total_visual </td>
         </tr>
";


          /////////////////////////////////

         $total_auditiva = PersonasAuditiva($codigo_solicitud);
         $rating_total_auditiva= SocialesPersonasAuditiva($codigo_solicitud);
         $producto_total_auditiva = $peso_3 * $rating_total_auditiva; 
         $total_sociales += $producto_total_auditiva; 
$html .=
"  

         <tr class = 'tr3' align=center>
         <td> $total_auditiva </td>
         <td colspan='2'> $rating_total_auditiva </td>
         <td> $producto_total_auditiva </td>
         </tr>
";


         /////////////////////////////////

         $total_mayores = PersonasMayores($codigo_solicitud);
         $rating_total_mayores= SocialesPersonasMayores($codigo_solicitud);
         $producto_total_mayores = $peso_3 * $rating_total_mayores; 
         $total_sociales += $producto_total_mayores; 

$html .=
"  
         <tr class = 'tr1' align=center>
         <td> $total_mayores </td>
         <td colspan='2'> $rating_total_mayores </td>
         <td> $producto_total_mayores </td>
         </tr>
";




         ///INCREMENTO////////
          /////////////////////////////////

         $dependientes = PersonasDependientes($id);
         $rating_dependientes = SocialesDependientes($id,$codigo_solicitud);
         $producto_dependientes = $peso_4 * $rating_dependientes; 
         $total_tecnicos += $producto_dependientes; 

$html .=
"  
         <tr class = 'tr3' align=center>
         <td> $dependientes </td>
         <td colspan='2'> $rating_dependientes </td>
         <td> $producto_dependientes </td>
         </tr>
";

          /////////////////////////////////

         $intensidad = IntensidadUso();
         $rating_intensidad = SocialesIntensidadUso();
         $producto_intensidad = $peso_4 * $rating_intensidad; 
         $total_tecnicos += $producto_intensidad; 

$html .=
"  
         <tr class = 'tr1' align=center>
         <td> $intensidad </td>
         <td colspan='2'> $rating_intensidad </td>
         <td> $producto_intensidad </td>
         </tr>
";

          /////////////////////////////////

         $horario = HorarioFuncionamiento($id);
         $rating_horario = SocialesHorarioFuncionamiento($id);
         $producto_horario = $peso_4 * $rating_horario; 
         $total_tecnicos += $producto_horario; 

$html .=
"         
        <tr class = 'tr1' align=center>
        <td> $horario </td>
        <td colspan='2'> $rating_horario </td>
        <td> $producto_horario </td>
        </tr>
";


          /////////////////////////////////

         $lphe = LPHE($id);
         $rating_lphe = SocialesLPHE($id);
         $producto_lphe = $peso_4 * $rating_lphe; 
         $total_tecnicos += $producto_lphe; 

$html .=
"  
          <tr class = 'tr6' align=center>
          <td> $lphe </td>
          <td colspan='2'> $rating_lphe </td>
          <td> $producto_lphe </td>
          </tr>

";


         /////////////////////////////////

         $tipo_intervencion = TipoIntervencion($id);
         $rating_tipo_intervencion = SocialesTipoIntervencion($id);
         $producto_tipo_intervencion = $peso_4 * $rating_tipo_intervencion; 
         $total_tecnicos += $producto_tipo_intervencion; 

$html .=
"  
        <tr class = 'tr6' align=center>
        <td> $tipo_intervencion </td>
        <td colspan='2'> $rating_tipo_intervencion </td>
        <td> $producto_tipo_intervencion </td>
        </tr>

";

          /////////////////////////////////
        

         $ambiental = EstadoAmbientalPatrimonial($id);
         $rating_ambiental = SocialesEstadoAmbientalPatrimonial($id);
         $producto_ambiental = $peso_4 * $rating_ambiental; 
         $total_tecnicos += $producto_ambiental; 

$html .=
"  
          <tr class = 'tr1' align=center>
          <td> $ambiental </td>
          <td colspan='2'> $rating_ambiental </td>
          <td> $producto_ambiental </td>
          </tr>
";


         /////////////////////////////////
     
         $arraigo = ArraigoPoblacion($id);
         $rating_arraigo = SocialesArraigoPoblacion($id);
         $producto_arraigo = $peso_4 * $rating_arraigo; 
         $total_tecnicos += $producto_arraigo; 

$html .=
"  
        <tr class = 'tr6' align=center>
        <td> $arraigo </td>
        <td colspan='2'> $rating_arraigo </td>
        <td> $producto_arraigo </td>
        </tr>

";


        /////////////////////////////////

         $asistencial = CaracterAsistencial($id);
         $rating_asistencial = SocialesCaracterAsistencial($id);
         $producto_asistencial = $peso_4 * $rating_asistencial; 
         $total_tecnicos += $producto_asistencial; 

$html .=
"  
         <tr class = 'tr6' align=center>
         <td> $asistencial </td>
         <td colspan='2'> $rating_asistencial </td>
         <td> $producto_asistencial </td>
         </tr>
";

         


         /////Resultado//////////////
         /////////////////////////////////
      
$html .=
"  
          <tr class = 'tr6' style='background-color: #FFFFFF'>
          <td> Total Tecn= </td>
          <td colspan='2'> ∑ WtecnxR= </td>
          <td>$total_sociales</td>
          </tr>

        </tbody>
        </table>
        </div>
        </div>
";

        }

$html .=
"  
  </div>
";


/*

/////////////////TABLA SOCIALES///////////////////




$peso_3 = 0.043;
$peso_4 = 0.017;

$html .=
"  

<div id = multicriterioSociales>
<div id='tablapdf3' >
            <table>
               <thead>
        <tr align=center>
            <th scope='col' rowspan='2' >Grupo de Criterios</th>
            <th scope='col' rowspan='2'>Subgrupo de Criterios</th>
            <th scope='col' rowspan='2'></th>
            <th scope='col' rowspan='2'>Criterios</th>
            <th scope='col' rowspan='2'>Peso W(0 a 1)</th>

        </tr>
      </thead>
      <tbody>
           <tr >
            <td rowspan='13'>Sociales (0,333)</td>
            <td rowspan='5'>Diversidad funcional de las personas (65% s/sociales)</td>
            <td rowspan ='4'>1</td>
            <td>Número total de personas con discapacidad (pcd)</td>
            <td>0,054</td>
          </tr>
          <tr>
            <td>Número de personas con problemas de movilidad</td>
            <td>0,054</td>
          </tr>
          <tr>
            <td>Número de personas con discapacidad visual</td>
            <td>0,054</td>
          </tr>
          <tr>
            <td>Número de personas con discapacidad auditiva</td>
            <td>0,054</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Número de personas mayores (pm)</td>
            <td>0,054</td>
          </tr>


          <tr>
            <td rowspan='3'>Situación de ocupación del edificio</td>
            <td>1</td>
            <td>Número de personas dependientes (pd)</td>
            <td>0,017</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Intensidad de uso (do - m²/pers)</td>
            <td>0,017</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Horario de funcionamiento (h/dia)</td>
            <td>0,017</td>
          </tr>

          <tr>
            <td rowspan='3'>Condiciones patrimoniales</td>
            <td>4</td>
            <td>Clasificación según LPHE</td>
            <td>0,017</td>
          </tr>
          <tr>
            <td>5</td>
            <td>Tipo de intervención</td>
            <td>0,017</td>
          </tr>
          <tr>
            <td>6</td>
            <td>Estado ambiental y patrimonial</td>
            <td>0,017</td>
          </tr>
          <tr>
            <td rowspan='2'>Valores Socio - Culturales</td>
            <td>7</td>
            <td>Arraigo de la población</td>
            <td>0,017</td>
          </tr>
          <tr>
            <td>8</td>
            <td>Carácter Asistencial</td>
            <td>0,017</td>
          </tr>
          <tr style='background-color: #FFFFFF'>
            <td colspan='4'>Celda de comprobación del peso del grupo de criterios.(∑ Wtecn)</td>
            <td>0,333</td>
          </tr>

      </tr>
    </tbody>
  </table>
  </div>
  </div>

";


$i = 0;
        foreach ($res as $id) 
        {
          $i++;
          $total_sociales = 0; 

$html .=
"  
          <div class = alternativasSociales>
         <div id='tablapdf3' >
            <table>
               <thead>
            <tr align=center>
              <th scope='col' colspan='4'>Alternativa $i</th>     
            </tr>


           <tr class = 'cab1' align=center >
            <th  >Edificio</th>
            <th colspan='2' >Rating R (0 a 4)</th>
            <th  >WxR</th>
            </tr>
               
        </thead>
        <tbody>
";
         $total_discapacidad = PersonasDiscapacidad($codigo_solicitud);
         $rating_total_discapacidad= SocialesPersonasDiscapacidad($codigo_solicitud);
         $producto_total_discapacidad = $peso_3 * $rating_total_discapacidad; 
         $total_sociales += $producto_total_discapacidad; 


$html .=
"  
         <tr class = 'tr3' align=center>
          <td> $total_discapacidad </td>
         <td colspan='2'> $rating_total_discapacidad </td>
         <td> $producto_total_discapacidad </td>
         </tr>
";


         /////////////////////////////////

         $total_movilidad = PersonasMovilidad($codigo_solicitud);
         $rating_total_movilidad= SocialesPersonasMovilidad($codigo_solicitud);
         $producto_total_movilidad = $peso_3 * $rating_total_movilidad; 
         $total_sociales += $producto_total_movilidad; 

$html .=
"  
         <tr class = 'tr3' align=center>
         <td> $total_movilidad </td>
         <td colspan='2'> $rating_total_movilidad </td>
         <td> $producto_total_movilidad </td>
         </tr>
";



          /////////////////////////////////

         $total_visual = PersonasVisual($codigo_solicitud);
         $rating_total_visual= SocialesPersonasVisual($codigo_solicitud);
         $producto_total_visual = $peso_3 * $rating_total_visual; 
         $total_sociales += $producto_total_visual; 

$html .=
"  
         <tr class = 'tr3' align=center>
         <td> $total_visual </td>
         <td colspan='2'> $rating_total_visual </td>
         <td> $producto_total_visual </td>
         </tr>
";


          /////////////////////////////////

         $total_auditiva = PersonasAuditiva($codigo_solicitud);
         $rating_total_auditiva= SocialesPersonasAuditiva($codigo_solicitud);
         $producto_total_auditiva = $peso_3 * $rating_total_auditiva; 
         $total_sociales += $producto_total_auditiva; 
$html .=
"  

         <tr class = 'tr3' align=center>
         <td> $total_auditiva </td>
         <td colspan='2'> $rating_total_auditiva </td>
         <td> $producto_total_auditiva </td>
         </tr>
";


         /////////////////////////////////

         $total_mayores = PersonasMayores($codigo_solicitud);
         $rating_total_mayores= SocialesPersonasMayores($codigo_solicitud);
         $producto_total_mayores = $peso_3 * $rating_total_mayores; 
         $total_sociales += $producto_total_mayores; 

$html .=
"  
         <tr class = 'tr1' align=center>
         <td> $total_mayores </td>
         <td colspan='2'> $rating_total_mayores </td>
         <td> $producto_total_mayores </td>
         </tr>
";




         ///INCREMENTO////////
          /////////////////////////////////

         $dependientes = PersonasDependientes($id);
         $rating_dependientes = SocialesDependientes($id,$codigo_solicitud);
         $producto_dependientes = $peso_4 * $rating_dependientes; 
         $total_tecnicos += $producto_dependientes; 

$html .=
"  
         <tr class = 'tr3' align=center>
         <td> $dependientes </td>
         <td colspan='2'> $rating_dependientes </td>
         <td> $producto_dependientes </td>
         </tr>
";

          /////////////////////////////////

         $intensidad = IntensidadUso();
         $rating_intensidad = SocialesIntensidadUso();
         $producto_intensidad = $peso_4 * $rating_intensidad; 
         $total_tecnicos += $producto_intensidad; 

$html .=
"  
         <tr class = 'tr1' align=center>
         <td> $intensidad </td>
         <td colspan='2'> $rating_intensidad </td>
         <td> $producto_intensidad </td>
         </tr>
";

          /////////////////////////////////

         $horario = HorarioFuncionamiento($id);
         $rating_horario = SocialesHorarioFuncionamiento($id);
         $producto_horario = $peso_4 * $rating_horario; 
         $total_tecnicos += $producto_horario; 

$html .=
"         
        <tr class = 'tr1' align=center>
        <td> $horario </td>
        <td colspan='2'> $rating_horario </td>
        <td> $producto_horario </td>
        </tr>
";


          /////////////////////////////////

         $lphe = LPHE($id);
         $rating_lphe = SocialesLPHE($id);
         $producto_lphe = $peso_4 * $rating_lphe; 
         $total_tecnicos += $producto_lphe; 

$html .=
"  
          <tr class = 'tr6' align=center>
          <td> $lphe </td>
          <td colspan='2'> $rating_lphe </td>
          <td> $producto_lphe </td>
          </tr>

";


         /////////////////////////////////

         $tipo_intervencion = TipoIntervencion($id);
         $rating_tipo_intervencion = SocialesTipoIntervencion($id);
         $producto_tipo_intervencion = $peso_4 * $rating_tipo_intervencion; 
         $total_tecnicos += $producto_tipo_intervencion; 

$html .=
"  
        <tr class = 'tr6' align=center>
        <td> $tipo_intervencion </td>
        <td colspan='2'> $rating_tipo_intervencion </td>
        <td> $producto_tipo_intervencion </td>
        </tr>

";

          /////////////////////////////////
        

         $ambiental = EstadoAmbientalPatrimonial($id);
         $rating_ambiental = SocialesEstadoAmbientalPatrimonial($id);
         $producto_ambiental = $peso_4 * $rating_ambiental; 
         $total_tecnicos += $producto_ambiental; 

$html .=
"  
          <tr class = 'tr1' align=center>
          <td> $ambiental </td>
          <td colspan='2'> $rating_ambiental </td>
          <td> $producto_ambiental </td>
          </tr>
";


         /////////////////////////////////
     
         $arraigo = ArraigoPoblacion($id);
         $rating_arraigo = SocialesArraigoPoblacion($id);
         $producto_arraigo = $peso_4 * $rating_arraigo; 
         $total_tecnicos += $producto_arraigo; 

$html .=
"  
        <tr class = 'tr6' align=center>
        <td> $arraigo </td>
        <td colspan='2'> $rating_arraigo </td>
        <td> $producto_arraigo </td>
        </tr>

";


        /////////////////////////////////

         $asistencial = CaracterAsistencial($id);
         $rating_asistencial = SocialesCaracterAsistencial($id);
         $producto_asistencial = $peso_4 * $rating_asistencial; 
         $total_tecnicos += $producto_asistencial; 

$html .=
"  
         <tr class = 'tr6' align=center>
         <td> $asistencial </td>
         <td colspan='2'> $rating_asistencial </td>
         <td> $producto_asistencial </td>
         </tr>
";

         


         /////Resultado//////////////
         /////////////////////////////////
      
$html .=
"  
          <tr class = 'tr6' style='background-color: #FFFFFF'>
          <td> Total Tecn= </td>
          <td colspan='2'> ∑ WtecnxR= </td>
          <td>$total_sociales</td>
          </tr>

        </tbody>
        </table>
        </div>
        </div>
";

        }

$html .=
"  
  </div>
";





$peso_5 = 0.047;



$html .=
" 

<div id=multicriterioEconomicos>
<div id='tablapdf3' >
            <table>
               <thead>
        <tr align=center>
            <th scope='col' >Grupo de Criterios</th>
            <th scope='col' >Subgrupo de Criterios</th>
            <th scope='col' ></th>
            <th scope='col' >Criterios</th>
            <th scope='col' >Peso W(0 a 1)</th>

        </tr>
      </thead>
      <tbody>
           <tr >
            <td rowspan='7'>Económicos (0,333)</td>
            <td> Valoraciones económicas</td>
            <td>1</td>
            <td>Coste de la medida (Cm / [1-J]Vr) </td>
            <td>0,054</td>
          </tr>
          <tr>
            <td rowspan='2'>Capacidad económica de las personas e instituciones</td>
            <td>1</td>
            <td>Estabilidad presupuestaria (Ep = I / G)</td>
            <td>0,054</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Rentabilidad económica (Re)</td>
            <td>0,054</td>
          </tr>
          <tr>
            <td rowspan='2'>Facilitadores de la mejora</td>
            <td>3</td>
            <td>1% cultural (sólo en edificios de la Administración Pública)</td>
            <td>0,054</td>
          </tr>
          <tr>
            <td>4</td>
            <td>Posibilidad de financiación externa (Fi)</td>
            <td>0,054</td>
          </tr>
          <tr >
            <td>Límite del deber legal de conservacion</td>
            <td>5</td>
            <td>Valor de reposición (Vr) : Si Cm > 50% Vr (€)</td>
            <td>0,054</td>
          </tr>
          <tr >
            <td>Otras</td>
            <td>6</td>
            <td>Otras actuaciones (no de Acc.) previstas en el edificio</td>
            <td>0,054</td>
          </tr>
          <tr style='background-color: #FFFFFF'>
            <td colspan='4'>Celda de comprobación del peso del grupo de criterios.(∑ Wtecn)</td>
            <td>0,333</td>
          </tr>

        </tr>
      </tr>
    </tbody>
  </table>
</div>
</div>


";


///////////////////////////////
*/


$peso_5 = 0.047;



$html .=
" 

<br><br><br><br><br><br>

<div id='tablapdf4' >
            <table>
              <tbody>
            <tr align=center>
            <td style=' background-color: #4577B5; color: white;'>Grupo de Criterios</td>

            <td colspan='7' style='background-color: #CEF1FF; color: black; '> Económicos (0,333)</td>
            <td style='background-color: #FFFFFF; color = #000000;' rowspan='4'> Celda de comprobación del peso del grupo de criterios.(Sum Wtecn)</td>
            </tr>

            <tr align=center>
            <td style='background-color: #4577B5; color: white;' >Subgrupo de Criterios</td>
            <td colspan='1'> Valoraciones económicas </td>
            <td colspan='2'> Capacidad económica de las personas e instituciones </td>
            <td colspan='2'>Facilitadores de la mejora </td>
            <td colspan='1'>Límite del deber legal de conservación</td>
            <td colspan='1'>Otras</td>
            </tr>
 
           <tr align=center>
           <td style='background-color: #4577B5; color: white;' > Selección </td>
              <td>1</td>
              <td>1</td>
              <td>2</td>
              <td>3</td>
              <td>4</td>
              <td>5</td>
              <td>6</td>
            </tr>

          <tr align=center>
          <td style='background-color: #4577B5; color: white;' >Criterios</td>
            <td>Coste de la medida (Cm / [1-J]Vr) </td>
            <td>Estabilidad presupuestaria (Ep = I / G)</td>
            <td>Rentabilidad económica (Re)</td>
            <td>1% cultural (sólo en edificios de la Administración Pública)</td>
            <td>Posibilidad de financiación externa (Fi)</td>
            <td>Valor de reposición (Vr) : Si Cm > 50% Vr (€)</td>
            <td>Otras actuaciones (no de Acc.) previstas en el edificio</td>
            
          </tr>

          <tr align=center>
          <td  style='background-color: #4577B5; color: white;' >Peso W(0 a 1)</td>
            <td>0,054</td>
            <td>0,054</td>
            <td>0,054</td>
            <td>0,054</td>
            <td>0,054</td>
            <td>0,054</td>
            <td>0,054</td>
            <td style='background-color: #FFFFFF;'>0,333</td>
          </tr>


    </tbody>
  </table>
</div>



";




$i = 0;
        foreach ($res as $id) 
        {
          $i++;
          $total_economicos = 0; 

           $coste_medida = CosteMedida();
         $rating_coste_medida= EconomicosCosteMedida();
         $rating_coste_medida = round($rating_coste_medida, 4);

         $producto_coste_medida = $peso_5 * $rating_coste_medida;
         $producto_coste_medida = round($producto_coste_medida, 4);

         $total_economicos += $producto_coste_medida; 

          /////////////////////////////////

          $estabilidad = EstabilidadPresupuestaria($codigo_solicitud);
         $rating_estabilidad= EconomicosEstabilidadPresupuestaria($codigo_solicitud);
         $rating_estabilidad = round($rating_estabilidad, 4);

         $producto_estabilidad = $peso_5 * $rating_estabilidad;
         $producto_estabilidad = round($producto_estabilidad, 4); 

         $total_economicos += $producto_estabilidad; 


          /////////////////////////////////

         $rentabilidad = RentabilidadEconomica($codigo_solicitud);
         $rating_rentabilidad= EconomicosRentabilidadEconomica($codigo_solicitud);
         $rating_rentabilidad = round($rating_estabilidad, 4);

         $producto_rentabilidad = $peso_5 * $rating_rentabilidad; 
          $producto_rentabilidad = round($producto_rentabilidad, 4);

         $total_economicos += $producto_rentabilidad; 



          /////////////////////////////////

         $cultural = Cultural($codigo_solicitud);
         $rating_cultural= EconomicosCultural($codigo_solicitud);
         $rating_cultural = round($rating_cultural, 4);

         $producto_cultural = $peso_5 * $rating_cultural;
         $producto_cultural = round($producto_cultural, 4); 

         $total_economicos += $producto_cultural; 



         /////////////////////////////////

         $financiacion = PosibilidadFinanciacion($codigo_solicitud);
         $rating_financiacion= EconomicosFinanciacionExterna($codigo_solicitud);
          $rating_financiacion = round($rating_financiacion, 4);

         $producto_financiacion = $peso_5 * $rating_financiacion; 
          $producto_financiacion = round($producto_financiacion, 4);

         $total_economicos += $producto_financiacion; 




         ///INCREMENTO////////
          /////////////////////////////////

         $reposicion = ValorReposicion();
         $rating_reposicion= EconomicosValorReposicion();
         $rating_reposicion = round($rating_reposicion, 4);

         $producto_reposicion = $peso_5 * $rating_reposicion; 
         $producto_reposicion = round($producto_reposicion, 4);

         $total_economicos += $producto_reposicion; 



          /////////////////////////////////

         $otras = OtrasActuaciones($id);
         $rating_otras= EconomicosOtrasActuaciones($id);
         $rating_otras = round($rating_otras, 4);

         $producto_otras = $peso_5 * $rating_otras;
         $producto_otras = round($producto_otras, 4); 
         $total_economicos += $producto_otras;




$html .=
"
<div id='tablapdfEconomicos' >
            <table>
              <tbody>



             <tr align=center>
             <td rowspan='4' style='background-color: #4577B5; color: white;'>$i</td>    
            <td  style='background-color: #4577B5; color: white;' >Edificio</td>
            <td style='width: 120px;'> $coste_medida </td>
            <td style='width: 120px;'>$estabilidad</td>
            <td style='width: 120px;'>$rentabilidad</td>
            <td style='width: 120px;'> $cultural</td>
            <td style='width: 120px;'> $financiacion</td>
            <td style='width: 120px;'>$otras</td>
           
            <td style='background-color: #FFFFFF;'> Total Tecn= </td>
            </tr>

             <tr align=center>
            <td  style='background-color: #4577B5; color: white;' >Rating R(0 a 4)</td>
            <td style='width: 120px;'>$rating_coste_medida </td>
            <td style='width: 120px;'>$rating_estabilidad</td>
            <td style='width: 120px;'>$rating_rentabilidad</td>
            <td style='width: 120px;'>$rating_cultural</td>
            <td style='width: 120px;'>$rating_financiacion</td>
            <td style='width: 120px;'> $rating_otras</td>
          
            <td style='background-color: #FFFFFF;'> Sum WtecnxR= </td>
            </tr>

             <tr align=center>
            <td  style='background-color: #4577B5; color: white;' >WxR</td>
             <td style='width: 120px;'>$producto_coste_medida </td>
            <td style='width: 120px;'>$producto_estabilidad</td>
            <td style='width: 120px;'>$producto_rentabilidad</td>
            <td style='width: 120px;'>$producto_cultural</td>
            <td style='width: 120px;'>$producto_financiacion</td>
            <td style='width: 120px;'>$producto_otras</td>
          
            <td style='width: 130px; background-color: #FFFFFF;'>  $total_economicos </td>
            </tr>





             </tbody>
        </table>
        

       </div> 



";

}





/*
$i = 0;
        foreach ($res as $id) 
        {
          $i++;
          $total_economicos = 0; 

$html .=
" 
          <div class=alternativasEconomicos >
         <div id='tablapdf3' >
            <table>
               <thead>
            <tr align=center>
              <th scope='col' colspan='4'>Alternativa $i</th>     
            </tr>


          <tr class = 'cab1' align=center>
            <th scope='col' >Edificio</th>
            <th colspan='2' >Rating R (0 a 4)</th>
            <th scope='col' >WxR</th>
            </tr>
               
        </thead>
        <tbody>
";
         $coste_medida = CosteMedida();
         $rating_coste_medida= EconomicosCosteMedida();
         $producto_coste_medida = $peso_5 * $rating_coste_medida; 
         $total_economicos += $producto_coste_medida; 

$html .=
" 
        <tr class = 'tr1' align=center>
         <td> $coste_medida </td>
         <td colspan='2'> $rating_coste_medida </td>
         <td> $producto_coste_medida </td>
         </tr>
";


         /////////////////////////////////

         $estabilidad = EstabilidadPresupuestaria($codigo_solicitud);
         $rating_estabilidad= EconomicosEstabilidadPresupuestaria($codigo_solicitud);
         $producto_estabilidad = $peso_5 * $rating_estabilidad; 
         $total_economicos += $producto_estabilidad; 

$html .=
" 

         <tr class = 'tr1' align=center>
         <td> $estabilidad </td>
         <td colspan='2'> $rating_estabilidad </td>
         <td> $producto_estabilidad </td>
         </tr>
";



          /////////////////////////////////

         $rentabilidad = RentabilidadEconomica($codigo_solicitud);
         $rating_rentabilidad= EconomicosRentabilidadEconomica($codigo_solicitud);
         $producto_rentabilidad = $peso_5 * $rating_rentabilidad; 
         $total_economicos += $producto_rentabilidad; 

$html .=
" 

         <tr class = 'tr6' align=center>
         <td> $rentabilidad </td>
         <td colspan='2'> $rating_rentabilidad </td>
         <td> $producto_rentabilidad </td>
         </tr>

";


          /////////////////////////////////

         $cultural = Cultural($codigo_solicitud);
         $rating_cultural= EconomicosCultural($codigo_solicitud);
         $producto_cultural = $peso_5 * $rating_cultural; 
         $total_economicos += $producto_cultural; 
$html .=
" 

         <tr class = 'tr4' align=center>
         <td> $cultural </td>
         <td colspan='2'> $rating_cultural </td>
         <td> $producto_cultural </td>
         </tr>
";


         /////////////////////////////////

         $financiacion = PosibilidadFinanciacion($codigo_solicitud);
         $rating_financiacion= EconomicosFinanciacionExterna($codigo_solicitud);
         $producto_financiacion = $peso_5 * $rating_financiacion; 
         $total_economicos += $producto_financiacion; 

$html .=
" 
         <tr class = 'tr2' align=center>
         <td> $financiacion </td>
         <td colspan='2'> $rating_financiacion </td>
         <td> $producto_financiacion </td>
         </tr>
";





         ///INCREMENTO////////
          /////////////////////////////////

         $reposicion = ValorReposicion();
         $rating_reposicion= EconomicosValorReposicion();
         $producto_reposicion = $peso_5 * $rating_reposicion; 
         $total_economicos += $producto_reposicion; 
$html .=
" 
          <tr class = 'tr3' align=center>
          <td> $reposicion </td>
          <td colspan='2'> $rating_reposicion </td>
          <td> $producto_reposicion </td>
          </tr>
";




          /////////////////////////////////

         $otras = OtrasActuaciones($id);
         $rating_otras= EconomicosOtrasActuaciones($id);
         $producto_otras = $peso_5 * $rating_otras; 
         $total_economicos += $producto_otras; 

$html .=
" 
        <tr class = 'tr4' align=center>
         <td> $otras </td>
         <td colspan='2'> $rating_otras </td>
         <td> $producto_otras </td>
         </tr>
";



         /////Resultado//////////////
         /////////////////////////////////
 
$html .=
"      
   

         <tr style='background-color: #FFFFFF'>
         <td> Total Tecn= </td>
         <td colspan='2'> ∑ WtecnxR= </td>
          <td>$total_economicos</td>
         </tr>





        </tbody>
        </table>
        </div>
        </div>
";
        }





/*



$peso_5 = 0.047;



$html .=
" 

<div id=multicriterioEconomicos>
<div id='tablapdf3' >
            <table>
               <thead>
        <tr align=center>
            <th scope='col' >Grupo de Criterios</th>
            <th scope='col' >Subgrupo de Criterios</th>
            <th scope='col' ></th>
            <th scope='col' >Criterios</th>
            <th scope='col' >Peso W(0 a 1)</th>

        </tr>
      </thead>
      <tbody>
           <tr >
            <td rowspan='7'>Económicos (0,333)</td>
            <td> Valoraciones económicas</td>
            <td>1</td>
            <td>Coste de la medida (Cm / [1-J]Vr) </td>
            <td>0,054</td>
          </tr>
          <tr>
            <td rowspan='2'>Capacidad económica de las personas e instituciones</td>
            <td>1</td>
            <td>Estabilidad presupuestaria (Ep = I / G)</td>
            <td>0,054</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Rentabilidad económica (Re)</td>
            <td>0,054</td>
          </tr>
          <tr>
            <td rowspan='2'>Facilitadores de la mejora</td>
            <td>3</td>
            <td>1% cultural (sólo en edificios de la Administración Pública)</td>
            <td>0,054</td>
          </tr>
          <tr>
            <td>4</td>
            <td>Posibilidad de financiación externa (Fi)</td>
            <td>0,054</td>
          </tr>
          <tr >
            <td>Límite del deber legal de conservacion</td>
            <td>5</td>
            <td>Valor de reposición (Vr) : Si Cm > 50% Vr (€)</td>
            <td>0,054</td>
          </tr>
          <tr >
            <td>Otras</td>
            <td>6</td>
            <td>Otras actuaciones (no de Acc.) previstas en el edificio</td>
            <td>0,054</td>
          </tr>
          <tr style='background-color: #FFFFFF'>
            <td colspan='4'>Celda de comprobación del peso del grupo de criterios.(∑ Wtecn)</td>
            <td>0,333</td>
          </tr>

        </tr>
      </tr>
    </tbody>
  </table>
</div>
</div>


";


///////////////////////////////


$i = 0;
        foreach ($res as $id) 
        {
          $i++;
          $total_economicos = 0; 

$html .=
" 
          <div class=alternativasEconomicos >
         <div id='tablapdf3' >
            <table>
               <thead>
            <tr align=center>
              <th scope='col' colspan='4'>Alternativa $i</th>     
            </tr>


          <tr class = 'cab1' align=center>
            <th scope='col' >Edificio</th>
            <th colspan='2' >Rating R (0 a 4)</th>
            <th scope='col' >WxR</th>
            </tr>
               
        </thead>
        <tbody>
";
         $coste_medida = CosteMedida();
         $rating_coste_medida= EconomicosCosteMedida();
         $producto_coste_medida = $peso_5 * $rating_coste_medida; 
         $total_economicos += $producto_coste_medida; 

$html .=
" 
        <tr class = 'tr1' align=center>
         <td> $coste_medida </td>
         <td colspan='2'> $rating_coste_medida </td>
         <td> $producto_coste_medida </td>
         </tr>
";


         /////////////////////////////////

         $estabilidad = EstabilidadPresupuestaria($codigo_solicitud);
         $rating_estabilidad= EconomicosEstabilidadPresupuestaria($codigo_solicitud);
         $producto_estabilidad = $peso_5 * $rating_estabilidad; 
         $total_economicos += $producto_estabilidad; 

$html .=
" 

         <tr class = 'tr1' align=center>
         <td> $estabilidad </td>
         <td colspan='2'> $rating_estabilidad </td>
         <td> $producto_estabilidad </td>
         </tr>
";



          /////////////////////////////////

         $rentabilidad = RentabilidadEconomica($codigo_solicitud);
         $rating_rentabilidad= EconomicosRentabilidadEconomica($codigo_solicitud);
         $producto_rentabilidad = $peso_5 * $rating_rentabilidad; 
         $total_economicos += $producto_rentabilidad; 

$html .=
" 

         <tr class = 'tr6' align=center>
         <td> $rentabilidad </td>
         <td colspan='2'> $rating_rentabilidad </td>
         <td> $producto_rentabilidad </td>
         </tr>

";


          /////////////////////////////////

         $cultural = Cultural($codigo_solicitud);
         $rating_cultural= EconomicosCultural($codigo_solicitud);
         $producto_cultural = $peso_5 * $rating_cultural; 
         $total_economicos += $producto_cultural; 
$html .=
" 

         <tr class = 'tr4' align=center>
         <td> $cultural </td>
         <td colspan='2'> $rating_cultural </td>
         <td> $producto_cultural </td>
         </tr>
";


         /////////////////////////////////

         $financiacion = PosibilidadFinanciacion($codigo_solicitud);
         $rating_financiacion= EconomicosFinanciacionExterna($codigo_solicitud);
         $producto_financiacion = $peso_5 * $rating_financiacion; 
         $total_economicos += $producto_financiacion; 

$html .=
" 
         <tr class = 'tr2' align=center>
         <td> $financiacion </td>
         <td colspan='2'> $rating_financiacion </td>
         <td> $producto_financiacion </td>
         </tr>
";





         ///INCREMENTO////////
          /////////////////////////////////

         $reposicion = ValorReposicion();
         $rating_reposicion= EconomicosValorReposicion();
         $producto_reposicion = $peso_5 * $rating_reposicion; 
         $total_economicos += $producto_reposicion; 
$html .=
" 
          <tr class = 'tr3' align=center>
          <td> $reposicion </td>
          <td colspan='2'> $rating_reposicion </td>
          <td> $producto_reposicion </td>
          </tr>
";




          /////////////////////////////////

         $otras = OtrasActuaciones($id);
         $rating_otras= EconomicosOtrasActuaciones($id);
         $producto_otras = $peso_5 * $rating_otras; 
         $total_economicos += $producto_otras; 

$html .=
" 
        <tr class = 'tr4' align=center>
         <td> $otras </td>
         <td colspan='2'> $rating_otras </td>
         <td> $producto_otras </td>
         </tr>
";



         /////Resultado//////////////
         /////////////////////////////////
 
$html .=
"      
   

         <tr style='background-color: #FFFFFF'>
         <td> Total Tecn= </td>
         <td colspan='2'> ∑ WtecnxR= </td>
          <td>$total_economicos</td>
         </tr>





        </tbody>
        </table>
        </div>
        </div>
";
        }


        */
$html .=
"      


       <div id='comentarioMulticriterio'>
          <h6>Para que la alternativa cumpla los requisitos de  'Ajuste Razonable', en cada aspecto de esta misma(técnicos, sociales, económicos) esta tiene que superar la cifra de 0,666 y que esto conlleve a que la sumatoria de los 3 aspectos sean >= 2 </h6>
       </div>

</div>


";



return $html;

}




function MostrarAdjuntos($id_diagnostico, $codigo_solicitud)
{

$select  = MostrarAlternativas($id_diagnostico);

$alternativas = array();

if ($select)
  {
    if(mysqli_num_rows($select)>0)
    {     
      while ($tupla=mysqli_fetch_array($select))
      {
        $id = $tupla['Id'];
        $select2 = SelectNotip($id);
          if($select2)
            if(mysqli_num_rows($select2)>0)
              array_push($alternativas, $id);         
      }
    }

  }

$html = "";

$i = 1;


$html .=
"

<br><br><br>

<div id= Adjuntos>
  <h2>Archivos adjuntos </h2>



";



foreach ($alternativas as $key ) 
{

$selectPdf = SelectNotip($key);

  if ($selectPdf)
  {
    if(mysqli_num_rows($selectPdf)>0)
    {     

   $html .=
        "

  <h5> Alternativas No tipificadas</h5>

   ";
      while ($tupla2=mysqli_fetch_array($selectPdf))
      {     
        $pdf = $tupla2['Pdf'];
        $precio = $tupla2['Precio'];
        $nombre_pdf = substr($pdf, 13);

        $html .=
        "
          <br>Alternativa $i: <a href = $pdf> $nombre_pdf</a> precio: $precio

        ";

        $i++;
      }
    }
  }
}


 $html .=
        "
        <br><br>
        <h5>Planos de la solicitud: $codigo_solicitud</h5>
        <ul>


        ";



$select_planos = SelectPlanos($codigo_solicitud);

 
 if ($select_planos)
  {
    if(mysqli_num_rows($select_planos)>0)
    {     
      while ($tupla3=mysqli_fetch_array($select_planos))
      {  
        $ruta_planos = $tupla3['Ruta_planos'];
        $nombre_planos = substr($ruta_planos, 15);

        $html .=
          "
            <li><a href = $ruta_planos> $nombre_planos</a></li>

          ";


    }
  }
}

  $html .=
        "
        </ul>

        </div>
        ";

return $html;




}




//////////////////////////////////////////
/*
function HtmlIni($titulo)
{
echo <<< HTML
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device−width, initial−scale=1.0">
<link rel="stylesheet" href="css/estilos.css"> <title>$titulo</title>
<script language="javascript" src="validar.js"></script>
</head>
<body>
HTML;
}

function HtmlLoginIni()
{
echo <<< HTML


<div class = "cabecera" id ="login">
		<form action ="login.php" method="post" onSubmit="return ValidarLogin();">

		<p>Login</p>
		<label>
			<input id='email' type='text' name='Email'/>
		</label>
		<label>
			<input id='clave' type='password' name = 'Clave'/>
		</label>
		<label>
			<input type="submit" name="login" id="login" value="Login"/>
		</label>

		</form>
		
</div>

HTML;

}


function HtmlLogeado()
{
echo <<< HTML
<div class = "cabecera" id ="loginOK">
				Bienvenido, 
HTML;
				echo " ".htmlspecialchars($_SESSION['user']);

echo <<< HTML

				<form id = "logout" action = "logout.php" method="post"> 
					<label>
		    			<input type="submit" value="Logout" />
		    		</label>
	    		</form>
</div>
HTML;

}







function HtmlHeader()
{


echo <<< HTML
<header>
	<div class="cabecera">
		<img src ="img/logo.jpg"/>
HTML;

	if(isset($_SESSION['user']) )
		HtmlLogeado();
	else
		HtmlLoginIni();

echo <<< HTML
		

		<div class="cabecera" id="barra">

		</div>
	</div>
<header>
HTML;
}



//Funciones pag inicio
function HTMLpag_inicio(){

echo <<< HTML
<div class = "contenido" id = "texto">

	<h1>Un poco de historia</h1>
		<p> El grupo fue creado por un conjuto de alumnos de Ingenieria informtatica a partir de una idea en común, la pasión por la informática</p>
		<p> Los campos mas interesantes que se investigan son: la inteligencia artificial y la computación de altas prestaciones</p>

</div>	
HTML;
}



function HtmlFooter()
{
echo <<< HTML
<footer>

<a href="../documentacion.pdf"> Ver documentacion </a>

<p> © Santiago Gutierrez Rojano, </p>
<p>	Carlos Lopez Rodriguez</p> 
</footer>
HTML;
}


function HtmlFin()
{
echo <<< HTML
</body>
</html>
HTML;
}


/////////////////////////////////////////////////////////////////////////////



function ImprimeAutores($string)
{
	$autores = explode(', ', $string); //divide la cadena en Investigadores

							
	foreach($autores as $autores => $value)
	{
		
		
		$ruser = SelectUser($value);
		
    	if ($ruser) //seleccionamos el nombre y apellidos del usuario
		{
			if(mysqli_num_rows($ruser)>0)
			{
				
			
					while ($tupla=mysqli_fetch_array($ruser))
					{
						$nombre = $tupla['Nombre'];
						$apellidos = $tupla['Apellidos'];
						
						echo "<a href='index.php?p=Miembros'> ".htmlspecialchars($nombre)		." ".
																htmlspecialchars($apellidos)	.
						"</a>, ";
					}
						
			}
			else
				echo "".htmlspecialchars($value).", ";
		}
		

	}
}





//Funcion ver log

function verLog(){

if(!isset($_SESSION['Admin'])) 
{ 
 header("Location: index.php"); 
 exit; 
}


echo <<< HTML
<div class = "contenido" id = "texto">

<h1> Log de la web </h1>

HTML;


$res = SelectLog();

if ($res)
{
	if(mysqli_num_rows($res)>0)
	{
		
				echo " <div class = log >";	
				echo "<ul>";
				while ($tupla=mysqli_fetch_array($res))
				{
					
					
					echo "<li>{$tupla['Nombre']} -  {$tupla['Accion']}, {$tupla['Fecha']}</li>";

					

				
				}
				echo "</ul>";
				echo"</div>";
	}
	else 
	{
		echo "<p>No hay resultados para la consulta</p>";
		mysqli_free_result($res);
	}
}
else
{
	echo "<p>Error en la consulta</p>";
  	echo "<p>Código: ".mysqli_errno()."</p>";
  	echo "<p>Mensaje: ".mysqli_error()."</p>";
  
}


echo <<< HTML
</div>	
HTML;

}



//Funcion miembros (etiqutas html visibles pero no funcionan)

function HTMLmiembros(){

echo <<< HTML
<div class = "contenido" id = "texto">

<h1> Miembros registrados </h1>

HTML;


$res = SelectMiembros();



if ($res)
{
	if(mysqli_num_rows($res)>0)
	{
		
	
				while ($tupla=mysqli_fetch_array($res))
				{
					echo " <div class = user >";

					$id = $tupla['Id'];
					$res2 = SelectImagenByID($id);
					if ($res2)
					{
						if(mysqli_num_rows($res2)>0)
						{
							
						
									while ($tupla2=mysqli_fetch_array($res2))
									{	
										echo "<img src = {$tupla2['Ruta']} alt='Imagen no disponible' >";
									}
						}
					}
echo <<< HTML
					<div class ="atributos">

HTML;
						echo "<ul>";
							echo "<li> Nombre: ".htmlspecialchars($tupla['Nombre'])."</li>";
							echo "<li> Apellidos: ".htmlspecialchars($tupla['Apellidos'])."</li>";
							echo "<li> Direccion: ".htmlspecialchars($tupla['Direccion'])."</li>";
							echo "<li> Categoria: ".htmlspecialchars($tupla['Categoria'])."</li>";
							echo "<li> Email: ".htmlspecialchars($tupla['Email'])."</li>";
							echo "<li> Telefono: ".htmlspecialchars($tupla['Telefono'])."</li>";
							echo "<li> URL: ".htmlspecialchars($tupla['URL'])."</li>";
							echo "<li> Centro: ".htmlspecialchars($tupla['Centro'])."</li>";
							echo "<li> Departamento: ".htmlspecialchars($tupla['Departamento'])."</li>";


echo <<< HTML
					</div>

HTML;

							/*Guardamos los datos para el formularo de modificacion*/


/*							
							$id = $tupla['Id'];

							$val = "Modificar".$id;
				
							$_SESSION['id_mod'] = $val;
						
							if(isset($_SESSION['Admin']))
							{

								
								echo"<form id='botonModificar' action='modificarUsuario.php' method='post'>";		
								echo"<input type='hidden' name = 'val' value='$val'/>";
	    						echo"<input type='submit' name ='$val' value='Modificar'  />";
	    						echo"</form>";


	    						echo"<form id='botonBorrar' action='comprobarUser.php' method='post'>";
								echo"<input type='hidden' name = 'id_miembro' value='$id'/>";
	    						echo"<input type='submit' name ='Borrar' value='Borrar'  />";
	    						echo"</form>";

	    						
							}
						echo "</ul>";

					echo"</div>";

				
				}
			
				
	}
	else 
	{
		echo "<p>No hay resultados para la consulta</p>";
		mysqli_free_result($res);
	}
}
else
{
	echo "<p>Error en la consulta</p>";
  	echo "<p>Código: ".mysqli_errno()."</p>";
  	echo "<p>Mensaje: ".mysqli_error()."</p>";
  
}


echo <<< HTML
</div>	
HTML;

}



function HTMLresPubli($datos){


echo <<< HTML
<div class = "contenido" id="texto">



	<div class="publicaciones">
HTML;



		if($datos)
		{
			if(mysqli_num_rows($datos)>0)
			{
			
		
					while ($tupla=mysqli_fetch_array($datos))
					{
						echo " <div class = user >";	

						
						echo " <div class = atributos >";

							echo "<ul>";
								echo "<li> Tipo: ".htmlspecialchars($tupla['Tipo'])."</li>";
								echo "<li> DOI: ".htmlspecialchars($tupla['DOI'])."</li>";
								echo "<li> Titulo: ".htmlspecialchars($tupla['Titulo'])."</li>";
								echo "<li> Autores: ";

								ImprimeAutores($tupla['Autores']);


								echo "</li>";
								echo "<li> Fecha: ".htmlspecialchars($tupla['Fecha'])."</li>";
								echo "<li> Resumen: ".htmlspecialchars($tupla['Resumen'])."</li>";
								echo "<li> URL: ".htmlspecialchars($tupla['URL'])."</li>";
								echo "<li> Palabras_clave: ".htmlspecialchars($tupla['Palabras_clave'])."</li>";
							
						
								$DOI = $tupla['DOI'];
								$tipo = $tupla['Tipo'];
								
								$val = "Modificar".$DOI;

								if ((strcasecmp($tipo,"Articulo")) == 0)
								{
									
									$resTipo = SelectArticulo($DOI); 

									if(mysqli_num_rows($resTipo)>0)
									{
										
										while ($tupla=mysqli_fetch_array($resTipo))
										{
											
												echo "<li> Nombre_revista: ".htmlspecialchars($tupla['Nombre_revista'])."</li>";
												echo "<li> Volumen: ".htmlspecialchars($tupla['Volumen'])."</li>";
												echo "<li> Numero de paginas: ".htmlspecialchars($tupla['Paginas'])."</li>";

										}	
									}
								}
								else if ((strcasecmp($tipo,"Libro")) == 0)
								{

									$resTipo = SelectLibro($DOI);

									if(mysqli_num_rows($resTipo)>0)
									{
										
										 

										while ($tupla=mysqli_fetch_array($resTipo))
										{
											

												echo "<li> Editorial: ".htmlspecialchars($tupla['Editorial'])."</li>";
												echo "<li> Editor: ".htmlspecialchars($tupla['Editor'])."</li>";
												echo "<li> ISBN: ".htmlspecialchars($tupla['ISBN'])."</li>";
												
												


										}	
									}
								}
								else if ((strcasecmp($tipo,"Capitulo")) == 0)
								{

									$resTipo = SelectCapitulo($DOI); 

									if(mysqli_num_rows($resTipo)>0)
									{
										
										
										while ($tupla=mysqli_fetch_array($resTipo))
										{
										

												echo "<li> Titulo: ".htmlspecialchars($tupla['Titulo'])."</li>";
												echo "<li> Editorial: ".htmlspecialchars($tupla['Editorial'])."</li>";
												echo "<li> Editor: ".htmlspecialchars($tupla['Editor'])."</li>";
												echo "<li> ISBN: ".htmlspecialchars($tupla['ISBN'])."</li>";
												echo "<li> Paginas: ".htmlspecialchars($tupla['Paginas'])."</li>";
										
										}	
									}
								}
								else if ((strcasecmp($tipo,"Conferencia")) == 0)
								{
									$resTipo = SelectConferencia($DOI); 

									if(mysqli_num_rows($resTipo)>0)
									{
										
										while ($tupla=mysqli_fetch_array($resTipo))
										{
										

												
												echo "<li> Nombre: ".htmlspecialchars($tupla['Nombre'])."</li>";
												echo "<li> Lugar: ".htmlspecialchars($tupla['Lugar'])."</li>";
												echo "<li> Reseña: ".htmlspecialchars($tupla['Resenia'])."</li>";


										}	
									}
								}

							echo"</div>";

							if(isset($_SESSION['log']))
							{	
								$log = $_SESSION['log'];
								$es_autor = 0;
							
								$resUser = SelectUserPubli($DOI);
								$resIdUser = SelectUserByEmail($log);


								if($resIdUser)
								{
									if(mysqli_num_rows($resIdUser)>0)
										{
											
											while ($tupla2=mysqli_fetch_array($resIdUser))
											{
												$Id = $tupla2['Id'];
											}	
										}
								}

								if($resUser)
								{
									if(mysqli_num_rows($resUser)>0)
										{
											
											while ($tupla2=mysqli_fetch_array($resUser))
											{
											
												if($tupla2['Id_miembro'] == $Id)
													$es_autor = 1;
											}	
										}
								}



								
									

								if( $es_autor ||  isset($_SESSION['Admin'])) //si el usuario es el propietario o es adminstrador puede borrar y modificar
								{
									
									$id_publi = substr("$val",9);

									echo " <div id = botones >";

									echo"<form action='comprobarPubli.php' method='post'>";
									echo"<input type='hidden' name ='DOI' value='$id_publi'/>";
									//echo"<input type='hidden' name ='id_miembro' value='$Id'/>";
		    						echo"<input type='submit' name ='Borrar' value='Borrar'  />";
		    						echo"</form>";

		    						echo"<form action='ModificarPubli.php' method='post'>";
									echo"<input type='hidden' name ='DOI' value='$id_publi'/>";
									echo"<input type='hidden' name ='id_miembro' value='$Id'/>";
		    						echo"<input type='submit' name ='Modificar' value='Modificar'  />";
		    						echo"</form>";

		    						echo"</div>";

	    						}	

							}
							echo "</ul>";




						echo"</div>";
					}
				
		

			}
			
		}
		else
			echo "No se ha recibido consulta";


	
echo <<< HTML
	</div>

</div>	
HTML;
}



//Funcion publicaciones

function HTMLpublicaciones(){

echo <<< HTML
<script src=js/jquery.js></script>



<div class = "contenido" id="texto">
	
		<form id ="form_publi" action="" method="post" > 
			
				<label>
				<p>Tipo</p>
	    			<p><input type='radio' id='opcion' name = "Tipo" value='Articulo'/>Articulo</p>
	    			<p><input type='radio' id='opcion' name = "Tipo" value='Libro'/>Libro</p>
	    			<p><input type='radio' id='opcion' name = "Tipo" value='Capitulo'/>Capitulo de Libro</p>
	    			<p><input type='radio' id='opcion' name = "Tipo" value='Conferencia'/>Conferencia</p>
	    		</label>
	    		
	    		<label>
	    		<p>Autor</p>
	    			<input id='autores' type='text' name = 'Autores' placeholder="Nombre y apellidos"/>
	    		</label>

	    		
	    		
	    		<label>
	    		<p>Fecha</p>
	    			<input id='fecha' type='date' name = 'Fecha'/>
	    		</label>
	    		
	    		<label>
	    		<p>Palabras clave</p>
	    			<input id='palabras' type='text' name = 'Palabras' onkeyup="MostrarSugeridos(this.value)"/>
	    			    			
	    			<script>

						$(document).ready(function(){
						        var consulta;
						        //hacemos focus al campo de búsqueda
						        $("#palabras").focus();
						                                                                                                     
						        //comprobamos si se pulsa una tecla
						        $("#palabras").keyup(function(e){
						                                      
						              //obtenemos el texto introducido en el campo de búsqueda
						              consulta = $("#palabras").val();
						              //hace la búsqueda                                                                                  
						              $.ajax({
						                    type: "POST",
						                    url: "buscarAjax.php",
						                    data: "busqueda="+consulta,
						                    dataType: "html",
						 
						                    error: function(){
						                    alert("error petición ajax");
						                    },
						                    success: function(busqueda){                                                    
						                    $("#resultado").empty();
						                    $("#resultado").append(busqueda);                                                             
						                    }
						              });                                                                         
						        });                                                     
						});             

</script>
	    			<span id="texto"></span>
	    		</label>

	    		<div id = "boton_publi">
	    		<label>
	    			<input type="submit" name="publi"/>
	    		</label>
	    		</div>
		</form>
		<div id ="resultado"></div>
HTML;


	$datos[0] = isset($_POST['Tipo']) ? $_POST['Tipo'] : ''; 

	$datos[1] = isset($_POST['Autores']) ? $_POST['Autores'] : '';

	$datos[2] = isset($_POST['Palabras']) ? $_POST['Palabras'] : '';

	$datos[3] = isset($_POST['Fecha']) ? $_POST['Fecha'] : '';

	$contador = 0;


	$campos = array("Tipo","Autores","Palabras_clave","Fecha");


	if($datos[0] != '' )
	{
		
		$contador++;
	}

	if($datos[1] != '' )
	{
		$autor = explode(' ', $datos[1] ,2); //divide la cadena 

		$nombre = $autor[0];
		$apellidos = $autor[1];


		$res = SelectUserByNombreApellidos($nombre, $apellidos);

		if($res)
		{
			if(mysqli_num_rows($res)>0)
				{
					
					while ($tupla=mysqli_fetch_array($res))
					{
					
						$datos[1] = $tupla['Id'];
					}	
				}
		}

		$contador++;
	}

	if($datos[2] != '' )
	{
		
		$contador++;
	}

	if($datos[3] != '' )
	{
		
		$contador++;
	}

	$fecha = date('Y-m-d');

	


	


	
	$datosConsulta  = 0;

	if($contador == 4)
		$datosConsulta = SelectPublicaciones4($datos,$fecha);
	else if ($contador == 3) 
	{
		$datosConsulta = SelectPublicaciones3($datos,$campos,$fecha);
	}
	else if ($contador == 2) 
	{
		$datosConsulta = SelectPublicaciones2($datos,$campos,$fecha);
	}
	else if ($contador == 1) {
		$datosConsulta = SelectPublicaciones1($datos,$campos,$fecha);
	}






	if($datosConsulta)
		HTMLresPubli($datosConsulta);
		
	
	


echo <<< HTML
</div>	
HTML;


}





function HtmlContenido($activo)
{

echo <<< HTML
<div class = "contenido">
HTML;


if(isset($_SESSION['Admin']))
{
	echo"<div class = 'contenido' id='nav'><ul>";

		$items = ["Inicio", "Miembros", "Proyectos", "Publicaciones","Nuevo_Proyecto", "Nuevo_Usuario", "Log", "Backup"];
		foreach ($items as $k => $v)
			echo "<li".($k==$activo?" class='activo'":"").">". "<a href='index.php?p=".($v)."'>".$v."</a></li>";

	echo"</ul></div>";
}

else if(isset($_SESSION['user']))
{
	echo"<div class = 'contenido' id='nav'><ul>";

		$items = ["Inicio", "Miembros", "Proyectos", "Publicaciones","Nuevo_Proyecto"];
		foreach ($items as $k => $v)
			echo "<li".($k==$activo?" class='activo'":"").">". "<a href='index.php?p=".($v)."'>".$v."</a></li>";

	echo"</ul></div>";
}

else
{
	echo"<div class = 'contenido' id='nav'><ul>";

		$items = ["Inicio", "Miembros", "Proyectos", "Publicaciones"];
		foreach ($items as $k => $v)
			echo "<li".($k==$activo?" class='activo'":"").">". "<a href='index.php?p=".($v)."'>".$v."</a></li>";

	echo"</ul></div>";

}



echo <<< HTML
</div>
HTML;

}





function form_anadirUser()
{

if(!isset($_SESSION['Admin'])) 
{ 
 header("Location: index.php"); 
 exit; 
}


$imagen =  '';

echo <<< HTML


	<div class = "contenido" id = "texto">

		<h1> Añadir un nuevo Usuario </h1>



 

		<div class = "formulario" id="form_user">
			<form method="post" id="fmisdatos" name="misdatos" action="comprobarUser.php" onSubmit="return Validacion();"> 
				
					
					
					<label>
					<p>Nombre</p>
		    			<input id='nombre' type='text' name='Nombre'/>
		    		</label>
		    		
		    		<label>
		    		<p>Apellidos</p>
		    			<input id='apellidos' type='text' name = 'Apellidos'/>
		    		</label>
		    		
		    		<label>
		    		<p>Categoria</p>
		    			<input id='categoria' type='text' name = 'Categoria'/>
		    		</label>
		    		
		    		<label>
		    		<p>Email</p>
		    			<input id='email' id='nombre' type='text' name = 'Email'/>
		    		</label>
		    	
		    		<label>
		    		<p>Clave</p>
		    			<input id='clave' type='password' name = 'Clave'/>
		    		</label>

		    		<label>
		    		<p>Telefono</p>
		    			<input id='telefono' type='text' name = 'Telefono'/>
		    		</label>

		    		<label>
		    		<p>URL</p>
		    			<input id='url' type='text' name = 'URL'/>
		    		</label>
		    		
		    		<label>
		    		<p>Departamento</p>
		    			<input id='departamento' type='text' name = 'Departamento'/>
		    		</label>

		    		</label>
		    		<p>Entidad</p>
		    			<input id='entidad' type='text' name = 'Entidad'/>
		    		</label>

		    		<label>
		    		<p>Centro</p>
		    			<input id='centro' type='text' name = 'Centro'/>
		    		</label>
		    	
		    		<label>
		    		<p>Direccion</p>
		    			<input id='direccion' type='textarea' name = 'Direccion'/>
		    		</label>
	
		    		    	
		    		<label>
		    		<p>Activo</p>
		    			<input type='checkbox' name = 'Activo'/>
		    		</label>
HTML;
					$imagen = isset($_SESSION['Imagen']) ? $_SESSION['Imagen'] : ''; 
echo<<<HTML
		    		<input type='hidden' name = 'Imagen' value='$imagen'/>


		    		

		    		<label>
		    		<p>
		    			<input type="submit" name="Anadir" value="Enviar"/>
		    		
		    			<input type="reset" />
		    		</p>
		    		</label>
			</form>
		</div>


		<div class ="subirfoto" id="form_foto">
	    <h1>Inserte aqui su foto</h1>
HTML;

		if($imagen == '' ){

echo<<<HTML

	     <form action="foto_post.php" enctype="multipart/form-data" method="post">
	         <label for="imagen"> <p>Imagen: </p> </label>
	         <input id="imagen" name="imagen" size="30" type="file" maxlength="150" />
	         <input type="submit" value ="Subir" name="Anadir"/>
	       </form>
HTML;
	     }
	     else
	     {

			echo "<img src = $imagen >";
	     }

echo<<<HTML
   		</div>






	</div>

	
HTML;

$_SESSION['Imagen'] =  '';

}


function AnadirProyecto()
{

 

if(!isset($_SESSION['user'])) 
{ 
 header("Location: index.php"); 
 exit; 
}

$creador = '';


if(isset($_SESSION['log']))
	$creador = $_SESSION['log'];


echo <<< HTML

	<div class = "contenido" id = "texto">

		<h1> Añadir un nuevo Proyecto </h1>

		<div class = "formulario" id="form_proyectos">
			<form action="compProyectos.php" method="post" onSubmit="return ValidarProyecto();"> 
				
					
					<input type="hidden" name = 'Creador' value='$creador'/>

					<p>Codigo</p>
		    			<input id='codigo' type='text' name='Codigo'/>	


					<p>Titulo</p>
		    			<input id='titulo' type='text' name='Titulo'/>
		    		
		    		
		    		
		    		<p>Descripcion</p>
		    			<textarea id='descripcion' cols = '20' rows = '5' name = 'Descripcion' placeholder='Descripcion...'/></textarea>
		    		
		    		
		    		<p>Fecha de Inicio</p>
		    			<input id='fechaini' type="date" name="Fecha_ini" min="2000-01-02"/>
		    		
		    		<p>Fecha de Fin</p>
		    			<input id='fechafin' type="date" name="Fecha_fin" min="2000-01-02"/>
		    		
		    		
		    		
		    		<p>Entidad</p>
		    			<input id='entidad' type='text' name = 'Entidad'/>
		    		
		    		
		    		    	
		    		<p>Cuantia</p>
		    			<input id='cuantia' type='text' name = 'Cuantia'/>

		    		<p>Investigador Principal (Miembro)</p>
HTML;
					//Mostramos los investigadores miembros
		    		$res = SelectMiembros();
		    		

		    		$email = "";
					if ($res)
					{
						if(mysqli_num_rows($res)>0)
						{			
							while ($tupla=mysqli_fetch_array($res))
							{
							

								$nombre = $tupla['Nombre'];
								$apellidos = $tupla['Apellidos'];
								$email = $tupla['Email'];
								$id = $tupla['Id'];


								$nombreCompleto = "$nombre"." "."$apellidos";
								
								//marcamos por defecto como principal al creador del proyecto
								

								if($email == $creador)
									echo "<p><input type='radio' name ='Nombre' value = '$id' checked/> $nombreCompleto </p>";
								else
									echo "<p><input type='radio' name ='Nombre' value = '$id' /> $nombreCompleto </p>";
						
							}
						}

					}


					echo "<p><input type='radio' name ='Nombre' value = 'Ninguno' /> No pertenece al grupo </p>";

		    			

echo <<< HTML
		    		<p>Investigador Principal (externo)</p>
		    			<input id='investigadorPrinpalExt' type='text' name = 'InvestigadorPrinpalExt'/>

 		
		    		<p>Investigadores colaboradores (miembros)</p>
HTML;
		    		$res = SelectMiembros();
		    		
					if ($res)
					{
						if(mysqli_num_rows($res)>0)
						{			
							while ($tupla=mysqli_fetch_array($res))
							{
								
						

								$nombre = $tupla['Nombre'];
								$apellidos = $tupla['Apellidos'];

								$id = $tupla['Id'];



								$nombreCompleto = "$nombre"." "."$apellidos";
								
					
								echo "<p><input type='checkbox' name ='nombres[]' value = '$id' /> $nombreCompleto </p>";


						
							}
						}

					}


echo <<< HTML

		    		<p>Investigadores colaboradores externos (Separados por Comas)</p>
		    			<input id='investigadoresColExt' type='text' name = 'InvestigadoresColExt'/>
		    	
		    		<p>URL</p>
		    			<input id='url' type='text' name = 'URL'/>
		    	
		    		

		    		<p>
		    			<input type="submit" name="Anadir" value="Enviar"/>
		    		
		    			<input type="reset" />
		    		</p>

			</form>
		</div>
	</div>
HTML;


}




//Funcion proyectos

function HTMLproyectos(){
echo <<< HTML
<div class = "contenido" id = "texto">


<h1> Proyectos registrados </h1>

HTML;


$res = SelectProyectos();



if ($res)
{
	if(mysqli_num_rows($res)>0)
	{
		
	
				while ($tupla=mysqli_fetch_array($res))
				{
					


					echo " <div class = Proyectos >";	
					
						echo "<ul>";
							echo "<li> Código: ".htmlspecialchars($tupla['Codigo'])."</li>";
							echo "<li> Titulo: ".htmlspecialchars($tupla['Titulo'])."</li>";
							echo "<li> Descripcion: ".htmlspecialchars($tupla['Descripcion'])."</li>";
							echo "<li> Fecha inicio: ".htmlspecialchars($tupla['Fecha_ini'])."</li>";
							echo "<li> Fecha fin: ".htmlspecialchars($tupla['Fecha_fin'])."</li>";
							echo "<li> Entidad: ".htmlspecialchars($tupla['Entidad'])."</li>";
							echo "<li> Cuantia: ".htmlspecialchars($tupla['Cuantia'])."</li>";
							
							//Si el investigador principal es miembro hacemos un enlace a la pagina miembros.
							
        					$resuser = SelectUser($tupla['Investigador_prinpal']);
        			

							if ($resuser) //seleccionamos el usuario con el id
							{
								if(mysqli_num_rows($resuser)==1)
								{
									
											
											
											while ($tupla2=mysqli_fetch_array($resuser))
											{
												$nombre = $tupla2['Nombre'];
												$apellidos = $tupla2['Apellidos'];
												$email = $tupla2['Email'];
												echo "<li> Investigador Principal: <a href='index.php?p=Miembros'> ".htmlspecialchars($nombre)		." ".
																													 htmlspecialchars($apellidos)	." ".
												"</a></li>";
											}
								}
								else
								{
									if(is_numeric($tupla['Investigador_prinpal']))
									{
										echo "<li> Investigador Principal: Antiguo miembro</li>";
									}
									else
									{
										echo "<li> Investigador Principal: ".htmlspecialchars($tupla['Investigador_prinpal'])."</li>";
									}
								}
							}
				




							echo "<li> Investigadores colaboradores: " ;


							ImprimeAutores($tupla['Investigadores_col']);
						
							
							echo "</li>";

							echo "<li> URL: ".htmlspecialchars($tupla['URL'])."</li>";
							$codigo = $tupla['Codigo'];
							$val = "Modificar".$codigo;
							


							$resPubli = SelectPublicacionesByIDproy($codigo);
							if ($resPubli)
							{
								if(mysqli_num_rows($resPubli)>0)
								{
									
									while ($tupla3=mysqli_fetch_array($resPubli))
									{
										echo " <div class = Publicaciones >";	
									
											echo "<ul>";

											echo "<li>".
														htmlspecialchars($tupla3['Tipo'])				.": ".
														htmlspecialchars($tupla3['Titulo'])				.", ".
														htmlspecialchars($tupla3['Fecha'])				."";


											ImprimeAutores($tupla3['Autores']);
										
											$idPubli = $tupla3['DOI'];
											$tipo = $tupla3['Tipo'];


										if ((strcasecmp($tipo,"Articulo")) == 0)
										{
											
											$resTipo = SelectArticulo($idPubli); 

											if(mysqli_num_rows($resTipo)>0)
											{
												
												while ($tupla3=mysqli_fetch_array($resTipo))
												{
													
														echo " ".htmlspecialchars($tupla3['Nombre_revista'])."";
														echo ", ".htmlspecialchars($tupla3['Volumen'])."";
														echo ", ".htmlspecialchars($tupla3['Paginas'])."";

												}	
											}
										}
										else if ((strcasecmp($tipo,"Libro")) == 0)
										{

											$resTipo = SelectLibro($idPubli);

											if(mysqli_num_rows($resTipo)>0)
											{
												
												 

												while ($tupla3=mysqli_fetch_array($resTipo))
												{
													

														echo " ".htmlspecialchars($tupla3['Editorial'])."";
														echo ", ".htmlspecialchars($tupla3['Editor'])."";
														echo ", ".htmlspecialchars($tupla3['ISBN'])."";
														


												}	
											}
										}
										else if ((strcasecmp($tipo,"Capitulo")) == 0)
										{

											$resTipo = SelectCapitulo($idPubli); 

											if(mysqli_num_rows($resTipo)>0)
											{
												
												
												while ($tupla3=mysqli_fetch_array($resTipo))
												{
												

														echo " ".htmlspecialchars($tupla3['Titulo'])."";
														echo ", ".htmlspecialchars($tupla3['Editorial'])."";
														echo ", ".htmlspecialchars($tupla3['Editor'])."";
														echo ", ".htmlspecialchars($tupla3['ISBN'])."";
														echo ", ".htmlspecialchars($tupla3['Paginas'])."";
												
												}	
											}
										}
										else if ((strcasecmp($tipo,"Conferencia")) == 0)
										{
											$resTipo = SelectConferencia($idPubli); 

											if(mysqli_num_rows($resTipo)>0)
											{
												
												while ($tupla3=mysqli_fetch_array($resTipo))
												{
												

														echo " ".htmlspecialchars($tupla3['Nombre'])."";
														echo ", ".htmlspecialchars($tupla3['Lugar'])."";
														echo ", ".htmlspecialchars($tupla3['Resenia'])."";
						


												}	
											}
										}

											echo "</li></ul>";

										echo"</div>";
											
									}	
								}
							}
		
							$id_miembro = '';


							if(isset($_SESSION['log']))
							{
								$id_miembro = $_SESSION['log'];
							
								$id_proyect = substr("$val",9);

								$id_investigador = $email;




								$resUser = SelectUserByEmail($id_miembro);//pasamos el email del miembro para obtener su id.

								if ($resUser) //seleccionamos el usuario con el id
								{
									if(mysqli_num_rows($resUser)==1)
									{
										
												
												
												while ($tupla2=mysqli_fetch_array($resUser))
												{
													$idUser = $tupla2['Id'];
												}
									}
									
								}

								
								$investigadores = explode(', ', $tupla['Investigadores_col']); //divide la cadena en Investigadores

								$es_colaborador = 0;

								foreach($investigadores as $investigadores => $value)
								{
									if($idUser == $value)
										$es_colaborador = 1;
								}
							
								
		 
								if((strcasecmp($id_miembro, $id_investigador) == 0 ) || isset($_SESSION['Admin']) || $es_colaborador == 1 ) //si el usuario logueado es investigador principal del proyecto
								{																				//o es el adminstrador o es un colaborador del proyecto
																												//Puede añadir una publicacion
									echo"<form action='AnadirPublicacion.php' method='post'>";
									echo"<input type='hidden' name = 'proyect' value='$id_proyect'/>";
									echo"<input type='hidden' name = 'miembro' value='$idUser'/>";
		    						echo"<input type='submit' name = 'Anadir' value='Crear Publicacion'  />";
		    						echo"</form>";
								
		    					}
								

								if( (strcasecmp($id_miembro, $id_investigador) == 0 ) || isset($_SESSION['Admin'])) //si el usuario logueado es investigador principal del proyecto
								{																				//o es el adminstrador puede modificar

									
		    						echo"<form action='modificarProyecto.php' method='post'>";
									echo"<input type='hidden' name = 'id_proyect' value='$id_proyect'/>";
									echo"<input type='hidden' name = 'id_miembro' value='$idUser'/>";
									echo"<input type='hidden' name = 'id_investigador' value='$id_investigador'/>";
		    						echo"<input type='submit' name = 'Modificar' value='Modificar Proyecto'  />";
		    						echo"</form>";
		    						
								}

								if(isset($_SESSION['Admin']))							//si es el administrador puede borrar el proyecto.
								{
								
									echo"<form action='compProyectos.php' method='post'>";
									echo"<input type='hidden' name = 'id_proyect' value='$id_proyect'/>";
		    						echo"<input type='submit' name ='Borrar' value='Borrar Proyecto'  />";
		    						echo"</form>";
								}
							
							}
						echo "</ul>";

					echo"</div>";
			
				}
			
			
		

	}
	else 
	{
		echo "<p>No hay resultados para la consulta</p>";
		mysqli_free_result($res);
	}
}
else
{
	echo "<p>Error en la consulta</p>";
  	echo "<p>Código: ".mysqli_errno()."</p>";
  	echo "<p>Mensaje: ".mysqli_error()."</p>";
  
}


echo <<< HTML
</div>	
HTML;

	


	
}




function backup()
{

if(!isset($_SESSION['Admin'])) 
{ 
 header("Location: index.php"); 
 exit; 
}

echo <<< HTML
	<div class = "contenido" id = "texto">

	<h1> Backup </h1>

	<form action='backup.php' method='post'>

	<input type='submit' name = 'Backup' value='Realizar Backup'  />
	</form>

<!--
	  	<form action="" enctype="multipart/form-data" method="post">
         <label for="fichero"> <p>Archivo de respaldo: </p> </label>
         <input id="fichero" name="fichero" size="30" type="file" maxlength="150" />
         <input type="submit" value ="Subir" name="Subir"/>
       </form>
-->
	</div>	
HTML;

}
*/



function footer()
{
echo <<< HTML

<div class=footer>
    <div class="form-row">
        <div class="form-group ">
           <img src="imagenes/w3caa.png" width="102" height="35">
        </div>
        <div class="form-group col-md-2">
           <img src="imagenes/cc.png" width="102" height="35">
      </div>
      <div class="version">
        <h5>v2.1</h5>
      </div>
  </div>



HTML;
}


?>