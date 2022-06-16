<?php
class Main extends controller{ //Heretas tot lo que hi ha en el fitxer controller
    
    function __construct(){

        parent:: __construct(); //Cridas tot lo que hi ha en el contructor de controller
        //echo "<p>holaaa</p>"; 
   
    }
  
    function render(){
        $this->view->render('main/index');
    }

    function saludo(){   
        echo "<p>Has executat el mètode saludo</p>";
    }

}

?>