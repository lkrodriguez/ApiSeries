     
     <?php
          $misteriolURL = 'http://api.tvmaze.com/shows';
          $misterioJSON= file_get_contents($misteriolURL);
          $misterio=json_decode($misterioJSON,true);
         //print_r($misterio);

      ?>              
                                  
                   
  <style >
    
  </style>
            

<div class="container">
  <div class="row">
    <table>
      <h2>Series de Misterio & Más</h2>
      <tbody>
        <?php foreach ($misterio as $movie) {
                   if (in_array('Thriller', $movie['genres'])) {
                       echo ' 
                    <tr>
                      <td><img src="' .
                           $movie['image']['medium'] .
                           '"></td>
                      <td>
                      <h2>' .
                           $movie['name'] .
                           '</h2><br> 
                        <br>Rating ' .
                           $movie['rating']['average'] .
                           ' 
                        <br><h6>' .
                           ($genres =
                               implode(', ', $movie['genres']) .
                               '</h6>
                        <br>' .
                               $movie['summary'] .
                               ' </td>
                        </tr>
                     ');
                   }
               } ?>
      </tbody>
    </table>    
  </div>  
</div>











      
          





   
