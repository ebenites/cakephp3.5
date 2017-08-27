<?php
namespace App\Controller;

class BuscadorProductosController extends AuthController{
    
    public function initialize() {
        parent::initialize();
        $this->loadModel('Categorias');
        $this->loadModel('Productos');
    }
    
    // http://localhost/cakephp/buscador-productos/
    public function index() {
        $categorias = $this->Categorias->find('list')->order(['nombre' => 'ASC']);
        $this->set('categorias', $categorias);
    }
    
    public function buscar() {
        
        $nombre = $this->request->getData('nombre');
        $categoria = $this->request->getData('categoria');
        $stock = $this->request->getData('stock');
        $fecha = $this->request->getData('fecha');
        
//        var_dump($fecha); die();
        
        $query = $this->Productos->find()
                //->select(['id', 'nombre', 'creado'])
                ->contain(['Categorias']);
        
        if(!empty($nombre)){
            $query = $query->where(['Productos.nombre LIKE' => "%$nombre%"]);
        }
        
        if(!empty($categoria)){
            $query = $query->where(['categorias_id' => $categoria]);
        }
        
        if(!empty($stock)){
            $query = $query->where(['stock >=' => $stock]);
        }
        
        if(!empty($fecha)){
            $query = $query->where(['creado >' => $fecha]);
        }
        
        $query = $query->order(['Productos.nombre' => 'ASC']);
        
        $this->set('productos', $query);
        
    }
    
}
