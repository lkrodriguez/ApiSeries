  
    <?php
        $mostrarpelURL = 'http://api.tvmaze.com/shows';
        $mostrarpelJSON= file_get_contents($mostrarpelURL);
        $mostrarpels=json_decode($mostrarpelJSON,true);


        $imgURL = 'http://api.tvmaze.com/shows/1/images';
        $imgJSON= file_get_contents($imgURL);
        $imgs=json_decode($imgJSON,true);


       //print_r($mostrarpels);

    ?>

    <!--CARRUSEL-->


 
<div class="container">
    <div class="row">

        <!--llama datos-->
    <?php

    foreach ($mostrarpels  as $movie) {
        echo ' <a href="movies.php?id='.$movie['id'].'"> 
                <img class="avatar "  src="http://api.tvmaze.com/shows/1/images">              
                  <h1>'.$movie['name'].'</h1>
                  <h1>'.$movie['language'].'</h1> 
                  <h4>'.$movie['summary'].'</h4>
               </a>          

        ';        
    } 

    ?>
        
    </div>   
</div>



  
    

    


