<?php
 
class ConsultaNoticia Extends Controller{
    
    function __construct(){
        parent::__construct(); 
        $this->view->noticias = [];
    }

    function render(){
        //El model funciona de la sseguent manera agafa el nom del fitxer en aquest "Consulta" 
        //i li afageix modelo al final fent que quan fas model agafa el nom del fitxer consultamodelo
        //que es on anira a buscar la funcio get
        
        $noticias = $this->model->get(); //iguales la variable alumnos a el resultat de la funcio de get que fa la query
        $this->view->noticias=$noticias;
        $this->view->render('consulta/indexNoticia');
        
    }
    

    
    
   }

 

  





}
?>
