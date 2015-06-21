<?php
/**
 * Created by PhpStorm.
 * User: Ellioc
 * Date: 6/20/2015
 * Time: 9:55 PM
 */

class Controller
{
    protected $_model;
    protected $_controller;
    protected $_action;
    protected $_template;

    function __construct($model, $controller, $action) {
        $this->_controller = $controller;
        $this->_action = $action;
        $this->_model = $model;

        $this->$model = new $model;
        $this->_template = new Template($controller,$action);
    }

    function set($name,$value)
    {
        $this->_template->set($name,$value);
    }

    function __destruct()
    {
        $this->_template->render();
    }
}