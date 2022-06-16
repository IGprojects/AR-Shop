<?php 

include_once 'models/producte.php';

class consultashoesmodelo extends model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get()
    {
      $items = [];//array on es guardaran els alumnes

      try{
          $query = $this->db->connect()->query("Select * from producte");
            while($row = $query->fetch()){
                $item = new Producte();
                $item->ID_Producte= $row['ID_Producte'];
                $item->Nom_Producte= $row['Nom_Producte'];
                $item->Preu= $row['Preu'];
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
    
    public function getByID($id){
        $item = new Producte();
        $query = $this->db->connect()->prepare("Select * from producte where ID_Producte=:ID_Producte");
        
        try{ 
            $query->execute(['ID_Producte'=>$id]);
            while($row=$query->fetch()){
                $item->ID_Producte= $row['ID_Producte'];
                $item->Nom_Producte= $row['Nom_Producte'];
                $item->Preu= $row['Preu'];
                $item->URL= $row['URL'];
                $item->Tipus= $row['Tipus'];

            }
            return $item;
        }catch(PDOException $e){return null;}
    }

    public function update($item){
        $query = $this->db->connect()->prepare("update producte set Nom_Producte=:Nom_Producte,Preu=:Preu,URL=:URL,Tipus=:Tipus where ID_Producte=:ID_Producte");
        try{
            $query->execute([
                'ID_Producte' => $item['ID_Producte'],
                'Nom_Producte' => $item['Nom_Producte'],
                'Preu' => $item['Preu'],
                'URL' => $item['URL'],
                'Tipus' => $item['Tipus']
            ]);
            return true;
        }
        catch(PDOException $e){
            return false;
        }
    }
    public function delete($id){
        $query = $this->db->connect()->prepare("delete from producte where ID_Producte=:id");
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