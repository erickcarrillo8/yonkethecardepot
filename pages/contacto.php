
                                  
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