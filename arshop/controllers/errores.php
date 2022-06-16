<?php

class errores extends controller{
    
    function __construct(){

parent:: __construct(); //Cridas tot lo que hi ha en el contructor de controller

        $this->view->mensaje = "Hi ha un error al carregar el recurs";
        $this->view->render('errores/index');

    }

}

?>