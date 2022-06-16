<?php

class ajuda extends controller{
    
    function __construct(){

    parent:: __construct(); //Cridas tot lo que hi ha en el contructor de controller

       // echo "<p>ajuda</p>";    

    }

    function render(){
        $this->view->render('ajuda/index');

    }

}

?>