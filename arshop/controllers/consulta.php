<?php
 
class Consulta Extends Controller{
    
    function __construct(){
        parent::__construct(); 
        $this->view->productes = [];
    }

    function render(){
        //El model funciona de la sseguent manera agafa el nom del fitxer en aquest "Consulta" 
        //i li afageix modelo al final fent que quan fas model agafa el nom del fitxer consultamodelo
        //que es on anira a buscar la funcio get
        
        $productes = $this->model->get(); //iguales la variable alumnos a el resultat de la funcio de get que fa la query
        $this->view->productes=$productes;
        $this->view->render('consulta/indexProducte');
        
    }
    
    function inicisessio($param=null){
        session_start();
        $Gmail = $_POST['Gmail'];
        $Contrasenya = $_POST['Contrasenya'];
        $resposta = $this->model->getinicisessio($Gmail,$Contrasenya);
        if($resposta==1){
            $this->view->render('consulta/detalleProducte');
        }else{
            $this->view->render('LogIn');
        }
   }

 

  





}
?>
