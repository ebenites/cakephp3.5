<?php
namespace App\Controller;

class CategoriasController extends AuthController{

    public function index() {
        $categorias = $this->Categorias->find();
        $this->set('categorias', $categorias);
    }
    public function registrar() {
        $categoria = $this->Categorias->newEntity();
        if($this->request->is('post')){
            $categoria = $this->Categorias->patchEntity($categoria, $this->request->getData());
            if( $this->Categorias->save($categoria) ) {
                $this->Flash->success('Registro guardado correctamente');
                $this->redirect(['action'=>'index']);
            } else {
                $this->Flash->error('Error al momento de guardar el registro');
            }
        }
        $this->set('categoria', $categoria);
    }
    
    public function editar($id) {
        $categoria = $this->Categorias->get($id);
        if($this->request->is('put')){ // or post <form>
            $categoria = $this->Categorias->patchEntity($categoria, $this->request->getData());
            if( $this->Categorias->save($categoria) ) {
                $this->Flash->success('Registro guardado correctamente');
                $this->redirect(['action'=>'index']);
            } else {
                $this->Flash->error('Error al momento de guardar el registro');
            }
        }
        $this->set('categoria', $categoria);
    }
    
    public function eliminar($id) {
        $categoria = $this->Categorias->get($id);
        if( $this->Categorias->delete($categoria) ) {
            $this->Flash->success('Registro eliminado correctamente');
        } else {
            $this->Flash->error('Error al momento de eliminar el registro');
        }
        $this->redirect(['action'=>'index']);
    }
}