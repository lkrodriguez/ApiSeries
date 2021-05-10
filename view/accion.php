<?php 
include_once('./view/all/utilities.php');
/*archivo donde se encuentran funciones */
?>

<body style="background: linear-gradient(#ADA5A5, #B5B3B3);">
  <div class="container d-flex w-100 h-100 p-3 mx-auto flex-column"  >
        <?php 
          include_once('./view/all/navbar.php');
          /*llama el archivo navbar.php*/
          include_once('./view/imgAleatoria.php');
        /*llama el archivo imgAleatoria.php el cualmuestra las imgs aleatorias */
        ?>
           <div class="container px-4 py-5" id="custom-cards">
              <h2 class="pb-2 border-bottom">ACCION Y MAS</h2>  
                <div class="row mb-2">
                  <!--
                    -eL foreach  llama la informacion de las series con la variable $mostrarpels
                    -en el if se indica el genero de la serie
                  -->
                  <?php foreach ($mostrarpels as $movie) { ?>
                    <?php if (in_array('Action', $movie['genres'])) { ?>                    
                       <div class="col-md-6">
                        <div class="row g-0  overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" style="background-color: #585454" >
                          <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-white-100"> <?php echo ' ' . ($genres = implode(', ', $movie['genres'])) .''; ?> </strong>
                            <h3 class="mb-0"> <?php echo '' . $movie['name']. ''; ?></h3>
                            <div class="mb-1 text-muted"><?php echo '' . $movie['rating']['average'] . ''; ?></div>
                            <p class="card-text mb-auto"> <?php echo '' . $movie['schedule']['time']. ''; ?> </p>
                            <a class="link"  href=" <?php echo ''. $movie['url'] .''; ?> " class="stretched-link">Màs Info</a>
                          </div>
                          <div class="col-auto d-none d-lg-block">
                            <img src=" <?php echo '' . $movie['image']['medium'] . ''; ?> " width="200" height="250" >
                          </div>
                        </div>
                      </div>
                    <?php }   ?>                
                  <?php }  ?>
            </div>            
          </div>

          <footer class="mt-auto text-white-50">
            <?php 
              include_once('./view/all/footer.php');
              /*llama el archivo footer.php*/
            ?>                              
          </footer>
  </div>
         
</body>


