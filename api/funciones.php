<?php

function Autos()
{
   

     $consulta="SELECT * FROM autos";  
   	 $datos = datos($consulta);      
   
     return json_encode($datos) ;

}


function nuevosAutos()
{
	$consulta="SELECT * FROM autos order by id_auto DESC LIMIT 3";
	$datos = datos($consulta);

    return  json_encode( $datos) ;
}


function visitas()
{
	ini_set('display_errors', 'On');
	include("conexion.php");


	$consulta="SELECT cantidad FROM visitas";
	$resConsulta = $mysqli->query($consulta);
	$filas = $resConsulta->fetch_array(MYSQL_ASSOC);

	$i = 0 ;
	if ($filas)
	{
		$datos[$i] = $filas['cantidad'];
		$i++;
	}

	for ($i=0; $i < 9; $i++) { 
		
		$numero[$i]="images/numeros/".$i.".gif"; 
	}

	

	$longitud = strlen($datos[0]) ;
	$hasta = $longitud -1;

	
	
	for ($x=0; $x <= $hasta ; $x++) { 
		$num[$x] = substr($datos[0], $x,1);
		$imagenes[$x] = "images/numeros/".$num[$x].".gif"; 
	}

	

	return json_encode($imagenes);

}

function servicios()
{
	$consulta="SELECT * FROM servicios";
	$datos = datos($consulta);

	return json_encode($datos);

}

function garantias()
{
	$consulta="SELECT * FROM garantias";
	$datos = datos($consulta);

	return json_encode($datos);

}



function tips()
{
	$consulta="SELECT * FROM tips";
	$datos = datos($consulta);

	return json_encode($datos);

}








function datos($consulta)
{	  include("conexion.php");
	 
	  $resConsulta =$mysqli->query($consulta); 
	  $i = 0; 
	 while ($filas = $resConsulta->fetch_array(MYSQL_ASSOC))
     {
        $datos[$i] = $filas;
        $i++;
     }

     return $datos;
}

/* Arreglo de 0-9 nombre de los archivos gifs
	for ($i=0; $i > 9; $i++) { 
		
		$numero[$i]="images/numeros/'".$i."'.gif"; 
	}
	$hasta = 6 - $longitud;
*/ 