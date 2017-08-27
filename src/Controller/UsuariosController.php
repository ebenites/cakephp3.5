<?php
namespace App\Controller;

class UsuariosController extends AuthController{
    
    public function initialize() {
        parent::initialize();
        $this->loadModel('Roles');
    }
    
    public function index() {
        
        $usuarios = $this->Usuarios->find()->contain(['Roles']);
        $this->set('usuarios', $usuarios);
        
    }
    
    public function registrar() {
        $usuario = $this->Usuarios->newEntity();
        
        if($this->request->is('post')){
            
            $usuario = $this->Usuarios->patchEntity($usuario, $this->request->getData());
            if($this->Usuarios->save($usuario)){
                $this->Flash->success('Registro guardado correctamente');
                return $this->redirect(['action' => 'index']);
            }else{
                $this->Flash->error('Erro al momento de guardar');
            }
            
        }
        
        $this->set('usuario', $usuario);
        
        // Usamos el find('list') para llenar el select [id => 'nombre', ...]
        $roles = $this->Roles->find('list');
        $this->set('roles', $roles);
    }
    
    public function editar($id) {
        $usuario = $this->Usuarios->get($id);
        
        if($this->request->is('put')){
            $usuario = $this->Usuarios->patchEntity($usuario, $this->request->getData());
            if($this->Usuarios->save($usuario)){
                $this->Flash->success('Registro guardado correctamente');
                return $this->redirect(['action' => 'index']);
            }else{
                $this->Flash->error('Erro al momento de guardar');
            }   
        }
        
        // Usamos el find('list') para llenar el select [id => 'nombre', ...]
        $roles = $this->Roles->find('list');
        $this->set('roles', $roles);
        
        $this->set('usuario', $usuario);
    }
    
    public function eliminar($id) {
        $usuario = $this->Usuarios->get($id);
        if($this->Usuarios->delete($usuario)){
            $this->Flash->success('Registro eliminado correctamente');
        }else{
            $this->Flash->error('Erro al momento de guardar');
        }
        return $this->redirect(['action' => 'index']);
    }
    
    public function login() {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error('Usuario y/o clave inválido');
        }
        
        $this->viewBuilder()->layout('public');
    }
    
    public function logout(){
        return $this->redirect($this->Auth->logout());
    }
    
}
