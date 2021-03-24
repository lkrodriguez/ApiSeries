<?php
     $comedialURL = 'http://api.tvmaze.com/shows';
     $comediaJSON = file_get_contents($comedialURL);
     $comedia = json_decode($comediaJSON, true);
?>         
 <div class="container">
    <div class="row">
      <table>
        <h1>Series De Comedia</h1>
        <tbody>

           <?php foreach ($comedia as $movie) {
                   if (in_array('Comedy', $movie['genres'])) {
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
