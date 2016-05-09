    <!DOCTYPE html>
<html ng-app="AppYonke">
    <head>
        <meta charset="UTF-8" />
        <title>Yonke The Car Depot | contacto</title>
        <meta name="application-name" content="yonkethecardepot.com" />
        <meta name="author" content="Grupo Sab sam" />
        <meta name="distributor" content="" />
        <meta name="robots" content="All" />
        <meta name="description" content="Yonke the Car Depot - Venta de Autopartes en Tijuana, Especializados en auto  partes Japonesas, Honda, Nissan, Motor Transmision. Tenemos lo que busca para su carro."/>
        <meta name="keywords" content="motor, transmision, diferencial , llantas, refaccion, honda, ford, chevrolet, mitsubishi, bmw, lincoln, gmc, baleros, frenos, focos, " />
        <meta name="generator" content="META Tag Generator: http://toolswebtop.com/seo/metatag" />
        <meta name="rating" content="General" />
        <meta name="dcterms.title" content="Yonke The Car Depot | Venta de Autopartes Usadas, Tijuana, México" />
        <meta name="dcterms.contributor" content="Grupo Sab sam" />
        <meta name="dcterms.creator" content="Grupo sab sam" />
        <meta name="dcterms.publisher" content="" />
        <meta name="dcterms.description" content="Ventas de partes para autos, en Tijuana, motor, transmision, diferencial, todo para tu auto." />
        <meta name="dcterms.rights" content="" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Yonke The Car depot | Venta de Autopartes Usadas, Tijuana, México" />
        <meta property="og:description" content="Ventas de partes para autos, en Tijuana, motor, transmision, diferencial, todo para tu auto." />
        <meta property="twitter:title" content="Yonke The Car Depot | Venta de Autopartes Usadas para Carros Autos Vehiculos Pickups en Tijuana, Baja California" />
        <meta property="twitter:description" content="Yonke the Car Depot - Venta de Autopartes en Tijuana, Especializados en auto  partes Japonesas, Honda, Nissan, Motor Transmision. Tenemos lo que busca para su carro."/>
       
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
       

        

      
            <link rel="stylesheet" type="text/css" href="../css/materialize.css  ">
            <link rel="stylesheet" type="text/css" href="../css/style.css">
           
            <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
             <!--Import Google Icon Font-->
            <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
       
             <link rel="icon" type="image/x-icon" href="favicon.ico" />
             <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
             <script type="text/javascript" src="../js/materialize.min.js"></script>
             <script src ="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.3/angular.min.js"></script>
             <script src="../js/app.js"></script>


     <?php include_once("../includes/menu.html"); ?>
              
    </head>


    <body>
          <?php     
      ///////Configuración///// 

$mail_destinatario = 'metalesdebajacalifornia@hotmail.com'; 

///////Fin configuración// 

 
if (isset ($_POST['enviar'])) { 

$headers .= "From: ".$_POST['email']. ""; 

if ( mail ($mail_destinatario, $_POST['asunto'], "Nombre: ".$_POST['nombre']." Asunto: ".stripcslashes ($_POST['asunto'])."Mensaje : ".stripcslashes ($_POST['mensaje']), $headers )) ; 

 

else echo '<p>Error al enviar el formulario. .</p>'; } 

 
?>

<div id="main1">
      <h3>Contacto</h3>
</div>
 <div class="container">
      <div class="row">
            <div  class="col s6">
              <h4>Síguenos en Facebook</h4>
                <div class="fb-page" data-href="https://www.facebook.com/YonkeTheCarDepot/"
                 data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" 
                 data-hide-cover="false" data-show-facepile="true">
                     <div class="fb-xfbml-parse-ignore">
                       <blockquote cite="https://www.facebook.com/YonkeTheCarDepot/">
                       <a href="https://www.facebook.com/YonkeTheCarDepot/">Yonke The Car Depot Tijuana</a>
                       </blockquote>
                     </div>
                 </div>
              
            </div>
             <div class="col s6">
             <h4>Visitanos</h4>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3365.349475894926!2d-116.95320184923177!3d32.49008730577414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80d93842b8cc459b%3A0x632da54e9ff4490c!2sYonke+The+Car+Depot!5e0!3m2!1ses-419!2smx!4v1452584233661" 
                  width="600" height="450" frameborder="0" style="border:0" allowfullscreen>
                  </iframe>
               
             </div>
        
      </div>

      <div class="row">
                            
           
                             
                 
            <h2>Mandanos un mensaje</h2>
            <form action="" method="post"  autocomplete="off">
                  <div class="input-field col s12">
                    
                    <input type="text" id="nombre"  class="validate">
                     <label for ="nombre" >Nombre</label>

                 </div> 

                  <div class="input-field col s12">
                    
                    <input type="email" id="email"  class="validate">
                     <label for ="email" >Correo electrónico</label>

                 </div> 
                  <div class="input-field col s12">
                    
                    <input type="text" id="asunto"  class="validate">
                     <label for ="asunto" >Asunto</label>

                 </div> 

                 <div class="input-field col s12">
                    <textarea id="mensaje" class="materialize-textarea"></textarea>
                     <label for="mensaje" >Mensaje</label>
                   
                 </div>

                  <button class="btn waves-effect" type="submit" name="action">Enviar Correo
                     <i class="material-icons right">send</i>

                  </button>


             </form>
             

 
  
  


       </div>
  </div>
                


                <script type="text/javascript">
                      $(document).ready(function() {
    $('input#input_text, textarea#textarea1').characterCounter();
  });
        

                </script>
        
      

    </body>
<footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Yonke The Car Depot</h5>
                <p class="grey-text text-lighten-4"><strong>Yonke</strong> The Car Depot tiene las <strong>auto partes </strong> que estas buscando.
                  Todas las <em>marcas</em> <em>japonesas</em> en un solo lugar
                </p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Marcas</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Nissan</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Toyota</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Mitsubishi</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Honda</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            Yonke The car Depot© <?php echo date(Y) ?> Todos los derechos reservados
            </div>
          </div>
        </footer>

        <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5&appId=864324486997127";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script type="text/javascript">
    //Inicialización Menu
        $(".button-collapse").sideNav();
</script>
<script>  
    $(document).ready(function(){
    $('.collapsible').collapsible({
      accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });
  });
</script>

</html>

                                  
      