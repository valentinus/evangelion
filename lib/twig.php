<?php
/**
 * User: Freddy
 */

class Twig{
    function display($destination,$data=""){
        include_once "vendor/twig/twig/lib/Twig/Autoloader.php";

        try {
            Twig_Autoloader::register();
            $loader = new Twig_Loader_Filesystem('themes/joy');
            $twig = new Twig_Environment($loader);
            if($data == "")
                echo $twig->render($destination);
            else
                echo $twig->render($destination,$data);
        } catch(Exception $e) {
            echo $e;
        }
    }
}
