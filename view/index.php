<section>
    <?php
    $mostrarpelURL = 'http://api.tvmaze.com/shows';

     $mostrarpelJSON= file_get_contents($mostrarpelURL);

    $mostrarpel=json_decode($mostrarpelJSON,true);
    
    var_dump($mostrarpel);






    /*cod para llamar una variable en un arreglo con sus datos
    $peli = array("mostrarpel");
    $resultado = compact("",  $peli);
    print_r($resultado);*/


    ?>

<h1>MOSTRAR PELICULAS </h1>

</section>