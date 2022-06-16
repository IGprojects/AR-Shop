<?php 
class nuevomodelo extends model
{
    public function __construct()
    {
        parent::__construct();
    }


    public function insert_usuari($datos)
    {
        try {
       $query = $this->db->connect()->prepare('INSERT INTO usuari(Nom_Usuari,Nombre_Apellidos,Gmail,Contrasenya,Tel,Adressa,Provincia,Pais,Ciutat,CP,Moneda) VALUES(:Nom_Usuari,:Nombre_Apellidos,:Gmail,:Contrasenya,:Tel,:Adressa,:Provincia,:Pais,:Ciutat,:CP,:Moneda)');
       $query->execute(['Nom_Usuari'=>$datos['Nom_Usuari'],'Nombre_Apellidos'=>$datos['Nombre_Apellidos'],'Gmail'=>$datos['Gmail'],'Contrasenya'=>$datos['Contrasenya'],'Tel'=>$datos['Tel'],'Adressa'=>$datos['Adressa'],'Provincia'=>$datos['Provincia'],'Pais'=>$datos['Pais'],'Ciutat'=>$datos['Ciutat'],'CP'=>$datos['CP'],'Moneda'=>$datos['Moneda']]);

            return true;
        }
        catch(PDOException $e){
            echo "Aquest usuari ja existeix";
            return false;
        }
    }   


    public function insert_producte($datos)
    {
        try {
       $query = $this->db->connect()->prepare('INSERT INTO producte(Nom_Producte,Preu,URL,Tipus) VALUES(:Nom_Producte,:Preu,:URL,:Tipus)');
       $query->execute(['Nom_Producte'=>$datos['Nom_Producte'],'Preu'=>$datos['Preu'],'URL'=>$datos['URL'],'Tipus'=>$datos['Tipus']]);

            return true;
        }
        catch(PDOException $e){
            echo "Aquest producte ja existeix";
            return false;
        }
    }   

    public function insert_pedido($datos)
    {
        try {
       $query = $this->db->connect()->prepare('INSERT INTO pedido(ID_Usuari,DataSortida,DataArribada,Estat) VALUES(:ID_Usuari,:DataSortida,:DataArribada,:Estat)');
       $query->execute(['ID_Usuari'=>$datos['ID_Usuari'],'DataSortida'=>$datos['DataSortida'],'DataArribada'=>$datos['DataArribada'],'Estat'=>$datos['Estat']]);

            return true;
        }
        catch(PDOException $e){
            echo "Aquest pedido ja existeix";
            return false;
        }
    }   


    public function insert_liniapedido($datos)
    {
        try {
       $query = $this->db->connect()->prepare('INSERT INTO liniapedido(ID_Pedido,ID_Producte,Quantitat) VALUES(:ID_Pedido,:ID_Producte,:Quantitat)');
       $query->execute(['ID_Pedido'=>$datos['ID_Pedido'],'ID_Producte'=>$datos['ID_Producte'],'Quantitat'=>$datos['Quantitat']]);

            return true;
        }
        catch(PDOException $e){
            echo "Aquesta linia de pedido ja existeix";
            return false;
        }
    }   
}
?>