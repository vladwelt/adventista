<?php

class Actions_Login extends Actions_Abstract_Default
{
    public function run() {
        if (!empty($_POST)) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            
        }
        
        $this->view->title = 'Acceder';
    }
}
