   
   <?php
        $misteriolURL = 'http://api.tvmaze.com/shows';
        $misterioJSON= file_get_contents($misteriolURL);
        $misterio=json_decode($misterioJSON,true);
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
            <h2>Series de Misterio & Mucho Más </h2>


             <?php
                  

                  foreach ($misterio  as $movie) {
                      echo ' 
                      <a class="swiper-slide" href="misterio.php?id='.$movie['id'].'"> 
                      <img   src="'.$movie['image']['medium'].'">
                      <h5 class="card-title">'.$movie['name'].'</h5>
                      <h5>'.$movie['genres']['2'].'</h5>  
                      </a> <hr> ';   

                  } 

                  ?>
          
          </div>          
        </div>        
      </div>
    </div>    
  </div>  
</div>










    
        





 
