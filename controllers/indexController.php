<?php


class indexController{

    public function index (){

        require_once('view/all/header.php');
        require_once('view/index.php');
        require_once('view/all/footer.php');
    }

    public function accion (){

        require_once('view/all/header.php');
        require_once('view/accion.php');
        require_once('view/all/footer.php');
    }

    public function misterio (){

        require_once('view/all/header.php');
        require_once('view/misterio.php');
        require_once('view/all/footer.php');
    }


    public function comedia (){

        require_once('view/all/header.php');
        require_once('view/comedia.php');
        require_once('view/all/footer.php');
    }

        public function principal (){

        require_once('view/all/header.php');
        require_once('view/principal.php');
        require_once('view/all/footer.php');
    }





}

?>