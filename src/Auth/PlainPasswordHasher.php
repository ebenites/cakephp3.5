<?php
namespace App\Auth;

use Cake\Auth\AbstractPasswordHasher;

class PlainPasswordHasher extends AbstractPasswordHasher{
    
    public function check($password, $hashedPassword) {
        return $password === $hashedPassword;
    }

    public function hash($password) {
        return $password;
    }

}
