<?php
namespace App\Controller;

class RolesController extends AuthController{
    
    public function index() {
        $roles = $this->Roles->find();
        $this->set('roles', $roles);
    }
    
    public function registrar() {
        
        $rol = $this->Roles->newEntity();
        
        if($this->request->is('post')){
            $rol = $this->Roles->patchEntity($rol, $this->request->getData());
            if($this->Roles->save($rol)){
                $this->Flash->success('Registro guardado correctamente');
                return $this->redirect(['action' => 'index']);
            }else{
                $this->Flash->error('Erro al momento de guardar');
            }
        }
        
        $this->set('rol', $rol);
    }
    
    public function editar($id) {
        
        $rol = $this->Roles->get($id);
        
        if($this->request->is('put')){
            $rol = $this->Roles->patchEntity($rol, $this->request->getData());
            if($this->Roles->save($rol)){
                $this->Flash->success('Registro actualizado correctamente');
                return $this->redirect(['action' => 'index']);
            }else{
                $this->Flash->error('Erro al momento de actualizar');
            }
        }
        
        $this->set('rol', $rol);
    }
    
    public function eliminar($id) {
        $rol = $this->Roles->get($id);
        if($this->Roles->delete($rol)){
            $this->Flash->success('Registro eliminado correctamente');
        }else{
            $this->Flash->error('Erro al momento de eliminar');
        }
        return $this->redirect(['action' => 'index']);
    }
    
}
