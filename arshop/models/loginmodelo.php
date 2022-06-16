<?php 

include_once 'models/usuari.php';
    

class LogInModelo extends model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getinicisessio($GMAIL,$CONTRASENYA){
        $item = new Usuari();
        $query = $this->db->connect()->prepare("Select * from usuari where Gmail=:Gmail");
        
        try{ 
            if($GMAIL=='iferres2002@gmail.com'){
                $query->execute(['Gmail'=>$GMAIL]);
                $numrows = $query->rowCount();
                $buscarpass = $query->fetch();
                
                if(($numrows==1)&&(password_verify($CONTRASENYA,$buscarpass['Contrasenya']))){
                    return 0;

                }else{
                    return 1;
                }
            }
        }catch(PDOException $e){return null;}
    }




    public function getByGmailusuari($id){
        $item = new Usuari();
        $query = $this->db->connect()->prepare("Select * from usuari where Gmail=:Gmail");
        
        try{ 
            $query->execute(['Gmail'=>$id]);
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
    
}
?>