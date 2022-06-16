<?php 

include_once 'models/pedido.php';

class ConsultaPedidoModelo extends model
{
    public function __construct()
    {
        parent::__construct();
    }


    //Pedidos
    public function getpedido()
    {
      $items = [];//array on es guardaran els alumnes

      try{
          $query = $this->db->connect()->query("Select * from pedido");
            while($row = $query->fetch()){
                $item = new Pedido();
                $item->ID_Pedido= $row['ID_Pedido'];
                $item->ID_Usuari= $row['ID_Usuari'];
                $item->DataSortida= $row['DataSortida'];
                $item->DataArribada= $row['DataArribada'];
                $item->Estat= $row['Estat'];
                array_push($items, $item);//Funcio per anar afegint els item a l'array d'items
            }
        return $items;
      
        }
       catch (PDOException $e){
           return[];
       }
    }
    
    public function getByIDpedido($id){
        $item = new Pedido();
        $query = $this->db->connect()->prepare("Select * from pedido where ID_Pedido=:ID_Pedido");
        
        try{ 
            $query->execute(['ID_Pedido'=>$id]);
            while($row=$query->fetch()){
                $item->ID_Pedido= $row['ID_Pedido'];
                $item->ID_Usuari= $row['ID_Usuari'];
                $item->DataSortida= $row['DataSortida'];
                $item->DataArribada= $row['DataArribada'];
                $item->Estat= $row['Estat'];
            }
            return $item;
        }catch(PDOException $e){return null;}
    }

    public function updatepedido($item){
        $query = $this->db->connect()->prepare("update pedido set ID_Usuari=:ID_Usuari,DataSortida=:DataSortida,DataArribada=:DataArribada,Estat=:Estat where ID_Pedido=:ID_Pedido");
        try{
            $query->execute([
                'ID_Pedido' => $item['ID_Pedido'],
                'ID_Usuari' => $item['ID_Usuari'],
                'DataSortida' => $item['DataSortida'],
                'DataArribada' => $item['DataArribada'],
                'Estat' => $item['Estat'],
            ]);
            return true;
        }
        catch(PDOException $e){
            return false;
        }
    }
    public function deletepedido($id){
        $query = $this->db->connect()->prepare("delete from pedido where ID_Pedido=:id");
        try{
            $query->execute([
                'id'=>$id,
            ]);
            return true;
        }
        catch(PDOException $e){
            return false;
        }

    }



}
?>