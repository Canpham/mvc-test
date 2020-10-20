<?php
session_start();
require_once './config/helpers.php';
require_once './vendor/autoload.php';
require_once './config/db.php';

use App\Controllers\HomeController;
use App\Controllers\CateController;
use App\Controllers\ProductController;
use App\Controllers\UserController;
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

    //products
    case 'add-product':
        $ctr = new ProductController();
        $ctr->addproduct();
        break;
    case 'remove-product':
        $ctr = new ProductController();
        $id = isset($_GET['id']) ? $_GET['id'] : -1;
        $ctr->remove($id);
        break;
    case 'save-add':
        $ctr = new ProductController();
        $ctr->saveAddproduct();
        break;
    case 'edit-product':
        $ctr = new ProductController();
        $id = isset($_GET['id']) ? $_GET['id'] : -1;
        $ctr->editproduct($id);
        break;
    case 'save-edit':
        $ctr = new ProductController();
        $id = isset($_POST['id']) ? $_POST['id'] : -1;
        $ctr->saveEditproduct($id);

    //category
    case 'show-cate':
        $ctr = new CateController();
        $ctr->index();
        break;
    case 'remove-cate':
        $ctr = new CateController();
        $id = isset($_GET['id']) ? $_GET['id'] : -1;
        $ctr->remove($id);
    case 'add-cate':
        $ctr = new CateController();
        $ctr->addcate();
        break;
    case 'edit-cate':
        $ctr = new CateController();
        $id = isset($_GET['id']) ? $_GET['id'] : -1;
        $ctr->editcate($id);
        break;
    case 'save-addCate':
        $ctr = new CateController();
        $ctr->saveAddcate();
        break;
    case 'save-editCate':
        $ctr = new CateController();
        $id = isset($_POST['id']) ? $_POST['id'] : -1;
        $ctr->saveEditcate($id);
        break;


    //User
    case 'show-user':
        $ctr = new UserController();
        $ctr->index();
        break;
    case 'remove-user':
        $ctr = new UserController();
        $id = isset($_GET['id']) ? $_GET['id'] : -1;
        $ctr->remove($id);
    case 'add-user':
        $ctr = new UserController();
        $ctr->adduser();
        break;
    case 'edit-user':
        $ctr = new UserController();
        $id = isset($_GET['id']) ? $_GET['id'] : -1;
        $ctr->edituser($id);
        break;
    case 'save-addUser':
        $ctr = new UserController();
        $ctr->saveAdduser();
        break;
    case 'save-editUser':
        $ctr = new UserController();
        $id = isset($_POST['id']) ? $_POST['id'] : -1;
        $ctr->saveEdituser($id);
        break;
    case 'check-prodcutname' :
        $ctr = new ProductController();
        $ctr->checkprName();
        break;
    default:
        # code...
        break;
}

?>