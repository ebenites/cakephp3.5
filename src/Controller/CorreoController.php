<?php
namespace App\Controller;

use Cake\Mailer\Email;

class CorreoController extends AppController{
    
    public function test() {
        
        $email = new Email('default');
        $email->setFrom(['tienda@tecsup.edu.pe' => 'Tienda Virtual'])
                ->setTo('ebenites@tecsup.edu.pe')
                ->setSubject('Correo desde Tienda Virtual')
                ->send('Contenido de prueba...');
        
    }
    
    public function test2() {
        
        $email = new Email('default');
        $email->setEmailFormat('html')
                ->setTemplate('compra', 'default')
                ->setViewVars([
                    'nombres' => 'Erick Benites', 
                    'productos' => 'Frameworks con PHP'
                    ])
                ->setTo('ebenites@tecsup.edu.pe')
                ->setSubject('Tienda Virtual - Confirmación de Compra')
                ->setAttachments([
                    'libro.pdf' => WWW_ROOT . 'libro.pdf',
                    'logo.svg' => [
                        'file' => WWW_ROOT . 'img/logo.svg',
                        'mimetype' => 'image/svg+xml',
                        'contentId' => 'logo-id'
                    ]
                ])
                ->send("Contenido adicional ... \n ...");
        
        $this->render('test');
    }
    
}
