<?php 
class nuevoNoticiamodelo extends model
{
    public function __construct()
    {
        parent::__construct();
    }


    public function insert_noticia($datos)
    {
        try {
       $query = $this->db->connect()->prepare('INSERT INTO noticia(Titol,Descripcio,Estructura,Imatge) VALUES(:Titol,:Descripcio,:Estructura,:Imatge)');
       $query->execute(['Titol'=>$datos['Titol'],'Descripcio'=>$datos['Descripcio'],'Estructura'=>$datos['Estructura'],'Estructura'=>$datos['Estructura'],'Imatge'=>$datos['Imatge']]);

            return true;
        }
        catch(PDOException $e){
            echo "Aquesta Noticia ja existeix";
            return false;
        }
    }   

}
?>