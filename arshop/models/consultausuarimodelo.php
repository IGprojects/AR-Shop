<?php 

include_once 'models/usuari.php';

class ConsultaUsuariModelo extends model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getusuari()
    {
      $items = [];

      try{
          $query = $this->db->connect()->query("Select * from usuari");
            while($row = $query->fetch()){
                $item = new Usuari();
                $item->ID_Usuari= $row['ID_Usuari'];
                $item->Nom_Usuari= $row['Nom_Usuari'];
                $item->Nombre_Apellidos= $row['Nombre_Apellidos'];
                $item->Gmail= $row['Gmail'];
                $item->Contrasenya= $row['Contrasenya'];
                $item->Tel= $row['Tel'];
                $item->Adressa= $row['Adressa'];
                $item->Provincia= $row['Provincia'];
                $item->Pais= $row['Pais'];
                $item->Ciutat= $row['Ciutat'];
                $item->CP= $row['CP'];
                $item->Moneda= $row['Moneda'];        

                array_push($items, $item);//Funcio per anar afegint els item a l'array d'items
            }
        return $items;
      
        }
       catch (PDOException $e){
           return[];
       }
    }
    
    public function getByIDusuari($id){
        $item = new Usuari();
        $query = $this->db->connect()->prepare("Select * from usuari where ID_Usuari=:ID_Usuari");
        
        try{ 
            $query->execute(['ID_Usuari'=>$id]);
            while($row=$query->fetch()){
                $item->ID_Usuari= $row['ID_Usuari'];
                $item->Nom_Usuari= $row['Nom_Usuari'];
                $item->Nombre_Apellidos= $row['Nombre_Apellidos'];
                $item->Gmail= $row['Gmail'];
                $item->Contrasenya= $row['Contrasenya'];
                $item->Tel= $row['Tel'];
                $item->Adressa= $row['Adressa'];
                $item->Provincia= $row['Provincia'];
                $item->Pais= $row['Pais'];
                $item->Ciutat= $row['Ciutat'];
                $item->CP= $row['CP'];
                $item->Moneda= $row['Moneda'];
            }
            return $item;
        }catch(PDOException $e){return null;}
    }

    public function updateusuari($item){
        $query = $this->db->connect()->prepare("update usuari set Nom_Usuari=:Nom_Usuari,Nombre_Apellidos=:Nombre_Apellidos,Gmail=:Gmail,Contrasenya=:Contrasenya,Tel=:Tel,Adressa=:Adressa,Provincia=:Provincia,Pais=:Pais,Ciutat=:Ciutat,CP=:CP,Moneda=:Moneda where ID_Usuari=:ID_Usuari");
        try{
            $query->execute([
                'ID_Usuari' => $item['ID_Usuari'],
                'Nom_Usuari' => $item['Nom_Usuari'],
                'Nombre_Apellidos' => $item['Nombre_Apellidos'],
                'Gmail' => $item['Gmail'],
                'Contrasenya' => $item['Contrasenya'],
                'Tel' => $item['Tel'],
                'Adressa' => $item['Adressa'],
                'Provincia' => $item['Provincia'],
                'Pais' => $item['Pais'],
                'Ciutat' => $item['Ciutat'],
                'CP' => $item['CP'],
                'Moneda' => $item['Moneda']
            ]);
            return true;
        }
        catch(PDOException $e){
            return false;
        }
    }



    public function deleteusuari($id){
        $query = $this->db->connect()->prepare("delete from usuari where ID_Usuari=:id");
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