<?php 

include_once 'models/producte.php';

class ConsultaClothesModelo extends model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getClothes()
    {
      $items = [];//array on es guardaran els alumnes

      try{
          $query = $this->db->connect()->query("Select * from producte where Tipus=1");
            while($row = $query->fetch()){
                $item = new Producte();
                $item->ID_Producte= $row['ID_Producte'];
                $item->Nom_Producte= $row['Nom_Producte'];
                $item->Preu= $row['Preu'];
                $item->Stock= $row['Stock'];
                $item->URL= $row['URL'];
                $item->Tipus= $row['Tipus'];

                array_push($items, $item);//Funcio per anar afegint els item a l'array d'items
            }
        return $items;
      
        }
       catch (PDOException $e){
           return[];
       }
    }
    
 
}
?>