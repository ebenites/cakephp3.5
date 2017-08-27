<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class RolesTable extends Table{
    
    public function initialize(array $config) {
        
        $this->setTable('roles');
        $this->setPrimaryKey('id');
        $this->setEntityClass('App\Model\Entity\Rol');
        
        $this->hasMany('Usuarios')
                ->setForeignKey('roles_id')
                ->setProperty('usuarios');
        
        // Indica el campo a mostrar en un input select
        $this->setDisplayField('nombre');
    }
    
}
