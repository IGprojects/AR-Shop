<?php
 
class ConsultaClothes Extends Controller{
    
    function __construct(){
        parent::__construct(); 
        $this->view->productes = [];
    }

    function render(){
        $productes = $this->model->getClothes(); //iguales la variable alumnos a el resultat de la funcio de get que fa la query
        $this->view->productes=$productes;
        $this->view->render('consulta/indexClothes');
    }
}
?>
