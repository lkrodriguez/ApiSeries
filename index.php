
<?php

if (!isset($_REQUEST['c'])) {
    $controller="index";
    require_once('controllers/'.$controller.'controller.php');
    $controller=$controller.'controller';
    $controller=new $controller();
    $controller->index();
} else{
    $controller=$_REQUEST['c'];
    require_once('controllers/'.$controller.'controller.php');
    $controller=$controller.'controller';
    $controller=new $controller();
    $metodo=isset($_REQUEST['m']) ? $_REQUEST['m'] : 'index';
    call_user_func(array($controller,$metodo));
}








?>