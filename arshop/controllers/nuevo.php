<?php
 
class Nuevo Extends Controller{
    
    function __construct(){
        parent::__construct();
        $this->view->mensaje="";
    }

    function render(){
        $this->view->render('nuevo/indexProducte');
        
    }

    function registro_usuari(){
        $Nom_Usuari = $_POST['Nom_Usuari'];
        $Nombre_Apellidos = $_POST['Nombre_Apellidos'];       
        $Gmail = $_POST['Gmail'];
        $Contrasenya = $_POST['Contrasenya'];
        $Contrasenya_Hasheada=password_hash($Contrasenya,PASSWORD_DEFAULT);
        //echo($Contrasenya_Hasheada);
        $Tel = $_POST['Tel'];       
        $Adressa = $_POST['Adressa'];
        $Provincia = $_POST['Provincia'];
        $Pais = $_POST['Pais'];       
        $Ciutat = $_POST['Ciutat'];
        $CP = $_POST['CP'];
        $Moneda = $_POST['Moneda'];       

        if($this->model->insert_usuari(
            ['Nom_Usuari'=>$Nom_Usuari, 
            'Nombre_Apellidos'=>$Nombre_Apellidos,
            'Gmail'=>$Gmail,
            'Contrasenya'=>$Contrasenya_Hasheada,
            'Tel'=>$Tel,
            'Adressa'=>$Adressa,
            'Provincia'=>$Provincia,
            'Pais'=>$Pais,
            'Ciutat'=>$Ciutat,
            'CP'=>$CP,
            'Moneda'=>$Moneda]
        )){
 
            $mensaje= "El Usuari s'ha creat correctament ";
        }else{
            $mensaje= "El Usuari no s'ha a pogut crear";
        }

        $this->view->mensaje=$mensaje;
        $this->view->render('nuevo/indexUsuari');

    }


    function registro_producte(){
       // echo $_FILES['Foto']['name'];
        //$ID_Producte = $_POST['ID_Producte'];
        $Nom_Producte = $_POST['Nom_Producte'];
        $Preu = $_POST['Preu'];       
        //$URL = $_POST['URL'];
        //VARIABLES DE L'IMATGE
        $nom_imatge=$_FILES['URL']['name'];
        $tamany_imatge=$_FILES['URL']['size'];
        $extensio_imatge=$_FILES['URL']['type'];
        $ruta_actual=$_FILES['URL']['tmp_name'];
        $Tipus = $_POST['Tipus'];
        
        $URL="C:/xampp/htdocs/arshop/public/fotos/".$nom_imatge;
        if($extensio_imatge=='image/jpg'){
            echo "Error el archivo supera la mida maxima o no es una imatge";

        }else{
            move_uploaded_file($ruta_actual,$URL);
        }

        $mensaje="";

       // if($this->model->insert(['ID_Producte'=>$ID_Producte,'Nom_Producte'=>$Nom_Producte, 'Preu'=>$Preu,'Stock'=>$Stock, 'URL'=>$URL])){
        if($this->model->insert_producte(['Nom_Producte'=>$Nom_Producte, 'Preu'=>$Preu, 'URL'=>$URL, 'Tipus'=>$Tipus])){
 
            $mensaje= "El producte s'ha creat correctament";
        }else{
            $mensaje= "El producte no s'ha a pogut crear";
        }

        $this->view->mensaje=$mensaje;
        $this->render();

    }


    function registro_pedido(){
         $ID_Usuari = $_POST['ID_Usuari'];
         $DataSortida = $_POST['DataSortida'];
         $DataArribada = $_POST['DataArribada'];
         $Estat = $_POST['Estat'];

         if($this->model->insert_pedido(['ID_Usuari'=>$ID_Usuari, 'DataSortida'=>$DataSortida, 'DataArribada'=>$DataArribada,'Estat'=>$Estat])){
  
             $mensaje= "El pedido s'ha creat correctament";
         }else{
             $mensaje= "El pedido no s'ha a pogut crear";
         }
 
         $this->view->mensaje=$mensaje;
         $this->view->render('nuevo/indexPedido');
 
     }


     function registro_liniapedido(){
        $ID_Pedido = $_POST['ID_Pedido'];
        $ID_Producte = $_POST['ID_Producte'];
        $Talla = $_POST['Talla'];       
        $Quantitat = $_POST['Quantitat'];

        if($this->model->insert_liniapedido(['ID_Pedido'=>$ID_Pedido, 'ID_Producte'=>$ID_Producte,'Talla'=>$Talla,'Quantitat'=>$Quantitat])){
 
            $mensaje= "La Linia de pedido s'ha creat correctament";
        }else{
            $mensaje= "La Linia de pedido no s'ha creat correctament";
        }

        $this->view->mensaje=$mensaje;
        $this->view->render('nuevo/indexLiniaPedido');

    }

}
?>
