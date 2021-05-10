      <!doctype html>
      <html lang="en" class="h-100">
        <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <meta name="description" content="">
          <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
          <meta name="generator" content="Hugo 0.83.1">
          <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/"> 
          <!-- Bootstrap core CSS -->
          <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
           <!-- Custom styles for this template body --> 
          <link rel="stylesheet" type="text/css" href="css/styles.css"> 
          <!-- Custom styles for this template --> 
          <link rel="stylesheet" type="text/css" href="css/cover.css">   

        </head>

        <body class="d-flex h-100 text-center text-white bg-dark"  >                
            <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column"  >
               <header class="mb-auto">
                <!--navbar de la pag inicial o index-->            
                <div>
                  <a href="?c=index&m=index"> <h3 class="float-md-start mb-0">Series</h3></a>
                    <nav class="nav nav-masthead justify-content-center float-md-end">
                        <a class="nav-link active" aria-current="page" href="?c=index&m=principal">Grilla</a>
                        <a class="nav-link" href="?c=index&m=comedia">Comedia</a>
                        <a class="nav-link" href="?c=index&m=misterio">Misterio</a>
                        <a class="nav-link" href="?c=index&m=accion">Acción & Más</a>
                    </nav>
                </div>
            </header>

              <main class="px-3">
                  <h1>Series y mucho más.</h1>
                  <p class="lead" >"Los dioses se han marchado, nos queda la televisión”. 
                    <br><strong>Manuel Vázquez Montalbán.</strong> </p>
              </main>

            <footer class="mt-auto text-white-50">
              <?php 
              include_once('./view/all/footer.php');
              /*llama el archivo footer.php*/
               ?>                              
             </footer>              
          </div>
   
  </body>
</html>
