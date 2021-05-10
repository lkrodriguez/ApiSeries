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
              <h2 class="pb-2 border-bottom">CARTELERA</h2>
              <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
                <!--
                  este foreach todas las series independientemente del genero y toda su informacion
                -->
                <?php foreach ($mostrarpels as $movie) { ?>                
                <div class="col">                  
                  <div class="card card-cover h-100 overflow-hidden text-white bg-red rounded-5 shadow-lg     shadow-lg p-3 mb-5   " style="background-image: url('<?php echo' ' .$movie['image']['medium'] .''; ?>');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                      <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"></h2>
                      <ul class="d-flex list-unstyled mt-auto">                        
                        <li class="d-flex align-items-center me-3">
                          <a  style="text-decoration:none  " href="<?php echo' ' .$movie['officialSite'].''; ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red " class="bi bi-three-dots" viewBox="0 0 16 16">
                              <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                            </svg>
                          </a> 
                        </li>                                               
                      </ul>
                    </div>
                  </div>                  
                </div>       
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
