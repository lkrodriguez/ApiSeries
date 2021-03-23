   
   <?php
        $accionlURL = 'http://api.tvmaze.com/shows';
        $accionJSON= file_get_contents($accionlURL);
        $accion=json_decode($accionJSON,true);
       //print_r($mostrarpels);

    ?>              
                                <!--llama datos-->
                 
<style >
  
</style>
          

 
<div class="container">
  <div class="panel">
    <div class="recentrilizador">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide" >
            <h2>Series de Acción & Ciencia Ficción & más </h2>


             <?php
                  

                  foreach ($accion  as $action) {
                      echo ' 
                      <a class="swiper-slide" href="$accion.php?id='.$action['id'].'"> 
                      <img   src="'.$action['image']['medium'].'">
                      <h5 class="card-title">'.$action['name'].'</h5>
                      <h5>'.$action['genres']['1'].'</h5>  
                      </a> <hr> ';   

                  } 

                  ?>
          
          </div>          
        </div>        
      </div>
    </div>    
  </div>  
</div>










    
        





 
