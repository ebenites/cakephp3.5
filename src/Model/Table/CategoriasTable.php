<?php
namespace App\Model\Table;

use \Cake\ORM\Table;

class CategoriasTable extends Table{
    
    public function initialize(array $config) {
        $this->setTable('categorias');
        $this->setPrimaryKey('id');
        $this->setEntityClass('App\Model\Entity\Categoria');
        
        $this->setDisplayField('nombre');
    }
    
}
