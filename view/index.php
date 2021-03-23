
    <?php
        $mostrarpelURL = 'http://api.tvmaze.com/shows';
        $mostrarpelJSON= file_get_contents($mostrarpelURL);
        $mostrarpels=json_decode($mostrarpelJSON,true);



       //print_r($mostrarpels);

    ?>

    <!--CARRUSEL-->


 
<div class="container">
    <div class="row">

        <!--llama datos-->
    <?php
    $medio=0;

    foreach ($mostrarpels  as $movie) {
        echo ' <a href="index.php?id='.$movie['id'].'"> 
                <img   src="'.$movie['image']['medium'].'">              
                  <h1>'.$movie['name'].'</h1>
                  <h1>Rating '.$movie['rating']['average'].'</h1>
                  <h4>Resumen '.$movie['summary'].'</h4>
               </a>          

        ';        
    } 

        ?>
        


 <div>
   <div>
     <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php $movie['image']['medium']?>" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Third slide">
    </div>
  </div>
</div>
   </div>
 </div>
