<?php


namespace m2i\customFramework;


class HomeController
{

    public function helloAction($name, $age){
        //echo "<h1>Hello $name vous avez $age ans</h1>";
        $view = new View();
        $view->setTemplate("../templates/home.php");

        $view->render();
    }

}