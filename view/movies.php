   
   <?php
        $mostrarpelURL = 'http://api.tvmaze.com/shows';
        $mostrarpelJSON= file_get_contents($mostrarpelURL);
        $mostrarpels=json_decode($mostrarpelJSON,true);



       //print_r($mostrarpels);

    ?>

 







 
<div class="container">
    <div class="row">

        <!--llama datos-->
    <?php
    

    foreach ($mostrarpels  as $movie) {
        echo ' <a href="index.php?id='.$movie['id'].'"> 
        <h5 class="card-title">'.$movie['name'].'</h5>

              <h1>'.$movie['genres']['0'].'</h1>

             
                 </a>         
              ';

                      
    } 

        ?>
        





 
