<?php
 
class ConsultaProducteShoes Extends Controller{
    
    function __construct(){
        parent::__construct(); 
        $this->view->productes = [];
    }

    function render(){
        $productes = $this->model->get(); //iguales la variable alumnos a el resultat de la funcio de get que fa la query
        $this->view->productes=$productes;
        $this->view->render('consulta/indexShoes');
    }

    function verproducte($param=null){
        $ID_Producte=$param[0];
        $producte = $this->model->getById($ID_Producte);
        session_start();
        $_SESSION['ID_Producte'] = $producte->ID_Producte;
        $this->view->mensaje="";
        $this->view->producte=$producte;
        $this->view->render('consulta/detalleProducte');
   }

   function actualizarproducte(){

       session_start();
       $ID_Producte = $_SESSION['ID_Producte'];
       $Nom_Producte = $_POST['Nom_Producte'];
       $Preu = $_POST['Preu'];
       $URL = $_POST['URL'];
       $Tipus = $_POST['Tipus'];

       unset($_SESSION['ID_Producte']);

       if($this->model->update(['ID_Producte'=>$ID_Producte,'Nom_Producte'=>$Nom_Producte, 'Preu'=>$Preu,'URL'=>$URL,'Tipus'=>$Tipus])){
           $producte=new Producte();
           $producte->ID_Producte =$ID_Producte; 
           $producte->Nom_Producte = $Nom_Producte;
           $producte->Preu =$Preu;
           $producte->URL =$URL;
           $producte->Tipus =$Tipus;

           $this->view->producte=$producte;
           $this->view->mensaje="Producte actualitzat correctament";
       }else{
           $this->view->mensaje="No se ha actalizado el producte";
       }
       $this->view->render('consulta/detalleProducte');
   }
   function eliminarproducte($param =null){
       $ID_Producte=$param[0];

        if($this->model->delete($ID_Producte)){
          
            $mensaje="Producte eliminat";
        }else{
            $mensaje="No s'ha eliminat el producte";
        }
        $this->render();
       echo $mensaje;

   }

}
?>
