<?php
/**
 * Created by PhpStorm.
 * User: Ellioc
 * Date: 6/20/2015
 * Time: 8:28 PM
 */

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));

$url = $_GET['url'];

require_once (ROOT . DS . "library" . DS . "bootstrap.php");