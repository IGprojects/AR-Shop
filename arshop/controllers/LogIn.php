<?php
 
class LogIn Extends Controller{
    
    function __construct(){
        parent::__construct(); 
    }

    function render(){
        //El model funciona de la sseguent manera agafa el nom del fitxer en aquest "Consulta" 
        //i li afageix modelo al final fent que quan fas model agafa el nom del fitxer consultamodelo
        //que es on anira a buscar la funcio get
        
        $this->view->render('LogIn');
        
    }

    function verusuari($param=null){
        $Gmail=$param[0];
        $usuari = $this->model->getByIDusuari($Gmail);
        session_start();
        $_SESSION['ID_Usuari'] = $usuari->ID_Usuari;
        $this->view->mensaje="";
        $this->view->usuari=$ID_Usuari;
        $this->view->render('user/Dashboard_Usuari');
        }
    



    function inicisessio($param=null){
        session_start();
        $Gmail = $_POST['Gmail'];
        $Contrasenya = $_POST['Contrasenya'];
        
        $resposta = $this->model->getinicisessio($Gmail,$Contrasenya);
        if($resposta==0){
            $this->view->render('Dashboard');
        }else{
            $this->view->render('LogIn');
        }
   }

   

}
?>
