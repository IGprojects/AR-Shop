<?php


class view{

    function __construct(){
     
       // echo "<p>vistaa</p>";    

    }
    function render($nombre){
        require 'views/' . $nombre . '.php'; //renderitza les vistes
    }
}

?>