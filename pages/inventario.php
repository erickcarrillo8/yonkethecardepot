
<div id="main-wrapper">
   <div class="container-fluid">

           <div class="row">

            <div id="main1">
            	
          

                   <div class="input-field col s6">
                   <form method="GET" action="index.php" autocomplete="off" >
                   		<input type="hidden" name="pages" value="inventario">
                     	<input placeholder="Busca por marca, modelo, año, motor, etc" name="buscar" id="first_name" type="text" class="validate">

				   </form>

						   <div id="resultados">
						   	
						   </div>
				   </div>

			  </d	iv>	   


				   <div class="col s6">
				       	
  

  
          
                       	
           </div>
				   </div>

		

                        <div class="row">


 <?php 
   	
     include_once("includes/conexion.php");
   	 $consulta="SELECT * FROM autos  ORDER BY id_auto DESC";
	 $resConsulta=$mysqli->query($consulta); 
	 $nro_reg = $resConsulta->num_rows;
		   



if ($nro_reg==0)
{
  echo "No se encontraron registros";	
}


$reg_por_pag = 8;


if ( isset ($_GET['num']))
{
 $nro_pagina = $_GET['num'];
}
else
{  
		
   $nro_pagina=1;
}


	if(is_numeric($nro_pagina))
	{$inicio = (($nro_pagina-1)*$reg_por_pag);}
	else 
	
		$inicio  = 0 ; 
	   
	      
		  
	   
	    if (isset($_GET['buscar']))
			 {
				 
				 $buscar = $_GET['buscar'];

				 if ($buscar == "fodr" || $buscar == "fdor" || $buscar == "fords")
						{
							
							echo "
							<div class= 'col s12'>
							Se muestran resultados de <strong>Ford</strong>
							</div>
							";

							$buscar = "ford";
						}	

				if ($buscar == "masda" || $buscar == "madza" || $buscar == "mazdas")
						{
							
							echo "
							<div class= 'col s12'>
							Se muestran resultados de <strong>Mazda</strong>
							</div>
							";

							$buscar = "mazda";
						}

				if ($buscar == "chebrolet" || $buscar == "chevrole" || $buscar == "cevrolet")
						{
							
							echo "
							<div class= 'col s12'>
							Se muestran resultados de <strong>Chevrolet</strong>
							</div>
							";

							$buscar = "chevrolet";
						}

				if ($buscar == "nisan" || $buscar == "nizan" || $buscar == "misan" || $buscar == "nisa")
						{
							
							echo "
							<div class= 'col s12'>
							Se muestran resultados de <strong>Nissan</strong>
							</div>
							";

							$buscar = "nissan";
						}	

				if ($buscar == "toyora" || $buscar == "toiota" || $buscar == "totota" || $buscar == "toyots")
						{
							
							echo "
							<div class= 'col s12'>
							Se muestran resultados de <strong>Toyota</strong>
							</div>
							";

							$buscar = "toyota";
						}				


				

				 $consulta="SELECT * FROM autos  WHERE modelo like '%".$buscar."%' OR marca like '%".$buscar."%' ORDER BY id_auto DESC ";
				 $resConsulta=$mysqli->query($consulta);
				 $nro_reg = $resConsulta->num_rows; 
				 


				 
			 }
			 
			 else 
			 {   
			 	
			     $consulta="SELECT * FROM autos  ORDER BY id_auto DESC LIMIT $inicio,$reg_por_pag";
				 $resConsulta=$mysqli->query($consulta); 
			   
			 }
			
			
			 
			 
			$cant_paginas = ceil ($nro_reg/$reg_por_pag);
		  
		  
		  ?>    
               
                
             
   
          
          <?php 
		 
		  while ($datos = $resConsulta->fetch_array(MYSQL_ASSOC))

		  {
		  		$nombre=$datos["modelo"];
		  		$marca= $datos["marca"];
		        $imagen=$datos["foto"];
		        $ano = $datos["ano"];
		        $motor = $datos["motor"];
		        $transmision = $datos["transmision"];
		        $id = $datos['id_auto'];

		     	echo "<div class='caja'>
		            
		     	<a href='#modal".$id."' class='image fit modal-trigger '> 

		     			<img src='http://www.yonkethecardepot.com/".$imagen."'>
		     	</a>  

		     	         <h1> ".$marca. " ".$nombre."   </h1>  

		     	          Año:    ".$ano	." </br>
		     	          Motor:   ".$motor."</br>
		     	          Transmision:  ".$transmision."</br>
		     	         
                        <a href='index.php?pages=auto&id=".$id."&marca=".$marca."&ano=".$ano."&modelo=".$nombre." ' class='btn'>Ver </a>


 	       		</div>"; 

 	       		echo "
 	       		<div id='modal".$id."' class='modal' align='center'>
    <div class='modal-content'>
    	<h1>".$marca. " ".$nombre."</h1>
     <img src='http://www.yonkethecardepot.com/".$imagen."' width='400px'>
      
      
    </div>   


    
  				</div>



 	       		";




        	}
			
		  ?>
          	
            </div>

            <div class="row">

      
           <div class="paginacion">
     
		   <?php 
		   
		   if ($nro_pagina > 1)
		   {
			  echo "<a class='material-icons' href= 'index.php?pages=inventario&num=".($nro_pagina-1)."'>chevron_left</a>";  
		   }
		    
            
            if ($nro_pagina < $cant_paginas)
            { 
               $final = $nro_pagina+4;
            }

             if ($nro_pagina >= ($cant_paginas-4)) {
            	$final = $nro_pagina + ($cant_paginas-$nro_pagina);
            	//$final = $nro_pagina;
            	
            }
           
           


		     for ($i=$nro_pagina; $i <=$final;$i++)
			 {
			    	 
					 if ($i == $nro_pagina)
					 {echo "<a class='activo'>". $i."</a>  ";}
					 
					 else 
					  {echo  "<a  class='indice' href= 'index.php?pages=inventario&num=$i'>$i</a>" ;}
			 }
			 
			 	if ($nro_pagina < $cant_paginas)
					{
				   echo"<a  class='material-icons' href = 'index.php?pages=inventario&num=".($nro_pagina+1)."'> chevron_right </a>"	;
				}		  
		  ?> 
		  </div>
        
          </div>
     

        </div>
        
    </div>
 

       
          <script type="text/javascript">
               $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });
       
        
          </script>
         
  