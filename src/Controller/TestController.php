<?php
namespace App\Controller;

class TestController extends AppController{
    
    // /cakephp/test/index, /cakephp/test/
    public function index() {
        
        $usuario = "Jorge Flores";
        $this->set('nombres', $usuario);
        
        $lista = ['Maria', 'Helena', 'Ursula', 'Marco'];
        $this->set('amigos', $lista);
        
        // Renderiza la vista /Template/Test/index.ctp
    }
    
    /**
     * Params via PATH
     */
    // /cakephp/test/path/{param1}/{param2}
    public function path($param1, $param2) {
        
        var_dump($param1);
        var_dump($param2);
        
        
        $this->autoRender = false;
        
    }
    
    // /cakephp/test/query?nombre=Juan&edad=20
    public function query() {
        
        $nombre = $this->request->getQuery('nombre'); // $_GET
        $edad = $this->request->getQuery('edad');
        
        var_dump($nombre);
        var_dump($edad);
        
        $this->autoRender = false;
        
    }
    
    public function post() {
        
        $nombres = $this->request->getData('nombres');  // $_POST
        $apellidos = $this->request->getData('apellidos');
        
        var_dump($nombres);
        var_dump($apellidos);
        
        $this->autoRender = false;
        
    }
    
}
