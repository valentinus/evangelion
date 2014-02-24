<?php
/**
 * User: Freddy
 * Date: 2/24/14
 */

class Twig{
    function display($destination,$data=""){
        include_once "lib/twig1_15/lib/Twig/Autoloader.php";

        try {
            Twig_Autoloader::register();
            $loader = new Twig_Loader_Filesystem('themes/joy');
            $twig = new Twig_Environment($loader);
            if($data == "")
                echo $twig->render($destination);
            else
                echo $twig->render($destination,$data);
        } catch(Exception $e) {
            //mail("fkresna@gmail.com","Twig error  $destination","$e");
            echo $e;
        }
    }
}