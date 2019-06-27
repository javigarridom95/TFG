<?php // Fichero 

DEFINE('DB_HOST','localhost'); 
DEFINE('DB_USER','root'); 
DEFINE('DB_PASSWD','root'); 
DEFINE('DB_DATABASE','vivable');



/*

DEFINE('DB_HOST','ddm.es'); 
DEFINE('DB_USER','ddm_userhabita'); 
DEFINE('DB_PASSWD','asdf55j.-8*5'); 
DEFINE('DB_DATABASE','ddm_habitable2018');
*/
function Conect()
{

	$db  = mysqli_connect(DB_HOST,DB_USER,DB_PASSWD,DB_DATABASE);
	mysqli_set_charset($db,'utf8');
	
	return $db;


}


function Disconect($db)
{
 	mysqli_close($db);
}





function Login($datos)
{
	$db=Conect();

	$User_name = $datos['User_name'] ;
	$clave = $datos['Clave'] ;


	$clave = md5($clave);


	$sql = mysqli_query($db,"SELECT User_name FROM usuario WHERE User_name = '$User_name' and Clave = '$clave' ");
   
    if($sql)
    {
	   return $sql;
	}
	else
	{
		return 0;
	}

	Disconect($db);

}


function SelectIdUser($user)
{
	$db=Conect();
	
	$res = mysqli_query($db, "SELECT Id FROM usuario WHERE User_name = '$user' ");


	if ($res)
	{
		if(mysqli_num_rows($res)>0)
		{			
			while ($tupla=mysqli_fetch_array($res))
			{
				$id = $tupla['Id'];
								
			}
		}

	}

	

	Disconect($db);

	if($res)
		return $id;//echo "Publicado Correctamente";
	else
		return NULL; //echo "Error al publicar";



}



function RegistrarUser($datos)
{
		

	$db=Conect();
	
	$user = $datos['User_name'] ;
	$email = $datos['Email'] ;
	$clave = $datos['Clave'] ;


	$datos['Clave'] = md5($clave);



	$res = mysqli_query($db, "SELECT Email FROM usuario WHERE Email = '$email' or User_name = '$user' ");


	if ($res)
	{
		if(mysqli_num_rows($res)>0)
		{
			echo "El usuario ya existe";
		}

		else
		{
			$insertar_user = mysqli_query($db,"INSERT INTO usuario (User_name, Email, Clave)
					VALUES ('" .
							mysqli_real_escape_string($db,$datos['User_name'])	. "' , '" .
							mysqli_real_escape_string($db,$datos['Email'])		. "' , '" .
							mysqli_real_escape_string($db,$datos['Clave'])		."') 
			");
			if ($insertar_user) {
				echo "Registrado";
			}
			else
				echo "Error en el registro";
		}
	}
	else
	{
		"Error al comprobar la base de datos";
	}

	Disconect($db);

	return $insertar_user;

}


function InsertarSolicitante($solicitante)
{

	$db=Conect();
	$cp = $solicitante['CP'];
	$municipio = $solicitante['Municipio'];
	$provincia = $solicitante['Provincia'];
	$nombreapellidos = $solicitante['NombreApellidos'];
	$telefono = $solicitante['Telefono'];
	$mail = $solicitante['Mail'];
	$dni = $solicitante['Dni'];
	$calle = $solicitante['Calle'];
	$numero = $solicitante['Numero'];
	$puerta = $solicitante['Puerta'];
	$planta = $solicitante['Planta'];

	$insert = mysqli_query($db,"INSERT INTO persona (Nombre_Apellidos,Telefono,Email,DNI,Calle,Numero,Puerta,Planta,Codigo_Postal,Municipio,Provincia) VALUES ('$nombreapellidos','$telefono','$mail','$dni','$calle','$numero','$puerta','$planta','$cp','$municipio','$provincia') ");

	
	$res =  mysqli_query($db, "SELECT Id FROM persona WHERE DNI = '$dni' ");


	if ($res)
	{
		if(mysqli_num_rows($res)>0)
		{			
			while ($tupla=mysqli_fetch_array($res))
			{
				$id = $tupla['Id'];
								
			}
		}

	}

	Disconect($db);

	if($insert)
		return $id;//echo "Publicado Correctamente";
	else
		return NULL; //echo "Error al publicar";

}


function InsertarRepresentante($representante)
{

	$db=Conect();
	$cp = $representante['CP_representante'];
	$municipio = $representante['Municipio_representante'];
	$provincia = $representante['Provincia_representante'];
	$nombreapellidos = $representante['NombreApellidos_representante'];
	$telefono = $representante['Telefono_representante'];
	$mail = $representante['Mail_representante'];
	$dni = $representante['Dni_representante'];
	$calle = $representante['Calle_representante'];
	$numero = $representante['Numero_representante'];
	$puerta = $representante['Puerta_representante'];
	$planta = $representante['Planta_representante'];
	$notificaciones = $representante['Notificaciones'];
	$calidad = $representante['Calidad_de'];

	$insert = mysqli_query($db,"INSERT INTO representante (Nombre_Apellidos,Telefono,Email,DNI,Calle,Numero,Puerta,Planta,Codigo_Postal,Municipio,Provincia,Notificaciones,Actua_en_calidad_de) VALUES ('$nombreapellidos','$telefono','$mail','$dni','$calle','$numero','$puerta','$planta','$cp','$municipio','$provincia','$notificaciones','$calidad') ");

	$res =  mysqli_query($db, "SELECT Id FROM representante WHERE DNI = '$dni' ");

	if ($res)
	{
		if(mysqli_num_rows($res)>0)
		{			
			while ($tupla=mysqli_fetch_array($res))
			{
				$id = $tupla['Id'];
								
			}
		}
	}

	

	Disconect($db);

	if($insert)
		return $id;//echo "Publicado Correctamente";
	else
		return NULL; //echo "Error al publicar";
}


function InsertarEdificioPrivado($edificio_privado,$code){

	$db=Conect();

	$codigo = $code;

	$hombres_ayuda = $edificio_privado['Hombres_ayuda'];
	$mujeres_ayuda = $edificio_privado['Mujeres_ayuda'];
	$hombres_ayuda_aveces = $edificio_privado['Hombres_ayuda_aveces'];
	$mujeres_ayuda_aveces = $edificio_privado['Mujeres_ayuda_aveces'];
	$hombres_ayuda_siempre = $edificio_privado['Hombres_ayuda_siempre'];
	$mujeres_ayuda_siempre = $edificio_privado['Mujeres_ayuda_siempre'];
	$hombres_ayuda_privada = $edificio_privado['Hombres_ayuda_entidad_privada'];
	$hombres_ayuda_publica = $edificio_privado['Hombres_ayuda_entidad_publica'];
	$mujeres_ayuda_privada = $edificio_privado['Mujeres_ayuda_entidad_privada'];
	$mujeres_ayuda_publica = $edificio_privado['Mujeres_ayuda_entidad_publica'];
	$hombres_ayuda_familiar = $edificio_privado['Hombres_ayuda_familiar'];
	$mujeres_ayuda_familiar = $edificio_privado['Mujeres_ayuda_familiar'];
	$mujeres_desplazamiento_aveces = $edificio_privado['Mujeres_desplazamiento_aveces'];
	$mujeres_desplazamiento_siempre = $edificio_privado['Mujeres_desplazamiento_siempre'];
	$hombres_desplazamiento_aveces = $edificio_privado['Hombres_desplazamiento_aveces'];
	$hombres_desplazamiento_siempre = $edificio_privado['Hombres_desplazamiento_siempre'];
	$mujeres_tiempo_ayuda = $edificio_privado['Mujeres_tiempo_ayuda'];
	$hombres_tiempo_ayuda = $edificio_privado['Hombres_tiempo_ayuda'];


	echo"$codigo <br>";
		foreach ($edificio_privado as $key => $value) {
		echo"$key: $value<br>";
	}


	$insert = mysqli_query($db,"INSERT INTO `ed_privado` (`Codigo_solicitud`, `Hombres_ayuda`, `Mujeres_ayuda`, `Hombres_ayuda_aveces`, `Mujeres_ayuda_aveces`, `Hombres_ayuda_siempre`, `Mujeres_ayuda_siempre`, `Hombres_ayuda_entidad_privada`, `Hombres_ayuda_entidad_publica`, `Mujeres_ayuda_entidad_privada`, `Mujeres_ayuda_entidad_publica`) VALUES ('$codigo', '$hombres_ayuda', '$mujeres_ayuda', '$hombres_ayuda_aveces', '$mujeres_ayuda_aveces', '$hombres_ayuda_siempre', '$mujeres_ayuda_siempre', '$hombres_ayuda_privada', '$hombres_ayuda_publica', '$mujeres_ayuda_privada', '$mujeres_ayuda_publica')");


	$update =  mysqli_query($db,"UPDATE ed_privado SET Hombres_ayuda_familiar = '$hombres_ayuda_familiar',
													Mujeres_ayuda_familiar = '$mujeres_ayuda_familiar', 
													Mujeres_desplazamiento_aveces = '$mujeres_desplazamiento_aveces',
													Mujeres_desplazamiento_siempre = '$mujeres_desplazamiento_siempre',
													Hombres_desplazamiento_aveces = '$hombres_desplazamiento_aveces',
													Hombres_desplazamiento_siempre = '$hombres_desplazamiento_siempre',
													Mujeres_tiempo_ayuda = '$mujeres_tiempo_ayuda',
													Hombres_tiempo_ayuda = '$hombres_tiempo_ayuda'
													WHERE Codigo_solicitud = '$codigo' ");



	$correcto = NULL;

	if($insert)
		$correcto = $codigo;//echo "Publicado Correctamente";
	

	Disconect($db);

	return $correcto;

}


function InsertarEdificioPublico($edificio_publico,$code){

$db=Conect();

$codigo = $code;
$ingresos = $edificio_publico['Ingresos'];
$gastos = $edificio_publico['Gastos'];
$estabilidad = $edificio_publico['Estabilidad'];
$rentabilidad = $edificio_publico['Rentabilidad_economica'];
$cultural = $edificio_publico['Cultural'];
$posibilidad = $edificio_publico['Posibilidad_financiacion'];


echo"$codigo <br>";
foreach ($edificio_publico as $key => $value) {
		echo"$key: $value<br>";
	}



$insert = mysqli_query($db,"INSERT INTO ed_publico (Codigo_solicitud, Ingresos, Gastos, Estabilidad, Rentabilidad, Cultural, Financiacion_externa) VALUES ('$codigo','$ingresos','$gastos','$estabilidad','$rentabilidad','$cultural','$posibilidad') ");

/*
$insert = mysqli_query($db,"INSERT INTO `ed_publico` (`Codigo_solicitud`, `Tenencia`, `Ingresos`, `Gastos`, `Estabilidad`, `Rentabilidad`, `Cultural`, `Financiacion_externa`) VALUES ('$codigo', '0', '0', '0', '0', '0', '0', '0') ");
*/

$correcto = NULL;

if($insert)
$correcto = $codigo;

Disconect($db);

return $correcto;

}

function InsertarEdificioB($edificio,$codigo)
{
	$db=Conect();

	foreach ($edificio as $key => $value) {
		echo"$key: $value<br>";
	}


	foreach ($edificio as $key) {
		if($edificio['$key'] == '')
			$edificio['$key'] = NULL;
	}

	$personas = $edificio['Personas_usuarias'];
	$num_mujeres = $edificio['Numero_mujeres'];
	$num_hombres = $edificio['Numero_hombres'];
	$mujeres_mayores = $edificio['Mujeres_mayores'];
	$hombres_mayores = $edificio['Hombres_mayores'];
	$mujeres_ruedas = $edificio['Mujeres_silla_ruedas'];
	$mujeres_audicion = $edificio['Mujeres_audicion'];
	$mujeres_intelectuales = $edificio['Mujeres_intelectuales'];
	$mujeres_movilidad = $edificio['Mujeres_movilidad'];
	$mujeres_vision = $edificio['Mujeres_vision'];
	$hombres_vision = $edificio['Hombres_vision'];
	$hombres_intelectuales = $edificio['Hombres_intelectuales'];
	$hombres_movilidad = $edificio['Hombres_movilidad'];
	$hombres_ruedas = $edificio['Hombres_silla_ruedas'];
	$hombres_audicion = $edificio['Hombres_audicion'];
	$niñas_ruedas = $edificio['Niñas_silla_ruedas'];
	$niñas_audicion = $edificio['Niñas_audicion'];
	$niñas_comprension = $edificio['Niñas_comprension'];
	$niñas_movilidad = $edificio['Niñas_movilidad'];
	$niñas_vision = $edificio['Niñas_vision'];
	$niños_vision = $edificio['Niños_vision'];
	$niños_comprension = $edificio['Niños_comprension'];
	$niños_movilidad = $edificio['Niños_movilidad'];
	$niños_ruedas = $edificio['Niños_silla_ruedas'];
	$niños_audicion = $edificio['Niños_audicion'];


	$update1 =  mysqli_query($db,"UPDATE edificio SET Personas_usuarias = '$personas',
													Personas_usuarias_femeninas = '$num_mujeres', 
													Personas_usuarias_masculinas = '$num_hombres',
													Mujeres_mayores = '$mujeres_mayores',
													Hombres_mayores = '$hombres_mayores',
													Mujeres_silla_ruedas = '$mujeres_ruedas',
													Hombres_silla_ruedas = '$hombres_ruedas',
													Mujeres_vision = '$mujeres_vision',
													Hombres_vision = '$hombres_vision'
													WHERE Codigo_solicitud = '$codigo' ");

	$update2 =  mysqli_query($db,"UPDATE edificio SET Mujeres_intelectual = '$mujeres_intelectuales',
													Hombres_intelectual = '$hombres_intelectuales',
													Mujeres_audicion = '$mujeres_audicion',
													Hombres_audicion = '$hombres_audicion',
													Mujeres_movilidad = '$mujeres_movilidad',
													Hombres_movilidad = '$hombres_movilidad',
													Ninas_silla_ruedas = '$niñas_ruedas',
													Ninos_silla_ruedas = '$niños_ruedas'
													WHERE Codigo_solicitud = '$codigo' ");

	$update3 = mysqli_query($db,"UPDATE edificio SET Ninas_audicion = '$niñas_audicion',
													Ninos_audicion = '$niños_audicion',
													Ninas_compresion = '$niñas_comprension',
													Ninos_compresion = '$niños_comprension',
													Ninas_vision = '$niñas_vision',
													Ninos_vision = '$niños_vision',
													Ninas_movilidad = '$niñas_movilidad',
													Ninos_movilidad = '$niños_movilidad'
													WHERE Codigo_solicitud = '$codigo' ");


	$correcto = NULL;

	if($update1 && $update2 && $update3)
		$correcto = $codigo;//echo "Publicado Correctamente";
	


	Disconect($db);

	return $correcto;

}


function InsertarEdificioD($edificio,$codigo)
{
	$db=Conect();

	$ascensor_vivienda = $edificio['Ascensor_vivienda'];
	$portal_ascensor = $edificio['Portal_ascensor'];
	$ascensor_comunitario = $edificio['Ascensor_comunitario'];
	$ascensor_comunitario_problemas = $edificio['Ascensor_comunitario_problemas'];
	$otros_lugares = $edificio['Otros_lugares'];
	$vestibulo_comunitario = $edificio['Vestibulo_comunitario'];
	$vestibulo_escalera = $edificio['Vestibulo_escalera'];
	$escalera_comunitaria = $edificio['Escalera_comunitaria'];
	$acceso_exterior = $edificio['Acceso_exterior'];
	$ascensor_garaje = $edificio['Ascensor_garaje'];
	$aparcamiento = $edificio['Aparcamiento'];
	$acceso_exterior_garaje = $edificio['Acceso_exterior_garaje'];
	$ascensor_garaje_problemas = $edificio['Ascensor_garaje_problemas'];
	$vestibulo_aparcamiento = $edificio['Vestibulo_aparcamiento'];
	$escalera_garaje = $edificio['Escalera_garaje'];
	$vestibulo_garaje = $edificio['Vestibulo_garaje'];
	$zona_juegos = $edificio['Zona_juegos'];
	$acceso_vestuarios = $edificio['Acceso_vestuarios'];
	$recorrido_zona_juegos = $edificio['Recorrido_zona_juegos'];
	$vestuarios_exterior = $edificio['Vestuarios_exterior'];
	$acceso_exterior_2 = $edificio['Acceso_exterior2'];
	$acceso_piscina = $edificio['Acceso_piscina'];
	$piscina_exterior = $edificio['Piscina_exterior'];






	$update1 = mysqli_query($db,"UPDATE edificio SET	Ascensor_vivienda_comunitario = '$ascensor_vivienda',
													Portal_ascensor_comunitario = '$portal_ascensor',
													Ascensor_comunitario = '$ascensor_comunitario',
													Problemas_ascensor_comunitar = '$ascensor_comunitario_problemas',
													Otros_lugares = '$otros_lugares',
													Vestibulo = '$vestibulo_comunitario'
													 WHERE Codigo_solicitud = '$codigo' ");


	$update2 = mysqli_query($db,"UPDATE edificio SET Vestibulo_escalera = '$vestibulo_escalera',
													Escalera_comunitaria = '$escalera_comunitaria',
													Acceso_exterior = '$acceso_exterior',
													Ascensor_garaje = '$ascensor_garaje',
													Aparcamiento = '$aparcamiento',
													Acceso_exterior_garaje = '$acceso_exterior_garaje',
													Problemas_ascensor_garaje = '$ascensor_garaje_problemas',
													Vestibulo_aparcamiento = '$vestibulo_aparcamiento',
													Escalera_garaje = '$escalera_garaje',
													Vestibulo_garaje = '$vestibulo_garaje',
													Zona_juegos = '$zona_juegos'
													WHERE Codigo_solicitud = '$codigo' ");

	$update3 = mysqli_query($db,"UPDATE edificio SET Acceso_vestuarios_exterior = '$acceso_vestuarios',
													Acceso_zona_juegos = '$recorrido_zona_juegos',
													Vestuarios_exterior = '$vestuarios_exterior',
													Edificio_exterior = '$acceso_exterior_2',
													Acceso_piscina_exterior = '$acceso_piscina',
													Piscina_exterior = '$piscina_exterior'
													
													WHERE Codigo_solicitud = '$codigo' ");
	


	$correcto = NULL;

	if($update1 && $update2 && $update3)
		$correcto = $codigo;//echo "Publicado Correctamente";
	


	Disconect($db);

	return $correcto;

}



function InsertarEdificio($edificio)
{

	$db=Conect();
	
	$direccion = $edificio['Direccion_edificio'];
	$catastral = $edificio['Ref_catastral'];
	$provincia = $edificio['Provincia_edificio'];
	$numero = $edificio['Numero_edificio'];
	$localidad = $edificio['Localidad_edificio'];
	$planta = $edificio['Planta_edificio'];
	$municipio = $edificio['Municipio_edificio'];
	$puerta = $edificio['Puerta_edificio'];
	$codigo_postal = $edificio['Codigo_edificio'];

	if($edificio['Latitud'] == '')
		$latitud = NULL;
	else
		$latitud = $edificio['Latitud'];

	if ($edificio['Longitud'] == '')
		$longitud = NULL;
	else
		$longitud = $edificio['Longitud'];

	$tenencia = $edificio['Tenencia'];


	foreach ($edificio as $key => $value) {
		echo"$key: $value<br>";
	}


	$d = $direccion;
	$n = $numero;


	$res = mysqli_query($db, "SELECT * FROM edificio WHERE Direccion = '$d' and Numero = '$n' and Codigo_postal = '$codigo_postal' ");

	$i = 1;



	if ($res)
	{
		if(mysqli_num_rows($res)>0)
		{			
			while ($tupla=mysqli_fetch_array($res))
			{
				$i++;							
			}
		}

	}

	$codigo = "".$d."_".$n."_".$i."";


	echo "$codigo<br>";
	echo "$catastral<br>";




	$insert = mysqli_query($db,"INSERT INTO `edificio` (`Codigo_solicitud`, `Direccion`, `Ref_catastral`, `Provincia`, `Numero`, `Localidad`, `Planta`, `Municipio`, `Puerta`, `Codigo_postal`, `Tenencia`, `Latitud`, `Longitud`) VALUES ('$codigo', '$direccion', '$catastral', '$provincia', '$numero', '$localidad', '$planta', '$municipio', '$puerta', '$codigo_postal', '$tenencia', '$latitud', '$longitud') ");





	/*

	$insert = mysqli_query($db,"INSERT INTO edificio (Codigo_solicitud,Direccion, Ref_catastral, Provincia, Numero, Localidad, Planta, Municipio, Puerta, Codigo_postal, Tenencia, Personas_usuarias, Personas_usuarias_femeninas, Personas_usuarias_masculinas, Mujeres_mayores , Hombres_mayores, Mujeres_silla_ruedas, Hombres_silla_ruedas, Mujeres_vision, Hombres_vision, Mujeres_intelectual, Hombres_intelectual, Mujeres_audicion, Hombres_audicion, Mujeres_movilidad, Hombres_movilidad, Niñas_silla_ruedas, Niños_silla_ruedas, Niñas_audicion, Niños_audicion, Niñas_compresion, Niños_compresion, Niñas_vision, Niños_vision, Niñas_movilidad, Niños_movilidad, Ingresos, Gastos, Estabilidad, Rentabilidad, Cultural, Financiacion_externa, Ascensor_vivienda_comunitario, Portal_ascensor_comunitario , Ascensor_comunitario, Problemas_ascensor_comunitar, Otros_lugares, Vestibulo, Vestibulo_escalera, Escalera_comunitaria, Acceso_exterior, Ascensor_garaje, Aparcamiento, Acceso_exterior_garaje, Problemas_ascensor_garaje, Vestibulo_aparcamiento, Escalera_garaje, Vestibulo_garaje, Zona_juegos, Acceso_vestuarios_exterior, Acceso_zona_juegos, Vestuarios_exterior, Edificio_exterior, Acceso_piscina_exterior, Piscina_exterior, Pasillo, Escalera_interior, Rampa_interior, Cocina, Atencion_info, Baño, Piscina_interior, Vestuario, Almacen, Estancia) 
								VALUES ('$codigo','$direccion','$catastral','$provincia','$numero','$localidad','$planta','$municipio','$puerta','$codigo','$tenencia','$personas','$num_mujeres', '$num_hombres', '$mujeres_mayores','$hombres_mayores', '$mujeres_ruedas','$hombres_ruedas','$mujeres_vision','$hombres_vision','$mujeres_intelectuales','$hombres_intelectuales','$mujeres_audicion','$hombres_audicion','$mujeres_movilidad','$hombres_movilidad','$niñas_ruedas','$niños_ruedas','$niñas_audicion','$niños_audicion','$niñas_comprension','$niños_comprension','$niñas_vision','$niños_vision','$niñas_movilidad','$niños_movilidad','$ingresos','$gastos','$estabilidad','$rentabilidad','$cultural','$posibilidad','$ascensor_vivienda','$portal_ascensor','$ascensor_comunitario','$ascensor_comunitario_problemas','$otros_lugares','$vestibulo_comunitario','$vestibulo_escalera','$escalera_comunitaria','$acceso_exterior','$ascensor_garaje','$aparcamiento','$acceso_exterior_garaje','$ascensor_garaje_problemas','$vestibulo_aparcamiento','$escalera_garaje','$vestibulo_garaje','$zona_juegos','$acceso_vestuarios','$recorrido_zona_juegos','$vestuarios_exterior','$acceso_exterior_2','$acceso_piscina','$piscina_exterior','$pasillo','$escalera_interior','$rampa_interior','$cocina','$atencion_cliente','$baño','$piscina_interior','$vestuarios','$almacen','$estancia') ");


	*/
	$correcto = NULL;

	if($insert)
		$correcto = $codigo;//echo "Publicado Correctamente";
	


	Disconect($db);

	return $correcto;

}


function InsertarDuda($dudas)
{

	$db=Conect();
	$nombre = $dudas['name'];
	$correo = $dudas['email'];
	$mensaje = $dudas['message'];
	$insert = mysqli_query($db,"INSERT INTO contacto (Nombre, Correo, Mensaje) VALUES('$nombre','$correo','$mensaje')");


	if($insert)
			echo "Publicado Correctamente";
		else
			echo "Error al publicar";


	Disconect($db);

}

function InsertarValoracion($idAlternativa,$criterio,$valoracion,$observaciones){

	$db=Conect();

	$insert = mysqli_query($db,"INSERT INTO valoracion (Id_alternativa, Criterio, valor_valoracion, observaciones) VALUES('$idAlternativa','$criterio','$valoracion','$observaciones')");

	Disconect($db);
}

function NuevaSolicitud($solicitud, $solicitante,$representante, $usuario, $tipo){

	$db=Conect();

	echo"solicitud: $solicitud<br> usuario: $usuario<br> solicitante: $solicitante<br>representante: $representante<br> Tipo_solicitud: $tipo<br>";
/*

INSERT INTO `solicitud` (`Codigo_solicitud`, `Id_usuario`, `Id_persona`, `Id_representante`, `Id_pdf`, `Tipo_solicitud`) VALUES ('asdfasdf_3_1', '1', '1', NULL, NULL, '1');
*/
	if($solicitante && $representante){
		$insert = mysqli_query($db,"INSERT INTO `solicitud` (`Codigo_solicitud`, `Id_usuario`, `Id_persona`, `Id_representante`, `Id_pdf`, `Tipo_solicitud`) VALUES ('$solicitud','$usuario','$solicitante','$representante',null,'$tipo')");
	}
	else if($solicitante){
		$insert = mysqli_query($db,"INSERT INTO `solicitud` (`Codigo_solicitud`, `Id_usuario`, `Id_persona`, `Id_representante`, `Id_pdf`, `Tipo_solicitud`) VALUES ('$solicitud','$usuario','$solicitante',NULL,NULL,'$tipo')");
	}
	
	if($insert)
		return $solicitud;
	else
		return NULL;

	Disconect($db);
}

function InsertarPlanos($solicitud, $ruta){

	$db=Conect();

	$insert = mysqli_query($db,"INSERT INTO planos (Codigo_solicitud, Ruta_planos) VALUES('$solicitud','$ruta')");

	Disconect($db);
}

function SelectPlanos($solicitud)
{
	$db = Conect();
	
	$res = mysqli_query($db, "SELECT * FROM planos WHERE Codigo_solicitud = '$solicitud' ");

	Disconect($db);


	return $res;//echo "Publicado Correctamente";

}


function BorrarPlanos($id)
{
	$db = Conect();

	$res = mysqli_query($db, "DELETE FROM planos WHERE Codigo_planos = '$id' ");
	/*
	if($res)
		echo "Borrado Correctamente";
	else
		echo "Error al Borrar";
*/
	Disconect($db);
	return $res;
}

function CrearDiagnostico($solicitud,$Tipo_solicitud){

	$db=Conect();


	$select = mysqli_query($db, "SELECT * FROM diagnostico WHERE Codigo_solicitud = '$solicitud' "); //si existe la solicitud no se introduce

	if($select)
		if(mysqli_num_rows($select)>0)
		{
			
			return $select;

		}
	else
	{
		$insert = mysqli_query($db,"INSERT INTO diagnostico (Codigo_solicitud, Tipo_solicitud) VALUES('$solicitud','$Tipo_solicitud')");
		$res = mysqli_query($db, "SELECT * FROM diagnostico WHERE Codigo_solicitud = '$solicitud' ");

		return $res;
	
	}
	
	Disconect($db);
}

function SelectFichasDiagnostico($id){

	$db=Conect();

	$select = mysqli_query($db, "SELECT * FROM diagnostico_ficha WHERE Id_diagnostico = '$id' "); 
	
	Disconect($db);

	return $select;
}

function BorrarFichas($id)
{
	$db = Conect();

	$res = mysqli_query($db, "DELETE FROM diagnostico_ficha WHERE Id_ficha = '$id' ");
	/*
	if($res)
		echo "Borrado Correctamente";
	else
		echo "Error al Borrar";
*/
	Disconect($db);
	return $res;
}

function SelectFichaByCodigo($codigo,$tipo)
{

	$db=Conect();

	$res = mysqli_query($db, "SELECT * FROM ficha WHERE Codigo_componente = '$codigo' AND Tipo_solicitud = '$tipo' "); 

	if($res)
		return $res;//echo "Publicado Correctamente";
	else
		return 0; //echo "Error al publicar";

}


function SelectFichaById($id)
{

	$db=Conect();


	$res = mysqli_query($db, "SELECT * FROM ficha WHERE Id = '$id' "); 

	if($res)
		return $res;//echo "Publicado Correctamente";
	else
		return 0; //echo "Error al publicar";

}

function ActualizaFichasDiagnostico($id_ficha,$dxt,$mov,$au,$vi,$comentario){

	$db=Conect();

	//echo"$dxt<br>";
	

	$update = mysqli_query($db,"UPDATE diagnostico_ficha SET Porcentaje_general = '$dxt', 
															 Porcentaje_mov = '$mov', 
															 Porcentaje_au = '$au', 
															 Porcentaje_vi = '$vi',
															 Comentario = '$comentario'
															 WHERE Id_ficha = '$id_ficha'  " );
	
	

	Disconect($db);
}


function IntroducirSolucion($codigo,$idAlternativa,$tipo){

	$db=Conect();

	$select = mysqli_query($db,"SELECT * FROM solucion WHERE Codigo = '$codigo' AND Tipo_solicitud = '$tipo' ");

	if ($select){
      if(mysqli_num_rows($select)>0){
        while ($tupla=mysqli_fetch_array($select)){
          $code = $tupla['Codigo'];
          $titulo = $tupla['Titulo'];
          $unidad = $tupla['Unidad'];
          $precio = $tupla['Precio'];
          echo"codigo: $code<br>";
          echo"unidad: $unidad<br>";
          echo"precio: $precio<br>";
          echo"titulo: $titulo<br>";

        }
      }
    }
    $insert = mysqli_query($db,"INSERT INTO habit (Id_alternativa,Codigo_solucion, Titulo, Unidad, Precio_item) VALUES('$idAlternativa','$code','$titulo','$unidad','$precio')");

	Disconect($db);

}
/*

function SelectHabit($id){

	$db=Conect();

	$select = mysqli_query($db,"SELECT * FROM habit WHERE Id_alternativa='$id'");

	Disconect($db);

	return $select;

}
*/
function MostrarAlternativas($id_diagnostico){

	$db=Conect();

	$select = mysqli_query($db,"SELECT * FROM alternativa WHERE Id_diagnostico = '$id_diagnostico'");

	Disconect($db);

	return $select;

}
/*

function IntroducirPrecio($cantidad, $idAlternativa,$codigo){

	$db=Conect();

	
    $insert = mysqli_query($db,"UPDATE habit SET Cantidad = '$cantidad' WHERE Id_alternativa = '$idAlternativa' AND Codigo_solucion = '$codigo'");

	Disconect($db);


}




function CalcularPrecio($idAlternativa){

	$db=Conect();

    $res = SelectHabit($idAlternativa);
    if ($res){
      	if(mysqli_num_rows($res)>0){
        	while ($tupla=mysqli_fetch_array($res)){
          		$precio_item = $tupla['Precio_item'];
          		$cantidad = $tupla['Cantidad'];
          		$precio_total = $precio_item * $cantidad;
        	}
        	$update = mysqli_query($db,"UPDATE habit SET Precio_total ='$precio_total' WHERE Id_alternativa = '$idAlternativa'");
   		}	
   	}
   	$res = SelectHabit($idAlternativa);
   	$select = $res[sum('Precio_total')];

  	$update_2 = mysqli_query($db,"UPDATE alternativa SET Precio = '$select' WHERE Id_alternativa = '$idAlternativa'");

	Disconect($db);
}


function IntroducirCantidades($codigo,$cantidad){

	$db=Conect();

	$update_cantidades = mysqli_query($db,"UPDATE habit SET Cantidad ='$cantidad' WHERE Codigo = '$codigo'");

	Disconect($db);

	return $precio_total;
}


function CrearAlternativa($idDiagnostico){

	$db=Conect();

	$insert = mysqli_query($db,"INSERT INTO alternativa (Id_diagnostico,Precio) VALUES('$idDiagnostico','0')");

	$res = mysqli_query($db,"SELECT Id FROM alternativa");

	if ($res){
      	if(mysqli_num_rows($res)>0){
        	while ($tupla=mysqli_fetch_array($res)){
          		$id = $tupla['Id'];
        	}
   		}
   		$salida =$id;	
   	}
   	else{
   		$salida = 0;
   	}

	Disconect($db);

	return $salida;

}
*/

function InsertarAlternativaNotip($id, $destino,$precio){

	$db=Conect();

	$update_notip = mysqli_query($db,"UPDATE notip SET PDF ='$destino' AND Precio = '$precio' WHERE Id_alternativa = '$id'");

	Disconect($db);

}

function BorrarAlternativaNotip($id){

	$db=Conect();

	$res = mysqli_query($db, "DELETE FROM notip WHERE Id_alternativa = '$id' ");

	Disconect($db);

	return $res;


}



function SelectNotip($solicitud){

	$db=Conect();

	$select = mysqli_query($db,"SELECT * FROM notip WHERE Id_alternativa='$solicitud'");

	Disconect($db);

	return $select;

}


function CrearAlternativaHabitable($id){
	
	$db=Conect();

	$insert = mysqli_query($db,"INSERT INTO habit (Id_alternativa) VALUES('$id')");

	Disconect($db);


}

function CrearAlternativaNoTipificada($id){

	$db=Conect();

	$insert = mysqli_query($db,"INSERT INTO notip (Id_alternativa) VALUES('$id')");

	Disconect($db);
}

function AnadirFichaDiagnostico($codigo,$id_diagnostico,$rep){

	$db=Conect();


	$select = mysqli_query($db, "SELECT * FROM diagnostico_ficha WHERE Codigo_componente = '$codigo' AND Id_diagnostico = '$id_diagnostico' ");

	$contador = 1;
	if ($select)
	{
		if(mysqli_num_rows($select)>0)
		{			
			while ($tupla=mysqli_fetch_array($select))
			{
				$id = $tupla['Id'];
				$contador++;
								
			}
			//$contador++;
		}

	}

	$insert = mysqli_query($db,"INSERT INTO diagnostico_ficha (Codigo_componente, Id_diagnostico, Porcentaje_general, Porcentaje_mov, Porcentaje_au ,Porcentaje_vi, Contador, Repeticiones) 
		VALUES('$codigo','$id_diagnostico','0','0','0','0','$contador', '$rep' )");
	

	Disconect($db);
}




function MostrarAlternativasHabitables($id_diagnostico){

	$db=Conect();

	$select = mysqli_query($db,"SELECT * FROM alternativa WHERE  Id_diagnostico = '$id_diagnostico' "   );

	$alternativas = array();

	if ($select)
	{
		if(mysqli_num_rows($select)>0)
		{			
			while ($tupla=mysqli_fetch_array($select))
			{
				$id = $tupla['Id'];
				$select2 = mysqli_query($db,"SELECT * FROM habit WHERE  Id_alternativa = '$id' "   );
					if($select2)
						if(mysqli_num_rows($select2)>0)
							array_push($alternativas, $id);					
			}
		}

	}


	Disconect($db);

	return $alternativas;


}



function InsertEvaluacion($id_diagnostico,$id)
{


	$db=Conect();


	$select = mysqli_query($db, "SELECT * FROM evaluacion WHERE Id_alternativa = '$id' AND Id_diagnostico = '$id_diagnostico'");

	if($select)
		if(mysqli_num_rows($select)>0)
		{
			
			return $select;

		}
	else
	{
		$insert = mysqli_query($db,"INSERT INTO evaluacion (Id_alternativa, Id_diagnostico) VALUES('$id', '$id_diagnostico')");
		$res = mysqli_query($db, "SELECT * FROM evaluacion WHERE Id_alternativa = '$id' AND Id_diagnostico = '$id_diagnostico'");

		return $res;
	
	}

	Disconect($db);
}


function SelectFichasEvaluacion( $id ){

	$db=Conect();

	$select = mysqli_query($db, "SELECT * FROM evaluacion WHERE Id = '$id' "); 
	
	Disconect($db);

	return $select;
}



function AnadirFichaEvaluacion($codigo,$id_alternativa,$id_evaluacion){

	$db=Conect();



	$insert = mysqli_query($db,"INSERT INTO evaluacion_fichas (Id_alternativa, Id_evaluacion, Porcentaje_general, Porcentaje_mov, Porcentaje_au ,Porcentaje_vi, Codigo_componente) VALUES('$id_alternativa','$id_evaluacion','0','0','0','0','$codigo')");
	

	Disconect($db);
}


function SelectHabit($id){

	$db=Conect();

	$select = mysqli_query($db,"SELECT * FROM habit WHERE Id_alternativa='$id'");

	Disconect($db);

	return $select;

}



function IntroducirPrecio($cantidad, $id){

	$db=Conect();

	
    $insert = mysqli_query($db,"UPDATE habit SET Cantidad = '$cantidad' 
    	WHERE Id = '$id' ");

	Disconect($db);


}

function CalcularPrecio($idAlternativa){

	$db=Conect();

	$precio_total = 0;
    $res = SelectHabit($idAlternativa);
    if ($res){
      	if(mysqli_num_rows($res)>0){
        	while ($tupla=mysqli_fetch_array($res)){
          		$precio_item = $tupla['Precio_item'];
          		$cantidad = $tupla['Cantidad'];
          		$precio_total += $precio_item * $cantidad;
        	}
   		}	
   	}

  	$update_2 = mysqli_query($db,"UPDATE alternativa SET Precio = '$precio_total' WHERE Id = '$idAlternativa'");

	Disconect($db);


}


function IntroducirCantidades($codigo,$cantidad){

	$db=Conect();

	$update_cantidades = mysqli_query($db,"UPDATE habit SET Cantidad ='$cantidad' WHERE Codigo = '$codigo'");

	Disconect($db);

	return $precio_total;
}


function CrearAlternativa($idDiagnostico){

	$db=Conect();

	$insert = mysqli_query($db,"INSERT INTO alternativa (Id_diagnostico,Precio) VALUES('$idDiagnostico','0')");

	$res = mysqli_query($db,"SELECT Id FROM alternativa");

	if ($res){
      	if(mysqli_num_rows($res)>0){
        	while ($tupla=mysqli_fetch_array($res)){
          		$id = $tupla['Id'];
        	}
   		}
   		$salida =$id;	
   	}
   	else{
   		$salida = 0;
   	}

	Disconect($db);

	return $salida;

}



function SelectFichasEvaluacionAlternativa( $id_evaluacion, $id_alternativa )
{
	$db=Conect();

	$select = mysqli_query($db,"SELECT * FROM evaluacion_fichas WHERE Id_alternativa = '$id_alternativa' AND Id_evaluacion = '$id_evaluacion' ");

	Disconect($db);

	return $select;
}


function SubirAlternativaNoTip($id,$destino,$cantidad){

	$db=Conect();

	//echo "$id<br>";


	$insert = mysqli_query($db,"INSERT INTO notip (Id_alternativa,Precio,Pdf) VALUES('$id','$cantidad','$destino')");

	$update_precio = mysqli_query($db,"UPDATE alternativa SET Precio ='$cantidad' WHERE Id = '$id'");

	Disconect($db);
}


function SelectEvaluacionFichas($id){

	$db=Conect();

	$select = mysqli_query($db,"SELECT * FROM evaluacion_fichas WHERE Id = '$id' ");

	Disconect($db);

	return $select;
}

function InsertDatoEvaluacion($id_ficha, $dato, $dxt, $mov, $au, $vi)
{
	$db=Conect();

	
	$insert = mysqli_query($db,"INSERT INTO valores_fichas (Id_ficha, Valor, Relevancia_dxt, Relevancia_mov, Relevancia_au, Relevancia_vi) 
								VALUES ('$id_ficha','$dato', '$dxt', '$mov', '$au', '$vi' )");
	
	/*if(!$insert)
		$update = mysqli_query($db,"UPDATE valores_fichas SET Valor ='$dato' 
																Relevancia_dxt ='$dxt', 
																Relevancia_mov ='$mov',
																Relevancia_au ='$au', 
																Relevancia_vi ='$vi' 
															WHERE Id = '$idEvaluacion' ");
	*/
	Disconect($db);

}


function UpdateDatoEvaluacion($indice, $id_ficha, $dato, $dxt, $mov, $au, $vi)
{
	$db=Conect();

	/*
	$insert = mysqli_query($db,"INSERT INTO valores_fichas (Id, Valor, Relevancia_dxt, Relevancia_mov, Relevancia_au, Relevancia_vi) 
								VALUES ('$idEvaluacion','$dato', '$dxt', '$mov', '$au', '$vi' )");
	if(!$insert)*/
		$update = mysqli_query($db,"UPDATE valores_fichas SET Valor ='$dato', 
																Relevancia_dxt ='$dxt', 
																Relevancia_mov ='$mov',
																Relevancia_au ='$au', 
																Relevancia_vi ='$vi' 
															WHERE Id_ficha = '$id_ficha' 
															AND Id = '$indice' ");

	Disconect($db);

}





function SelectDatosFicha($id){

	$db=Conect();

	$select = mysqli_query($db,"SELECT * FROM valores_fichas WHERE Id_ficha = '$id' ");

	Disconect($db);

	return $select;
}

function ActualizaFichasAlternativas($id_ficha_eval,$dxt,$mov,$au,$vi,$id_ficha,$id_alternativa,$id_evaluacion,$codigo){

	$db=Conect();


	$select = mysqli_query($db,"SELECT * FROM evaluacion_fichas WHERE Id = '$id_ficha_eval'  ");

	if ($select){
      	if(mysqli_num_rows($select)>0){



			$update = mysqli_query($db,"UPDATE evaluacion_fichas SET Porcentaje_general = '$dxt', 
																	 Porcentaje_mov = '$mov', 
																	 Porcentaje_au = '$au', 
																	 Porcentaje_vi = '$vi'
																	 WHERE  Id = '$id_ficha_eval' " );
		}
	
	}


	
	

	Disconect($db);
}

function InsertaFichasAlternativas($dxt,$mov,$au,$vi,$id_ficha,$id_alternativa,$id_evaluacion,$codigo){


	$db=Conect();


	$res = mysqli_query($db,"SELECT * FROM evaluacion_fichas WHERE Id_ficha = '$id_ficha' AND Id_alternativa = '$id_alternativa' AND Id_evaluacion = '$id_evaluacion' ");

	$id = 0;

	if ($res)
	{
      	if(mysqli_num_rows($res)>0){
      		while ($tupla=mysqli_fetch_array($res)){
          		$id = $tupla['Id'];      		
        	}

      	}
		else
		{  


			$insert = mysqli_query($db,"INSERT INTO evaluacion_fichas (Id_alternativa, Id_evaluacion, Porcentaje_general, Porcentaje_mov, Porcentaje_au ,Porcentaje_vi, Codigo_componente, Id_ficha) VALUES('$id_alternativa','$id_evaluacion','$dxt','$mov','$au','$vi','$codigo', '$id_ficha' ) ");

			$res2 = mysqli_query($db,"SELECT * FROM evaluacion_fichas WHERE Id_ficha = '$id_ficha' AND Id_alternativa = '$id_alternativa' AND Id_evaluacion = '$id_evaluacion' ");



			if ($res2){
		      	if(mysqli_num_rows($res2)>0){
		        	while ($tupla2=mysqli_fetch_array($res2)){
		          		$id = $tupla2['Id'];      		
		        	}
		   		}	
		   	}

   		}
	
	}

	Disconect($db);

	return $id;

}


function IntroducirTuplaTecnicos($idAlternativa,$codigoDiagnostico,$peso, $edificio,$rating, $WxR){

	$db=Conect();

	$insert = mysqli_query($db,"INSERT INTO tecnicos (Id_alternativa,Id_diagnostico,Peso, Rating, Producto ) 
		VALUES('$idAlternativa','$codigoDiagnostico','$peso','$edificio','$rating',$WxR)");

	Disconect($db);

}


function IntroducirTuplaSociales($idAlternativa,$peso, $edificio,$rating, $WxR){

	$db=Conect();

	$insert = mysqli_query($db,"INSERT INTO sociales (Id_alternativa,Peso, Rating, Producto ) 
		VALUES('$idAlternativa','$peso','$edificio','$rating',$WxR)");

	Disconect($db);

}

function IntroducirTuplaEconomicos($idAlternativa,$codigoDiagnostico,$peso, $edificio,$rating, $WxR){

	$db=Conect();

	$insert = mysqli_query($db,"INSERT INTO economicos (Id_alternativa,Id_diagnostico,Peso, Rating, Producto ) 
		VALUES('$codigoDiagnostico','$peso','$edificio','$rating',$WxR)");

	Disconect($db);

}

function SelectSociales($idAlternativa,$codigoDiagnostico){

	$db=Conect();

	$select = mysqli_query($db, "SELECT * FROM sociales WHERE Id_alternativa = '$idAlternativa' AND Id_diagnostico = '$codigoDiagnostico' ");

	Disconect($db);

	return $select;

}

function SelectTecnicos($idAlternativa,$codigoDiagnostico){

	$db=Conect();

	$select = mysqli_query($db, "SELECT * FROM tecnicos WHERE Id_alternativa = '$idAlternativa' AND Id_diagnostico = '$codigoDiagnostico' ");

	Disconect($db);

	return $select;

}

function SelectEconomicos($codigoDiagnostico){

	$db=Conect();

	$select = mysqli_query($db, "SELECT * FROM economicos WHERE Id_diagnostico = '$codigoDiagnostico' ");

	Disconect($db);

	return $select;

}

function SelectEvaFicha($idAlternativa){

	$db=Conect();

	$select = mysqli_query($db,"SELECT * FROM evaluacion_fichas WHERE Id_alternativa='$idAlternativa'");

	Disconect($db);

	return $select;


}

function SelectValoracion($idAlternativa){

	$db=Conect();


	$select = mysqli_query($db, "SELECT * FROM valoracion WHERE Id_alternativa = '$idAlternativa' ");

	Disconect($db);

	return $select;

}

function SelectEdificio($codigoSolicitud){

	$db=Conect();

	$select = mysqli_query($db,"SELECT * FROM edificio WHERE Codigo_solicitud='$codigoSolicitud'");

	Disconect($db);

	return $select;
}

function SelectEdificioPublico($codigoSolicitud){

	$db=Conect();

	$select = mysqli_query($db,"SELECT * FROM ed_publico WHERE Codigo_solicitud='$codigoSolicitud'");

	Disconect($db);

	return $select;
}

function SelectEdificioPrivado($codigoSolicitud){

	$db=Conect();

	$select = mysqli_query($db,"SELECT * FROM ed_privado WHERE Codigo_solicitud='$codigoSolicitud'");

	Disconect($db);

	return $select;
}

function SelectAlternativaHabitByIdDiagostico($idDiagnostico){

	$db=Conect();

	$select = mysqli_query($db,"SELECT * FROM habit WHERE Id_diagnostico='$idDiagnostico'");

	Disconect($db);

	return $select;

}

function SelectFichasEvaluacionAlternativaById( $id_evaluacion, $id, $id_alternativa )
{
	$db=Conect();

	$select = mysqli_query($db,"SELECT * FROM evaluacion_fichas WHERE Id_ficha = '$id' AND Id_evaluacion = '$id_evaluacion' AND Id_alternativa = '$id_alternativa' ");

	Disconect($db);

	return $select;
}

function SelectFichasAlternativaByIdAlternativa($id, $id_alternativa )
{
	$db=Conect();

	$select = mysqli_query($db,"SELECT * FROM evaluacion_fichas WHERE Id_ficha = '$id' AND Id_alternativa = '$id_alternativa' ");

	Disconect($db);

	return $select;
}



function AnadirFichaEvaluacionRelFicha($codigo,$id_alternativa,$id_evaluacion,$id_ficha){

	$db=Conect();



	$insert = mysqli_query($db,"INSERT INTO evaluacion_fichas (Id_ficha,Id_alternativa, Id_evaluacion, Porcentaje_general, Porcentaje_mov, Porcentaje_au ,Porcentaje_vi, Codigo_componente) VALUES('$id_ficha', '$id_alternativa','$id_evaluacion','0','0','0','0','$codigo')");
	

	Disconect($db);
}



function SelectFichasAlternativasSinFichaDiagnostico($id_evaluacion,$id_alternativa)
{
	$db=Conect();


	$select = mysqli_query($db,"SELECT * FROM evaluacion_fichas WHERE Id_evaluacion = '$id_evaluacion' AND Id_alternativa = '$id_alternativa' AND Id_ficha is null ");



	Disconect($db);

	return $select;
}


function SelectFichasAlternativasSinFichaDiagnosticoByIdAlternativa($id_alternativa)
{
	$db=Conect();


	$select = mysqli_query($db,"SELECT * FROM evaluacion_fichas WHERE Id_alternativa = '$id_alternativa' AND Id_ficha is null ");



	Disconect($db);

	return $select;
}


function SelectSolicitudByUserId( $id )
{
	$db=Conect();

	$select = mysqli_query($db,"SELECT * FROM solicitud WHERE Id_usuario = '$id' ");

	Disconect($db);

	return $select;
}


function SelectSolicitudByUserIdAndTipo($id,$tipo)
{
	$db=Conect();

	$select = mysqli_query($db,"SELECT * FROM solicitud WHERE Id_usuario = '$id' AND Tipo_solicitud = '$tipo' ");

	Disconect($db);

	return $select;
}


function SelectPDF($id )
{
	$db=Conect();

	$select = mysqli_query($db,"SELECT * FROM pdf WHERE Id = '$id' ");

	Disconect($db);

	return $select;
}




function selectSolicitud($codigo_solicitud)
{

	$db=Conect();

	$selectSolicitud = mysqli_query($db,"SELECT * FROM solicitud WHERE Codigo_solicitud = '$codigo_solicitud' ");

	Disconect($db);

	return $selectSolicitud;

}


function selectPersona($id_persona)
{

	$db=Conect();


	$selectPersona = mysqli_query($db,"SELECT * FROM persona WHERE Id = '$id_persona' ");

	Disconect($db);

	return $selectPersona;

}


function selectRepresentante($id_rep)
{

	$db=Conect();


  	$selectRepresentante = mysqli_query($db,"SELECT * FROM representante WHERE Id = '$id_rep' ");

	Disconect($db);

	return $selectRepresentante;

}



function InsertDatoEvaluacionFichaEvaluacion($id_ficha, $id_alternativa, $id_evaluacion , $dato, $dxt, $mov, $au, $vi,$codigo)
{
	$db=Conect();

	
	$insert = mysqli_query($db,"INSERT INTO valores_fichas_evaluacion (Id_ficha, Id_alternativa, Id_evaluacion, Valor, Relevancia_dxt, Relevancia_mov, Relevancia_au, Relevancia_vi,Codigo_componente) 
								VALUES ('$id_ficha', '$id_alternativa', '$id_evaluacion', '$dato', '$dxt', '$mov', '$au', '$vi', '$codigo' )");

	/*
	if(!$insert)
		$update = mysqli_query($db,"UPDATE valores_fichas_evaluacion SET Valor ='$dato', 
																Relevancia_dxt ='$dxt', 
																Relevancia_mov ='$mov',
																Relevancia_au ='$au', 
																Relevancia_vi ='$vi',
																Codigo_componente = '$codigo'
															WHERE Id _ficha = '$id_ficha' 
															AND Id_alternativa = '$id_alternativa' 
															AND Id_evaluacion = '$id_evaluacion' ");

	*/

	Disconect($db);

}




function UpdateDatoEvaluacionFichaEvaluacion($indice, $id_ficha, $id_alternativa, $id_evaluacion , $dato, $dxt, $mov, $au, $vi,$codigo)
{
	$db=Conect();

	/*
	$insert = mysqli_query($db,"INSERT INTO valores_fichas_evaluacion (Id_ficha, Id_alternativa, Id_evaluacion, Valor, Relevancia_dxt, Relevancia_mov, Relevancia_au, Relevancia_vi,$codigo) 
								VALUES ('$id_ficha', '$id_alternativa', '$id_evaluacion', '$dato', '$dxt', '$mov', '$au', '$vi' )");
	if(!$insert)*/
		$update = mysqli_query($db,"UPDATE valores_fichas_evaluacion SET Valor ='$dato', 
																Relevancia_dxt ='$dxt', 
																Relevancia_mov ='$mov',
																Relevancia_au ='$au', 
																Relevancia_vi ='$vi'	
															WHERE Id_ficha = '$id_ficha' 
															AND Id = '$indice' 
															AND Id_alternativa = '$id_alternativa' 
															AND Id_evaluacion = '$id_evaluacion' ");

	Disconect($db);

}



function SelectDatosFichaEvaluacion($id_alternativa, $id_evaluacion){

	$db=Conect();

	$select = mysqli_query($db,"SELECT * FROM valores_fichas_evaluacion WHERE Id_alternativa = '$id_alternativa' AND Id_evaluacion = '$id_evaluacion' ");

	Disconect($db);

	return $select;
}


function SelectDatosFichaEvaluacionByIdEval($id){

	$db=Conect();

	$select = mysqli_query($db,"SELECT * FROM valores_fichas_evaluacion WHERE id_ficha = '$id' ");

	Disconect($db);

	return $select;
}



function SelectDatosFichaEvaluacionById($id_ficha){

	$db=Conect();

	$select = mysqli_query($db,"SELECT * FROM valores_fichas_evaluacion WHERE Id_ficha = '$id_ficha' ");

	Disconect($db);

	return $select;
}



function InsertarPdfSolicitud($file,$solicitud){

	$db=Conect();

	$select = mysqli_query($db,"SELECT * FROM pdf WHERE Ruta = '$file' ");


	if ($select){
      	if(mysqli_num_rows($select)>0){
        	while ($tupla=mysqli_fetch_array($select)){
        	$id = $tupla['Id'];
        	}
        }
    }


	if($select)
		 	if(mysqli_num_rows($select)>0)
		 		$update = mysqli_query($db,"UPDATE pdf SET Ruta ='$file' WHERE Id = '$id'");
			else
				$insert = mysqli_query($db,"INSERT INTO pdf (Ruta) VALUES('$file')");
				



	$select = mysqli_query($db,"SELECT * FROM pdf WHERE Ruta = '$file' ");

	if ($select){
      	if(mysqli_num_rows($select)>0){
        	while ($tupla=mysqli_fetch_array($select)){
          		$id = $tupla['Id'];
        	}
   		}	
   	}


   	$update = mysqli_query($db,"UPDATE solicitud SET Id_pdf ='$id' WHERE Codigo_solicitud = '$solicitud'");


	Disconect($db);
}


/*



function SelectDatosFormulario($codigo_solicitud)
{

	$db=Conect();


	$datos = array();

	$selectSolicitud = mysqli_query($db,"SELECT * FROM solicitud WHERE Codigo_solicitud = '$codigo_solicitud' ");

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


	$selectPersona = mysqli_query($db,"SELECT * FROM persona WHERE Id = '$id_persona' ");
	$selectRepresentante = mysqli_query($db,"SELECT * FROM representante WHERE Id = '$id_rep' ");



	if ($selectPersona)
	{
		if(mysqli_num_rows($selectPersona)>0)
		{			
			while ($tupla=mysqli_fetch_array($selectPersona))
			{
				$nombre_apellidos = $tupla['Nombre_Apellidos'];
				$id_rep = $tupla['Id_representante'];

			}
		}
	}






	Disconect($db);

	



}
*/

?>