<?php

class Actions_Abstract_Default extends Object
{
    public $view;
    public $request;
    
    public function __construct(View $view, $request) {
        $this->view = $view;
        $this->request = $request;
    }
    
    public function layout() {
        $this->view->content = $this->view->render('/' . $this->request .'.php');
    }
}
