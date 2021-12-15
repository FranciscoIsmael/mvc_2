<?php

class Dispatcher
{

    private $request;

    public function dispatch()
    {
        $this->request = new Request();
        Router::parse($this->request->url, $this->request); // rellena objeto request con el controlador y accion solicitado asi como los posibles parametros

        $controllers= array('users'=>['index','detail','create','edit','delete','error'],
        'posts'=>['index','detail','delete','error'],
        'comments'=>['index','detail','create','edit','delete','error']);
        
        if (array_key_exists($this->request->controller, $controllers)) {
            if (in_array($this->request->action, $controllers[$this->request->controller])) {
                $controller = $this->loadController();
                call_user_func_array([$controller, $this->request->action], $this->request->params);
            }else{
                $this->request->controller = "users";
                $controller = $this->loadController();
                call_user_func_array([$controller,"error"], array('<strong>ERROR:</strong> la acción no existe'));
            }
        }else{
            $this->request->controller = "users";
            $controller = $this->loadController();
            call_user_func_array([$controller,"error"], array('<strong>ERROR:</strong> el controlador no existe'));
        }        
    }

    public function loadController()
    {
        $name = $this->request->controller . "Controller";
        $file = ROOT . 'Controllers/' . $name . '.php';
        require($file);
        $controller = new $name();
        return $controller;
    }

}
?>