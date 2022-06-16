<?php
 
class ConsultaLiniaPedido Extends Controller{
    
    function __construct(){
        parent::__construct(); 
        $this->view->liniaspedido = [];
    }

    function render(){
        $liniaspedido = $this->model->getliniapedido(); //iguales la variable alumnos a el resultat de la funcio de get que fa la query
        $this->view->liniaspedido=$liniaspedido;
        $this->view->render('consulta/indexLiniaPedido');
    }

    function verliniapedido($param=null){
        $ID_Liniapedido=$param[0];
        $liniapedido = $this->model->getByIdliniapedido($ID_Liniapedido);
        session_start();
        $_SESSION['ID_Liniapedido'] = $liniapedido->ID_Liniapedido;
        $this->view->mensaje="";
        $this->view->liniapedido=$liniapedido;
        $this->view->render('consulta/detalleLiniaPedido');
   }

   function actualizarliniapedido(){

       session_start();
       $ID_Liniapedido = $_SESSION['ID_Liniapedido'];
       $ID_Pedido = $_POST['ID_Pedido'];
       $ID_Producte = $_POST['ID_Producte'];
       $Talla = $_POST['Talla'];
       $Quantitat = $_POST['Quantitat'];

       unset($_SESSION['ID_Liniapedido']);

       if($this->model->updateliniapedido(['ID_Liniapedido'=>$ID_Liniapedido,'ID_Pedido'=>$ID_Pedido, 'ID_Producte'=>$ID_Producte,'Talla'=>$Talla,'Quantitat'=>$Quantitat])){
           $liniapedido=new liniapedido();
           $liniapedido->ID_Liniapedido =$ID_Liniapedido; 
           $liniapedido->ID_Pedido =$ID_Pedido; 
           $liniapedido->ID_Producte =$ID_Producte; 
           $liniapedido->Talla =$Talla; 
           $liniapedido->Quantitat =$Quantitat; 



           $this->view->liniapedido=$liniapedido;
           $this->view->mensaje="Linia pedido actualitzada correctament";
       }else{
           $this->view->mensaje="No s'ha actualitzat la linia de pedido";
       }
       $this->view->render('consulta/detalleLiniaPedido');
   }


   function eliminarliniapedido($param =null){
       $ID_Liniapedido=$param[0];

        if($this->model->deleteliniapedido($ID_Liniapedido)){
          
            $mensaje="Linia de pedido eliminada";
        }else{
            $mensaje="No s'ha eliminat la linia de pedido";
        }
        $this->render();
       echo $mensaje;

   }

}
?>
