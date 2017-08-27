<?php
namespace App\Controller;

class AuthController extends AppController{
    
    public function initialize() {
        parent::initialize();
        
        $this->loadComponent('Auth', [
            'authenticate' => [
                'Form' => [ // Form: login por formulario
                    'userModel' => 'Usuarios',	// Se defino la tabla de login y los campos
                    'fields' => ['username' => 'username', 'password' => 'password'],
                    // die( crypt('tecsup') );
                    'passwordHasher' => [	// Se define un custom pass hasher texto plano
                        'className' => 'Plain'
                    ]
                ]
            ],
            'loginAction' => [		// Formulario login
                'controller' => 'Usuarios',
                'action' => 'login'
            ], 
            'loginRedirect' => [		// Destino luego del login 
                'controller' => 'Home',
                'action' => 'index'
            ],
            'logoutRedirect' => [	// Destino luego del logout
                'controller' => 'Usuarios',
                'action' => 'login'
            ],
            'authError' => 'No tienes permiso de acceder',	// Acceso no autorizado
        ]);

        
    }
    
    public function index() {
        
        echo 'Estoy adentro';
        
        $this->autoRender = false;
    }
    
}
