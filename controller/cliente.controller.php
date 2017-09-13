<?php
require_once 'model/cliente.php';

class ClienteController{
    
    private $model,
            $auth;
    
    public function __CONSTRUCT(){
        $this->model = new Cliente();
        $this->auth  = FactoryAuth::getInstance();
        
        try{
            $this->auth->estaAutenticado();
        } catch(Exception $e){
            header('Location: index.php');
        }
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/menu.php';
        require_once 'view/cliente/cliente.php';
        require_once 'view/footer.php';
    }
    
    public function Crud(){
        $alm = new Cliente();
        
        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/menu.php';
        require_once 'view/cliente/cliente-editar.php';
        require_once 'view/footer.php';
    }
    
    public function Guardar(){
        $alm = new Cliente();
        
        $alm->id = $_REQUEST['id'];
        $alm->Nombre = $_REQUEST['Nombre'];
        $alm->Apellido = $_REQUEST['Apellido'];
        $alm->Correo = $_REQUEST['Correo'];
        $alm->Nacionalidad = $_REQUEST['Nacionalidad'];
        $alm->FechaNacimiento = $_REQUEST['FechaNacimiento'];

        $alm->id > 0 
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);
        
            header('Location: index.php?c=Cliente&token=' . @$_GET['token']);
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php?c=Cliente&token=' . @$_GET['token']);
    }
}