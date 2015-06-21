<?php
/**
 * Created by PhpStorm.
 * User: Ellioc
 * Date: 6/20/2015
 * Time: 9:59 PM
 */
class Model extends SQLQuery {
    protected $_model;

    function __construct() {

        $this->connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
        $this->_model = get_class($this);
        $this->_table = strtolower($this->_model)."s";
    }

    function __destruct() {
    }
}