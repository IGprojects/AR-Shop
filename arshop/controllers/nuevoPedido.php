<?php
 
class NuevoPedido Extends Controller{
    
    function __construct(){
        parent::__construct();
        $this->view->mensaje="";
    }

    function render(){
        $this->view->render('nuevo/indexPedido');
        
    }

}
?>
