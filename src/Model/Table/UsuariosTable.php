<?php
namespace App\Model\Table;

use Cake\ORM\Table;

use Cake\Validation\Validator;

class UsuariosTable extends Table{
    
    public function initialize(array $config) {
        
        $this->setTable('usuarios');
        $this->setPrimaryKey('id');
        $this->setEntityClass('App\Model\Entity\Usuario');
        
        $this->belongsTo('Roles')
                ->setForeignKey('roles_id')
                ->setProperty('rol');
    }
    
    public function validationDefault(Validator $validator) {
        return $validator
                ->notEmpty('username', 'Campo username obligatorio')
                ->notEmpty('nombres', 'Campo nombres obligatorio')
                ->notEmpty('email', 'Campo email obligatorio')
                ->notEmpty('roles_id', 'Campo rol obligatorio');
    }
    
}
