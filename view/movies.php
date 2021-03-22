


<pre>

<h1>pag de generos</h1>
<?php 
 		$imgURL = 'http://api.tvmaze.com/shows/1/images';
        $imgJSON= file_get_contents($imgURL);
        $imgs=json_decode($imgJSON,true);

        //print_r($imgs);


        foreach ($imgs as $img) {
        echo ' 

        ';        
    } 


  ?>


<img src="">