<?php 
/*  por medio de URL http://api.tvmaze.com/shows se obtiene toda informacion principal de las series de tvmaza  */
$mostrarpelURL = 'http://api.tvmaze.com/shows';
$mostrarpelJSON = file_get_contents($mostrarpelURL);/*se pasa a Json*/
$mostrarpels = json_decode($mostrarpelJSON, true);/*$mostrarpels esta variables se implemeta en las diferetes pags o archivos para llamar la informacion*/





/*
llama las imagenes del de manera aleatoria, asignando id
*/
$imglURL = 'http://api.tvmaze.com/shows/1/images'; /*con esta URL se obtiene o consume la informacion de los posters de las series*/
$imglJSON = file_get_contents($mostrarpelURL);
$imgs = json_decode($mostrarpelJSON, true);

$img[0] = $imgs['0']['image']['medium'];
$img[1] = $imgs['1']['image']['medium'];
$img[2] = $imgs['2']['image']['medium'];
$img[3] = $imgs['3']['image']['medium'];
$img[4] = $imgs['4']['image']['medium'];
$img[5] = $imgs['5']['image']['medium'];
$img[6] = $imgs['6']['image']['medium'];
$img[7] = $imgs['7']['image']['medium'];
$img[8] = $imgs['8']['image']['medium'];
$img[9] = $imgs['9']['image']['medium'];
$img[10] = $imgs['10']['image']['medium'];
$img[11] = $imgs['11']['image']['medium'];
$img[12] = $imgs['15']['image']['medium'];
$img[13] = $imgs['20']['image']['medium'];
$img[14] = $imgs['21']['image']['medium'];
$img[15] = $imgs['30']['image']['medium'];
$img[16] = $imgs['40']['image']['medium'];
$img[17] = $imgs['50']['image']['medium'];
$img[18] = $imgs['18']['image']['medium'];
$img[19] = $imgs['19']['image']['medium'];
$img[20] = $imgs['22']['image']['medium'];
$img[21] = $imgs['33']['image']['medium'];
$img[22] = $imgs['14']['image']['medium'];
$img[23] = $imgs['44']['image']['medium'];
$img[24] = $imgs['15']['image']['medium'];
$img[25] = $imgs['45']['image']['medium'];
$img[26] = $imgs['16']['image']['medium'];
$img[27] = $imgs['88']['image']['medium'];
$img[28] = $imgs['100']['image']['medium'];
$img[29] = $imgs['90']['image']['medium'];

/*rand se indica que ID va llamar del apis*/
$num = rand(0, 29);


/*fin de imgs aleatorias*/


/*footer*/
//funcion sin parametros que muestra el año y el mes actual en el footer
function say_year(){
  return date(' Y ' . ' M ' );
}
/*fin footer */





 ?>