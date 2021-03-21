    <?php
        $mostrarpelURL = 'http://api.tvmaze.com/shows';
        $mostrarpelJSON= file_get_contents($mostrarpelURL);
        $mostrarpels=json_decode($mostrarpelJSON,true);

       //print_r($mostrarpels);

    ?>

<h1 class="title"  style="background-color: red">MOSTRAR PELICULAS - CARRUSEL IMG  </h1>



    

<!--<section class="" style="background-color: blue"  >
    <h2>Comedia</h2>

    <div class="card" style="width: 18rem;">
        <div class="swiper-container">
            <div class="swiper-wrapper" style="background-color: red">

                <?php            
                   foreach ($mostrarpels as $movie) {

                    echo '<div class="swiper-slide"   >

                        <a href="m.php?id='.$movie['id'].'">

                        <img class="card-img-top" src="https://todoimagenes.co/wp-content/uploads/2019/01/165c10e635869ada45be8d76ac7e9a7b.jpg">

                        <div class="card-body">
                        <h3 class="hometitle">'.$movie['name'].'</h3></a>        
                        </div>


                        
                        </div> ';                
                    }
                ?>
             </div>           
        </div>       
    </div>
</section>-->

   <!--<div class="row">
        <div class="col-sm-12">                 
                 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block w-100" src="https://image.freepik.com/foto-gratis/hrc-tigre-siberiano-2-jpg_21253111.jpg" alt="First slide" width="620" height="450px">
                          <h1>TEMA 1</h1>
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="https://i.pinimg.com/280x280_RS/5e/eb/9d/5eeb9d819342430dba2e833c1d4c254b.jpg" alt="Second slide" width="620" height="450px">
                          <H1>TEMA2</H1>
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="https://tinypng.com/images/social/website.jpg" alt="Third slide" width="620" height="450px">
                          <H1>TEMA 3</H1>
                        </div>
                     </div>


                      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                </div>        
        </div>
    </div>    
</div>-->

    
                        

    <?php
     foreach ($mostrarpels as $movie) {
     echo '<div class="carousel-item active">                
                <img class="d-block w-100" src="http://api.tvmaze.com/shows/1/images'.$movie['id'].'width="620" height="450px">
                <a href="m.php?id='.$movie['id'].'"></a>
                <h1>'.$movie['name'].'</h1><br>
                <h1>'.$movie['status'].'</h1><br>
                <h1>'.$movie['language'].'</h1>
                
            </div>';
                 }
                ?>

                        


<!--<div class="container">

    <section class="panel">
    <h2>comedia</h2>
    <div class="topslider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">

                <?php            
                   foreach ($mostrarpels as $movie) {

                    echo '<div class="swiper-slide">

                        <a href="m.php?id='.$movie['id'].'">

                        <img style=" width: 300px; height: 400px;" src="https://todoimagenes.co/wp-content/uploads/2019/01/165c10e635869ada45be8d76ac7e9a7b.jpg">

                        <div class="card-body">
                        <h3 class="hometitle">'.$movie['name'].'</h3></a>        
                        </div>


                        
                        </div> ';                
                    }
                 ?>
                

            </div>
            
        </div>
        
    </div>
    </section>

    <section>
        <h1>otra seccion</h1>
    </section>
    
</div>-->
