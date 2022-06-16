<?php 

include_once 'models/noticia.php';

class ConsultaNoticiaModelo extends model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getNoticies()
    {
      $items = [];//array on es guardaran els alumnes

      try{
          $query = $this->db->connect()->query("Select * from noticia");
            while($row = $query->fetch()){
                $item = new Noticia();
                $item->Titol= $row['Titol'];
                $item->Descripcio= $row['Descripcio'];
                $item->Estructura= $row['Estructura'];
                $item->Imatge= $row['Imatge'];
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