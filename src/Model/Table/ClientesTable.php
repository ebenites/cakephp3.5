<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class ClientesTable extends Table{
    
    public function initialize(array $config) {
        
        $this->setTable('clientes');
        $this->setPrimaryKey('id');
        $this->setEntityClass('App\Model\Entity\Cliente');
        
    }
    
}
