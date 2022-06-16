<?php 

include_once 'models/liniapedido.php';

class ConsultaLiniaPedidoModelo extends model
{
    public function __construct()
    {
        parent::__construct();
    }


    //Pedidos
    public function getliniapedido()
    {
      $items = [];//array on es guardaran els alumnes

      try{
          $query = $this->db->connect()->query("Select * from liniapedido");
            while($row = $query->fetch()){
                $item = new LiniaPedido();
                $item->ID_Liniapedido= $row['ID_Liniapedido'];
                $item->ID_Pedido= $row['ID_Pedido'];
                $item->ID_Producte= $row['ID_Producte'];
                $item->Talla= $row['Talla'];
                $item->Quantitat= $row['Quantitat'];
                array_push($items, $item);//Funcio per anar afegint els item a l'array d'items
            }
        return $items;
      
        }
       catch (PDOException $e){
           return[];
       }
    }
    
    public function getByIDliniapedido($id){
        $item = new LiniaPedido();
        $query = $this->db->connect()->prepare("Select * from liniapedido where ID_Liniapedido=:ID_Liniapedido");
        
        try{ 
            $query->execute(['ID_Liniapedido'=>$id]);
            while($row=$query->fetch()){
                $item->ID_Liniapedido= $row['ID_Liniapedido'];
                $item->ID_Pedido= $row['ID_Pedido'];
                $item->ID_Producte= $row['ID_Producte'];
                $item->Talla= $row['Talla'];
                $item->Quantitat= $row['Quantitat'];
            }
            return $item;
        }catch(PDOException $e){return null;}
    }

    public function updateliniapedido($item){
        $query = $this->db->connect()->prepare("update liniapedido set ID_Pedido=:ID_Pedido,ID_Producte=:ID_Producte,Talla=:Talla,Quantitat=:Quantitat where ID_Liniapedido=:ID_Liniapedido");
        try{
            $query->execute([
                'ID_Liniapedido' => $item['ID_Liniapedido'],
                'ID_Pedido' => $item['ID_Pedido'],
                'ID_Producte' => $item['ID_Producte'],
                'Talla' => $item['Talla'],
                'Quantitat' => $item['Quantitat'],
            ]);
            return true;
        }
        catch(PDOException $e){
            return false;
        }
    }
    public function deleteliniapedido($id){
        $query = $this->db->connect()->prepare("delete from liniapedido where ID_Liniapedido=:id");
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