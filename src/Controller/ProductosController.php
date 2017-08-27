<?php
namespace App\Controller;

use Cake\Filesystem\Folder;
use Cake\Filesystem\File;

class ProductosController extends AuthController{
    
    public function initialize(){
        parent::initialize();
        $this->loadModel('Categorias');
    }
    
    public function index() {
        $productos = $this->Productos->find('all')->contain(['Categorias']);
        $this->set('productos', $productos);
    }
    
    public function registrar() {
        $producto = $this->Productos->newEntity();
        if($this->request->is('post')){
            $producto = $this->Productos->patchEntity($producto, $this->request->getData());
            
            if($this->request->data['imagen']['error'] == 0){
                // Se ha adjuntado un archivo 
                $producto->imagen_nombre = $this->request->data['imagen']['name'];
                $producto->imagen_tipo = $this->request->data['imagen']['type'];
                $producto->imagen_tamanio = $this->request->data['imagen']['size'];
                
                new Folder('d:\\var\\data', true, 0755);
                
                $imagen = new File($this->request->data['imagen']['tmp_name']);
                $imagen->copy('d:\\var\\data\\'.$this->request->data['imagen']['name']);
                
            }
            
            if( $this->Productos->save($producto) ) {
                $this->Flash->success('Registro guardado correctamente');
                $this->redirect(['action'=>'index']);
            } else {
                $this->Flash->error('Error al momento de guardar el registro');
            }
        }
        
        $this->set('producto', $producto);
        
        $categorias = $this->Categorias->find('list');
        $this->set('categorias', $categorias);
    }
    
    public function editar($id = null) {
        $producto = $this->Productos->get($id);
        if($this->request->is('put')){ // or post <form>
            $producto = $this->Productos->patchEntity($producto, $this->request->getData());
            
            if($this->request->data['imagen']['error'] == 0){
                
                $imagen_anterior = new File('d:\\var\\data\\'.$producto->imagen_nombre);
                $imagen_anterior->delete();
                
                // Se ha adjuntado un archivo 
                $producto->imagen_nombre = $this->request->data['imagen']['name'];
                $producto->imagen_tipo = $this->request->data['imagen']['type'];
                $producto->imagen_tamanio = $this->request->data['imagen']['size'];
                
                new Folder('d:\\var\\data', true, 0755);
                
                $imagen = new File($this->request->data['imagen']['tmp_name']);
                $imagen->copy('d:\\var\\data\\'.$this->request->data['imagen']['name']);
                
            }
            
            if( $this->Productos->save($producto) ) {
                $this->Flash->success('Registro guardado correctamente');
                $this->redirect(['action'=>'index']);
            } else {
                $this->Flash->error('Error al momento de guardar el registro');
            }
        }
        $this->set('producto', $producto);
        
        $categorias = $this->Categorias->find('list');
        $this->set('categorias', $categorias);
    }
    
    public function eliminar($id = null) {
        $producto = $this->Productos->get($id);
        
        $imagen_anterior = new File('d:\\var\\data\\'.$producto->imagen_nombre);
        $imagen_anterior->delete();
        
        if( $this->Productos->delete($producto) ) {
            $this->Flash->success('Registro eliminado correctamente');
        } else {
            $this->Flash->error('Error al momento de eliminar el registro');
        }
        $this->redirect(['action'=>'index']);
    }
    
    public function show($id) {
        $producto = $this->Productos->get($id);
        $this->set('producto', $producto);
    }
    
    // /cakephp/productos/imagen/10
    // https://book.cakephp.org/3.0/en/controllers/request-response.html#sending-files
    public function imagen($id){
        $producto = $this->Productos->get($id);
        $response = $this->response->withFile('d:\\var\\data\\'.$producto->imagen_nombre);
        // Return the response to prevent controller from trying to render
        // a view.
        return $response;
    }

}


