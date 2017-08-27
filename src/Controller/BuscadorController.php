<?php
namespace App\Controller;

use \Cake\Datasource\ConnectionManager;

class BuscadorController extends AppController{
    
    public function index() {
        
        if($this->request->is('POST')){
            
            $nombres = $this->request->getData('nombres'); // $_POST
            
            $sql = 'select u.id, u.username, u.email, u.roles_id, r.nombre as roles_nombre '
                    . 'from usuarios u '
                    . 'inner join roles r on r.id=u.roles_id '
                    . 'where username like :nombres';
            
            $params = ['nombres' => "%$nombres%"];
            
            $con = ConnectionManager::get('default'); // PDO
            $results = $con->execute($sql, $params)->fetchAll('assoc');
            
            $this->set('usuarios', $results);
            
        }
        
    }
 
}
