<?php
 
class ConsultaUsuari Extends Controller{
    
    function __construct(){
        parent::__construct(); 
        $this->view->usuaris = [];
    }

    function render(){
        $usuaris = $this->model->getusuari(); //iguales la variable alumnos a el resultat de la funcio de get que fa la query
        $this->view->usuaris=$usuaris;
        $this->view->render('consulta/indexUsuari');
    }

    function verusuari($param=null){
        $ID_Usuari=$param[0];
        $usuari = $this->model->getByIDusuari($ID_Usuari);
        session_start();
        $_SESSION['ID_Usuari'] = $usuari->ID_Usuari;
        $this->view->mensaje="";
        $this->view->usuari=$usuari;
        $this->view->render('consulta/detalleUsuari');
   }

   function actualizarusuari(){

       session_start();
       $ID_Usuari = $_SESSION['ID_Usuari'];
       $Nom_Usuari = $_POST['Nom_Usuari'];
       $Nombre_Apellidos = $_POST['Nombre_Apellidos'];
       $Gmail = $_POST['Gmail'];
       $Contrasenya = $_POST['Contrasenya'];
       $Tel = $_POST['Tel'];
       $Adressa = $_POST['Adressa'];
       $Provincia = $_POST['Provincia'];
       $Pais = $_POST['Pais'];
       $Ciutat = $_POST['Ciutat'];
       $CP = $_POST['CP'];
       $Moneda = $_POST['Moneda'];

       unset($_SESSION['ID_Usuari']);

       if($this->model->updateusuari(['ID_Usuari'=>$ID_Usuari,'Nom_Usuari'=>$Nom_Usuari, 'Nombre_Apellidos'=>$Nombre_Apellidos,'Gmail'=>$Gmail,'Contrasenya'=>$Contrasenya,'Tel'=>$Tel,'Adressa'=>$Adressa,'Provincia'=>$Provincia,'Pais'=>$Pais,'Ciutat'=>$Ciutat,'CP'=>$CP,'Moneda'=>$Moneda])){
           $usuari=new Usuari();
           $usuari->ID_Usuari =$ID_Usuari; 
           $usuari->Nom_Usuari =$Nom_Usuari; 
           $usuari->Nombre_Apellidos =$Nombre_Apellidos; 
           $usuari->Gmail =$Gmail; 
           $usuari->Contrasenya =$Contrasenya; 
           $usuari->Tel =$Tel; 
           $usuari->Adressa =$Adressa; 
           $usuari->Provincia =$Provincia; 
           $usuari->Pais =$Pais; 
           $usuari->Ciutat =$Ciutat; 
           $usuari->CP =$CP; 
           $usuari->Moneda =$Moneda; 


           $this->view->usuari=$usuari;
           $this->view->mensaje="Usuari actualitzat correctament";
       }else{
           $this->view->mensaje="No se ha actalizado el usuari";
       }
       $this->view->render('consulta/detalleUsuari');
   }



   function eliminarusuari($param =null){
       $ID_Usuari=$param[0];

        if($this->model->deleteusuari($ID_Usuari)){
          
            $mensaje="Usuari eliminat";
        }else{
            $mensaje="No s'ha eliminat l'usuari";
        }
        $this->render();
       echo $mensaje;

   }

}
?>
