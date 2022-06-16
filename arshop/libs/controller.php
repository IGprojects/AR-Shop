<?php


class controller{

    function __construct(){

        $this->view = new view();

    }
    function loadModel($model)
    {
        $url = 'models/'.$model.'modelo.php';
    
        if(file_exists($url))
        {
            require $url;
            $modelName = $model.'Modelo';
            $this->model = new $modelName();
        }
    }
}

?>