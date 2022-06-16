<?php 
class registrermodelo extends model
{
    public function __construct()
    {
        parent::__construct();
    }


    public function registrar_usuari($datos)
    {
        try {
       $query = $this->db->connect()->prepare('INSERT INTO usuari(Nom_Usuari,Nombre_Apellidos,Gmail,Contrasenya,Tel,Adressa,Provincia,Pais,Ciutat,CP) VALUES(:Nom_Usuari,:Nombre_Apellidos,:Gmail,:Contrasenya,:Tel,:Adressa,:Provincia,:Pais,:Ciutat,:CP)');
       $query->execute(['Nom_Usuari'=>$datos['Nom_Usuari'],'Nombre_Apellidos'=>$datos['Nombre_Apellidos'],'Gmail'=>$datos['Gmail'],'Contrasenya'=>$datos['Contrasenya'],'Tel'=>$datos['Tel'],'Adressa'=>$datos['Adressa'],'Provincia'=>$datos['Provincia'],'Pais'=>$datos['Pais'],'Ciutat'=>$datos['Ciutat'],'CP'=>$datos['CP']]);

            return true;
        }
        catch(PDOException $e){
            echo "Aquest usuari ja existeix";
            return false;
        }
    }   


}
?>