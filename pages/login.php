<div id="main-wrapper">
             <div class="container"> 
              <div class="row">
                 <h2>Inicio de Sesión </h2>

              </div>
             
              <form method="POST" class="col s12" action="">
                 <?php  
                    if (isset($_POST['enviar']))
                    {
                        $login= Login($_POST['usuario'],$_POST['contraseña']);
                        if ($login == true){

                          echo "<script>alert('Contraseña Correcta')</script>";

                        }
                        else{ 
                          echo "<script>alert('Contraseña Incorrecta')</script>";

                        }


                    }
                        

                 ?>
                 <div class="row">
                           <div class="input-field col s6">
                              <input placeholder="Escribe aquí" id="first_name" type="text" class="validate" name="usuario">
                              <label for="first_name">Usuario</label>
                           </div>
                  </div>  

                  <div class="row">
                    
                    

                           <div class="input-field col s6">
                               <input id="password" type="password" class="validate" name="contraseña">
                               <label for="first_name">Contraseña</label>
                                
      
                             
                           </div>
                        
                   
                  </div>

                  <div class="row">
                     <button class="button waves-effect waves-light" type="submit" name="enviar"  > Entrar
                      
                     </button>
                    
                  </div>
               
            

             </form>     


</div>