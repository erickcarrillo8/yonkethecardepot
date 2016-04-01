<?php 






function  Consultainventariohome()
{
	 $consulta="select * from productos  order by id DESC LIMIT 4";
     $resConsulta=$mysqli->query($consulta); 

     while ($datos = $resConsulta->fetch_array(MYSQL_ASSOC))
     {  

     	echo "<div class='6u'><a href='#' class='image fit'><img src='".$imagen."' alt='' /></a></div>";
                                                    
     }


}



function MuestraInventario()
{    include("conexion.php");

	 $consulta="select * from productos  order by id DESC LIMIT 8";
	 $resConsulta=$mysqli->query($consulta); 

   while ($datos = $resConsulta->fetch_array(MYSQL_ASSOC))

     {    

     	$nombre=$datos["nombre"];
        $imagen=$datos["image"];
        $descripcion = $datos['descripcion'];

     	echo "<div class='caja'>
            
     	<a href='#' class='image fit'> 

     			<img src='images/inventario/".$imagen."'>
     	</a>  

     	         <h1> ".$nombre." </h1>  

     	             ".$descripcion."



     	       </div>";
                                                    
     }



    

}



function MostrarContador()
{
    
    include("conexion.php");


     $consulta="SELECT visitas FROM visitas";

     $resConsulta=$mysqli->query($consulta); 
     

     while ($filas = $resConsulta->fetch_array(MYSQL_ASSOC))
     {
        $contador = $filas['visitas'];
     }
     


 


 $contador++;
 
 

?> 
<div class="odometro">
<table width="102" border="1" align="center" cellpadding="0" cellspacing="0"> 
<tr> 
<?php 

/* Arreglo de 0-9 nombre de los archivos gifs*/ 
$numero[0]="images/numeros/0.gif"; 
$numero[1]="images/numeros/1.gif"; 
$numero[2]="images/numeros/2.gif"; 
$numero[3]="images/numeros/3.gif"; 
$numero[4]="images/numeros/4.gif"; 
$numero[5]="images/numeros/5.gif"; 
$numero[6]="images/numeros/6.gif"; 
$numero[7]="images/numeros/7.gif"; 
$numero[8]="images/numeros/8.gif"; 
$numero[9]="images/numeros/9.gif"; 

/*Se crea variable para que contenga la longitud de la cadena*/ 
/*es a partir de ahí donde se sabe que mostrará el contador en GIFS*/ 

$longitud = strlen ($contador); 

/* Bucles para mostrar los números*/ 
$hasta = 6-$longitud; 

For ($celda = 1;$celda <= $hasta;$celda++) 
    { 
         echo "<td width=\"17\" height=\"28\" valign=\"top\"><div align=\"center\"><img width='40'  src=\"$numero[0]\"></div></td>"; 
    } 
$hasta = $longitud-1; 
For ($celda = 0;$celda <= $hasta;$celda++) 
    { 
         $num = substr ($contador, $celda, 1); 
         echo "<td width=\"17\" height=\"28\" valign=\"top\"><div align=\"center\"><img width='40' src=\"$numero[$num]\"></div></td>"; 
    } 



echo "</tr> </table> </div>" ;


}

function ConsultaAuto($id)
{
   

     include("conexion.php");


     $consulta="SELECT * FROM autos WHERE id_auto = '".$id."' ";

     $resConsulta =$mysqli->query($consulta); 
     

     while ($filas = $resConsulta->fetch_array(MYSQL_ASSOC))
     {
        $datos[$i] = $filas;
        $i++;
     }

     return json_encode($datos) ;



}



function Login($usuario, $password)
{       
         include("conexion.php");

    
           

            
            $password = md5($password);
           // $consulta="SELECT id_usuario, nombre_usuario, contraseña_usuario FROM usuarios WHERE nombre_usuario ='$usuario'";
            $consulta="SELECT * FROM usuarios WHERE nombre_usuario = '".$usuario."'";

            $resConsulta=$mysqli->query($consulta); 
            $nro_reg = $resConsulta->num_rows;
            echo $nro_reg;
            echo $usuario;
            echo $password;
          
           if ($datos=$resConsulta->fetch_array(MYSQL_ASSOC))
            {   
                if ($datos["contrasena_usuario"] == $password)
                {
                    $_SESSION["nombre_usuario"]=$datos["nombre_usuario"];
                    header("Location: index.php");
                    return true;
                }

                else
                {
                    return  false;
                }
            }


        
}


function Contar()
{
   /* include("conexion.php");

     $consulta="SELECT conteo FROM contador";
     $resConsulta=$mysqli->query($consulta); 

     while ($filas = $resConsulta->fetch_array(MYSQL_ASSOC))
     {
        $contador = $filas['conteo'];
     }


 


 $contador++;
 

 

  $query="UPDATE contador set conteo = ".$contador."";
        //creamos el statment y controlamos los errores
        
        if(!$prepared_st = $mysqli->prepare($query))
        {
            die("Error en la sentencia"); //mensaje de error
        }

          

        if(!$prepared_st->execute())//ejecutamos la consulta
        {
            die("Error en la ejecución");
        }
 
*/

}


