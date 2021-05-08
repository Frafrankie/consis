<?php
//require_once 'model/usuarios.php';

class consisCableadoEstrucController{

//    private $model;

    public function __CONSTRUCT(){
//        $this->model = new Usuarios();
    }

    public function Index(){

        session_start();

        require_once 'view/header.php';
        require_once 'view/consisCableadoEstruc/consisCableadoEstruc.php';
        require_once 'view/footer.php';

    }
}
