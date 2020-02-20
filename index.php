<?php
declare(strict_types = 1);
var_dump($_POST);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require 'Model/Data.php';
require 'Controller/HomepageController.php';
require 'Model/Customer.php';
require 'Model/Product.php';
require 'Model/JSON.php';
require 'Model/Group.php';


//include all your model files here

//include all your controllers here
//require 'Controller/HomepageController.php';

//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!

$controller = new HomepageController;
if (isset($_POST['product']) || isset($_POST['customer'])){
    $controller->getObjectPost();
    $controller->getGroupsfromCustomer();
    var_dump($controller->currentGroup);

}
$controller->render();
