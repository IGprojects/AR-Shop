<?php
 
class Registrer Extends Controller{
    
    function __construct(){
        parent::__construct(); 
    }

    function render(){
        //El model funciona de la sseguent manera agafa el nom del fitxer en aquest "Consulta" 
        //i li afageix modelo al final fent que quan fas model agafa el nom del fitxer consultamodelo
        //que es on anira a buscar la funcio get
        
        $this->view->render('Registrer');
        
    }
    
    function Registrar($param=null){
        $Nom_Usuari = $_POST['Nom_Usuari'];
        $Nombre_Apellidos = $_POST['Nombre_Apellidos'];       
        $Gmail = $_POST['Gmail'];
        $Contrasenya = $_POST['Contrasenya'];
        $Contrasenya_Hasheada=password_hash($Contrasenya,PASSWORD_DEFAULT);
        $Tel = $_POST['Tel'];       
        $Adressa = $_POST['Adressa'];
        $Provincia = $_POST['Provincia'];
        $Pais = $_POST['Pais'];       
        $Ciutat = $_POST['Ciutat'];
        $CP = $_POST['CP'];

        if($this->model->registrar_usuari(
            ['Nom_Usuari'=>$Nom_Usuari, 
            'Nombre_Apellidos'=>$Nombre_Apellidos,
            'Gmail'=>$Gmail,
            'Contrasenya'=>$Contrasenya_Hasheada,
            'Tel'=>$Tel,
            'Adressa'=>$Adressa,
            'Provincia'=>$Provincia,
            'Pais'=>$Pais,
            'Ciutat'=>$Ciutat,
            'CP'=>$CP]
        )){
 
            $mensaje= "El Usuari s'ha creat correctament";
        }else{
            $mensaje= "El Usuari no s'ha a pogut crear";
        }

        $this->view->mensaje=$mensaje;
        $this->render();
   }


}
?>
