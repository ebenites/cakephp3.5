<?php
namespace App\Controller;

class ClientesController extends AuthController{
    
    public function index() {
        
        // comentario
        
    }
    
    public function listar() {
        $clientes = $this->Clientes->find();
        $this->set('clientes', $clientes);
    }
 
    public function nuevo() {
        
        if($this->request->is('post')){
            
            $nombres = $this->request->getData('nombres');
            $apellidos = $this->request->getData('apellidos');
            $email = $this->request->getData('email');
            $password = $this->request->getData('password');
            
            $cliente = $this->Clientes->newEntity();
            $cliente->nombres = $nombres;
            $cliente->apellidos = $apellidos;
            $cliente->email = $email;
            $cliente->password = $password;
            
            if($this->Clientes->save($cliente)){
                echo 'Registro satisfactorio';
            }else{
                echo 'Error al momento de registrar';
            }
            
            $this->autoRender = false;
        }
        
    }
    
}
