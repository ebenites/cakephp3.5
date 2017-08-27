<?php
namespace App\Model\Table;

use \Cake\ORM\Table;

class ProductosTable extends Table{
    
    public function initialize(array $config) {
        
        $this->setTable('productos');
        $this->setPrimaryKey('id');
        $this->setEntityClass('App\Model\Entity\Producto');
        
        $this->belongsTo('Categorias')
                ->setForeignKey('categorias_id')
                ->setProperty('categoria');
    }
    
}
