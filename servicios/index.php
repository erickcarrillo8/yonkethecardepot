    <!DOCTYPE html>
<html ng-app="AppYonke">
    <head>
        <meta charset="UTF-8" />
        <title>Yonke The Car Depot | Servicios</title>
        <meta name="application-name" content="yonkethecardepot.com" />
        <meta name="author" content="Grupo Sab sam" />
        <meta name="distributor" content="" />
        <meta name="robots" content="All" />
        <meta name="description" content="Yonke en tijuana, Conoce los servicios que The Car Depot te ofrece."/>
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


    <body  id="nosotros" ng-controller="servicioController">
        
      <div id="main1">
  <img src="../iconos/services.png" alt="servicios"> <h3>Servicios</h3>
</div>
<div class="container">
  <div class="row 200%">

    <div class="8u 12u(medium) important(medium)">

      <!-- Content -->
      <div id="content">
        <section class="last">
          <table width="800">

            <tr ng-repeat="servicio in servicios">
              <td width="110"><img  ng-src="../{{ servicio.foto }}"></td>
              <td width="678">{{servicio.texto}}
            </tr>
            
          </table>
        </section>
      </div>

    </div>
  </div>
</div>

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
