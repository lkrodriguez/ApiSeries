<?php


class indexController{

    public function index (){

        require_once('view/all/header.php');
        require_once('view/index.php');
        require_once('view/all/footer.php');
    }

    public function movies (){

        require_once('view/all/header.php');
        require_once('view/movies.php');
        require_once('view/all/footer.php');
    }





}

?>