<?php
 
class NuevoNoticia Extends Controller{
    
    function __construct(){
        parent::__construct();
        $this->view->mensaje="";
    }

    function render(){
        $this->view->render('nuevo/indexNoticia');
        
    }

    function registro_noticia(){
        $Titol = $_POST['Titol'];       
        $Descripcio = $_POST['Descripcio'];
        $Estructura = $_POST['Estructura'];
        $nom_imatge=$_FILES['Imatge']['name'];
        $tamany_imatge=$_FILES['Imatge']['size'];
        $extensio_imatge=$_FILES['Imatge']['type'];
        $ruta_actual=$_FILES['Imatge']['tmp_name'];
        
        $Imatge="C:/xampp/htdocs/arshop/public/fotos/Noticias/".$nom_imatge;
        if($extensio_imatge=='image/jpg'){
            echo "Error el archivo supera la mida maxima o no es una imatge";

        }else{
            move_uploaded_file($ruta_actual,$Imatge);
        }

        $mensaje="";

        if($this->model->insert_noticia(['Titol'=>$Titol, 'Descripcio'=>$Descripcio,'Estructura'=>$Estructura, 'Imatge'=>$Imatge])){
 
            $mensaje= "La Noticia s'ha creat correctament";
        }else{
            $mensaje= "LA Noticia no s'ha a pogut crear";
        }

        $this->view->mensaje=$mensaje;
        $this->render();

    }

}
?>
