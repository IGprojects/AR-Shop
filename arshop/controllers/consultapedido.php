<?php
 
class ConsultaPedido Extends Controller{
    
    function __construct(){
        parent::__construct(); 
        $this->view->pedidos = [];
    }

    function render(){
        $pedidos = $this->model->getpedido(); //iguales la variable alumnos a el resultat de la funcio de get que fa la query
        $this->view->pedidos=$pedidos;
        $this->view->render('consulta/indexPedido');
    }

    function verpedido($param=null){
        $ID_Pedido=$param[0];
        $pedido = $this->model->getByIDpedido($ID_Pedido);
        session_start();
        $_SESSION['ID_Pedido'] = $pedido->ID_Pedido;
        $this->view->mensaje="";
        $this->view->pedido=$pedido;
        $this->view->render('consulta/detallePedido');
   }

   function actualizarpedido(){

       session_start();
       $ID_Pedido = $_SESSION['ID_Pedido'];
       $ID_Usuari = $_POST['ID_Usuari'];
       $DataSortida = $_POST['DataSortida'];
       $DataArribada = $_POST['DataArribada'];
       $Estat = $_POST['Estat'];
       unset($_SESSION['ID_Pedido']);

       if($this->model->updatepedido(['ID_Pedido'=>$ID_Pedido,'ID_Usuari'=>$ID_Usuari,'DataSortida'=>$DataSortida,'DataArribada'=>$DataArribada,'Estat'=>$Estat])){
           $pedido=new Pedido();
           $pedido->ID_Pedido =$ID_Pedido; 
           $pedido->ID_Usuari =$ID_Usuari; 
           $pedido->DataSortida =$DataSortida; 
           $pedido->DataArribada =$DataArribada; 
           $pedido->Estat =$Estat; 



           $this->view->pedido=$pedido;
           $this->view->mensaje="Pedido actualitzat correctament";
       }else{
           $this->view->mensaje="No se ha actalizado el pedido";
       }
       $this->view->render('consulta/detallePedido');
   }
   function eliminarpedido($param =null){
       $ID_Pedido=$param[0];

        if($this->model->deletepedido($ID_Pedido)){
          
            $mensaje="Pedido eliminat";
        }else{
            $mensaje="No s'ha eliminat el pedido";
        }
        $this->render();
       echo $mensaje;

   }

}
?>
