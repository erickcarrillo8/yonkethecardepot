

   <div class="container-fluid" style="margin-top:4px;">
         <div class="slider">
    <ul class="slides">
      <li>
        <img src="images/inicio/banner1.png"> <!-- random image -->
        
      </li>
      <li>
        <img src="images/inicio/contacto.png"> <!-- random image -->
      </li>
      <li>
        <img src="images/inicio/accord94.png"> <!-- random image -->
        <div class="caption right-align">
          <h3>Honda</h3>
          <h5 class="light grey-text text-lighten-3">Accord 1994</h5>
        </div>
      </li>
      <li>
        <img src="images/inicio/accord98.png"> <!-- random image -->
        <div class="caption center-align">
          <h3>Accord 1998</h3>
          <h5 class="light grey-text text-lighten-3">Honda</h5>
        </div>
      </li>
      <li>
        <img src="images/inicio/accord2005.png"> <!-- random image -->
        <div class="caption left-align">
          <h3>Honda Acoord 2005</h3>
         
        </div>
      </li>
      <li>
        <img src="images/inicio/acuraRSX2003.png"> <!-- random image -->
        <div class="caption left-align">
          <h3>Acura</h3>
          <h5 class="light grey-text text-lighten-3">RSX 2003</h5>
        </div>
      </li>
       <li>
        <img src="images/inicio/civic92.png"> <!-- random image -->
        <div class="caption center-align">
          <h3>Civic 1992</h3>
          <h5 class="light grey-text text-lighten-3">Honda</h5>
        </div>
      </li>
       <li>
        <img src="images/inicio/civic2002.png"> <!-- random image -->
        <div class="caption left-align">
          <h3>Honda Civic</h3>
          <h5 class="light grey-text text-lighten-3">2002</h5>
        </div>
      </li>
       <li>
        <img src="images/inicio/civic2007.png"> <!-- random image -->
        <div class="caption center-align">
          <h3>CIVIC 2007</h3>
          <h5 class="light grey-text text-lighten-3">Honda</h5>
        </div>
      </li>
       <li>
        <img src="images/inicio/crv2000.png"> <!-- random image -->
        <div class="caption right-align">
          <h3>CRV</h3>
          <h5 class="light grey-text text-lighten-3">2000</h5>
        </div>
      </li>
       <li>
        <img src="images/inicio/crv2003.png"> <!-- random image -->
        <div class="caption left-align">
          <h3>CRV</h3>
          <h5 class="light grey-text text-lighten-3">2003</h5>
        </div>
      </li>
    </ul>
  </div>

</div>
<section id="menu2">
<div class="container">
   <div class="row">
       <div class="col s12  m6 l3">
          <img src="iconos/servicios.png" alt="Servicios">
         <a href="servicios"><h4>Servicios </h4> </a>
         <p><strong>Yonke The Car depot<strong> ofrece varios servicios para usted, con el mejor equipo de trabajo. </p>
       </div>

    

        <div class="col s12  m6 l3">
          <img src="iconos/inventario.png" alt="Inventario">
        <a href="inventario"> <h4>Inventario </h4> </a>
         <p>Somos especialistas en <em>autos </em>japoneses Contamos con un amplio inventario para usted.</p>
       </div>

       <div class="col s12 m6 l3">
         <img src="iconos/profecos.png" alt="Garantías" >
         <a href="garantias>"><h4>Garantías </h4></a>
         <p>Aprobación Según Contrato de Adhesión 
No. 8935 / 2011</p>

         
       </div>

       <div class="col s12 m6 l3">
         <img src="iconos/contacto.png" alt="Contacto">
        <a href="contacto"> <h4>Contacto</h4> </a>
         <p>La atención es realmente en vivo con cualquier de nuestras operadoras
          y la respuesta es inmediata.</p>

         
       </div>

      
     
   </div>
  

</div>
</section>
<section id="principal">
    <div class="container">
        <div class="row">
            <div class="col  s12  l4 ">
                 <h4>Grupo SAB-SAM</h4>
                  <img src="iconos/sucursales.png" alt="sucursales">
                  <p>Visita cualquiera de nuestras sucursales</p>
              
            </div>

             <div class="col  s12  l4 ">
                 <h4>Gruas</h4>
                  <img src="iconos/grua.png" alt="Servicio de Gruas">
                  <p>Ofrecemos servicio de <strong>transporte</strong> en grua<br />
              Transladamos tu <strong>auto</strong> de tu casa negocio empresa hasta cualquiera<br />
              de nuestras plantas con nosotros viajas completamente asegurado</p>
              
            </div>

              <div class="col  s12  l4 " id="nuevoautos">
                <h4>Nuevos autos</h4>
               <?php 
                include("includes/conexion.php");
                $consulta = "SELECT * FROM autos ORDER BY id_auto DESC LIMIT 3";
                $resConsulta = $mysqli->query($consulta);

                
                    
                while ($filas = $resConsulta->fetch_array(MYSQL_ASSOC) )
                {  
                    $id_auto = $filas['id_auto'];
                    $modelo = $filas['modelo'];
                    $marca = $filas['marca'];
                    $año = $filas['ano'];
                    $motor = $filas['motor'];
                    $transmision = $filas['transmision']; 
                    $detalles = $filas['detalles'];
                    $foto = $filas['foto'];
                   
       
                  ?>
                
                            
                            
                    <img src="http://www.yonkethecardepot.com/<?php echo $foto ?>" width="64" height="64"    alt = "<?php echo $modelo,$marca ?>" />
                    <p>  <a href="<?php echo $id_auto,"/", $marca,"/",$modelo,"/",$año; ?>" > <h6>  <?php echo $marca, " ",$modelo," ",$año;?></h6>   </a>
                     Motor: <?php echo $motor?><br>
                     Transmisión: <?php echo $transmision ?>  
                    </p>
               
              <?php }?>
                
                
              <a class="waves-effect waves-light btn" href="inventario">Ver más</a>

            
              
            </div>

           
          
        </div>

        <div class="row">

             <div class="col s12  l4">
                <h4>Tips</h4>
                <img src="iconos/tip.png" alt="Tips">
                <p>Cuando adquieras una AUTO-PARTE siempre preguntale al vendedor si la tiene instalada en el auto.</p>
              
            </div>

             <div class="col s12  l4">
                <h4>Tips</h4>
                <img src="iconos/tip.png" alt="Tips">
                <p>Cuando adquieras una AUTO-PARTE siempre preguntale al vendedor si la tiene instalada en el auto.</p>
              
            </div>

            <div class="col s12  l4">
            <h4> Visitas </h4>
                 <?php 
                 MostrarContador();


                  ?>
            </div>
          
        </div>
      
    </div>  
</section>



<script type="text/javascript">
          $(document).ready(function(){
      $('.slider').slider({full_width: true});
    });
  </script>