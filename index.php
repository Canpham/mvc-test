<?php
session_start();
require_once './config/helpers.php';
require_once './vendor/autoload.php';
require_once './config/db.php';

use App\Controllers\HomeController;
use App\Controllers\CompanyController;
use App\Controllers\EmloyeeController;
use App\Controllers\LoginController;
$url = isset($_GET['url']) ? $_GET['url'] : "/";
switch ($url) {
    //index
    case '/':
        $ctr = new HomeController();
        $ctr->index();
        break;


    //login
    case 'login-form':
        $ctr = new LoginController();
        $ctr->loginform();
        break;
    case 'post-login':
        $ctr = new LoginController();
        $ctr->postlogin();
        break;
    case 'log-out':
        $ctr = new LoginController();
        $ctr->logout();
        break;

    //employee
    case 'add-em':
        $ctr = new EmloyeeController();
        $ctr->addem();
        break;
    case 'remove-em':
        $ctr = new EmloyeeController();
        $id = isset($_GET['id']) ? $_GET['id'] : -1;
        $ctr->remove($id);
        break;
    case 'save-add':
        $ctr = new EmloyeeController();
        $ctr->saveAddem();
        break;
    case 'edit-em':
        $ctr = new EmloyeeController();
        $id = isset($_GET['id']) ? $_GET['id'] : -1;
        $ctr->editem($id);
        break;
    case 'save-edit':
        $ctr = new EmloyeeController();
        $id = isset($_POST['id']) ? $_POST['id'] : -1;
        $ctr->saveEditem($id);

    // company
    case 'show-com':
        $ctr = new CompanyController();
        $ctr->index();
        break;
    case 'remove-com':
        $ctr = new CompanyController();
        $id = isset($_GET['id']) ? $_GET['id'] : -1;
        $ctr->remove($id);
        break;
    case 'add-com':
        $ctr = new CompanyController();
        $ctr->addCom();
        break;
    case 'saveAdd-com':
        $ctr = new CompanyController();
        $ctr->saveAddcom();
        break;
    case 'edit-com':
        $ctr = new CompanyController();
        $id = isset($_GET['id']) ? $_GET['id'] : -1;
        $ctr->editCom($id);
        break;
    case 'saveEdit-com':
        $ctr = new CompanyController();
        $id = isset($_POST['id']) ? $_POST['id'] : -1;
        $ctr->saveEditcom($id);
        break;
    default:
        # code...
        break;
}

?>