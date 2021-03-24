<?php
$mostrarpelURL = 'http://api.tvmaze.com/shows';
$mostrarpelJSON = file_get_contents($mostrarpelURL);
$mostrarpels = json_decode($mostrarpelJSON, true);

$imglURL = 'http://api.tvmaze.com/shows/1/images';
$imglJSON = file_get_contents($mostrarpelURL);
$imgs = json_decode($mostrarpelJSON, true);

$img[0] = $imgs['0']['image']['medium'];
$img[1] = $imgs['1']['image']['medium'];
$img[2] = $imgs['2']['image']['medium'];
$img[3] = $imgs['3']['image']['medium'];
$img[4] = $imgs['4']['image']['medium'];
$img[5] = $imgs['5']['image']['medium'];

$im[6] = $imgs['6']['image']['medium'];
$im[7] = $imgs['7']['image']['medium'];
$im[8] = $imgs['8']['image']['medium'];
$im[9] = $imgs['9']['image']['medium'];
$im[10] = $imgs['10']['image']['medium'];
$im[11] = $imgs['11']['image']['medium'];

$ims[12] = $imgs['15']['image']['medium'];
$ims[13] = $imgs['20']['image']['medium'];
$ims[14] = $imgs['21']['image']['medium'];
$ims[15] = $imgs['30']['image']['medium'];
$ims[16] = $imgs['40']['image']['medium'];
$ims[17] = $imgs['50']['image']['medium'];

$i[18] = $imgs['18']['image']['medium'];
$i[19] = $imgs['19']['image']['medium'];
$i[20] = $imgs['22']['image']['medium'];
$i[21] = $imgs['33']['image']['medium'];
$i[22] = $imgs['14']['image']['medium'];
$i[23] = $imgs['44']['image']['medium'];

$ig[24] = $imgs['15']['image']['medium'];
$ig[25] = $imgs['45']['image']['medium'];
$ig[26] = $imgs['16']['image']['medium'];
$ig[27] = $imgs['88']['image']['medium'];
$ig[28] = $imgs['100']['image']['medium'];
$ig[29] = $imgs['90']['image']['medium'];

$num = rand(0, 5);
$nums = rand(6, 11);
$n = rand(12, 17);
$ni = rand(18, 23);
$ng = rand(24, 29);


?>
    <div class="container">
      <div class="row">
        <table>
          <tbody>
            <tr>
              <td><img src="<?php echo $img[$num]; ?>"></td>
              <td><img src="<?php echo $im[$nums]; ?>"></td>
              <td><img src="<?php echo $ims[$n]; ?>"></td>
              <td><img src="<?php echo $i[$ni]; ?>"></td>
              <td><img src="<?php echo $ig[$ng]; ?>"></td>
            </tr>
          </tbody>
        </table>              
      </div>    


      <div class="row">   
        <table class="table">
          <h1 >Lista de Series</h1>           
          <tbody>
            <?php foreach ($mostrarpels as $movie) {
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
                    $genres = implode(", ", $movie['genres']).
                    '</h6>
              <br>' .
                    $movie['summary'] .
                    ' </td>
            </tr>
                  ';
            } ?>
          </tbody>         
        </table>    
            
      </div>      
    </div>