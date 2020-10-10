<?php

require_once './config/helpers.php';
require_once './vendor/autoload.php';
require_once './config/db.php';

use App\Controllers\HomeController;
use App\Controllers\CartController;
use App\Controllers\ProductController;

$url = isset($_GET['url']) ? $_GET['url'] : "/";
switch ($url) {
    case '/':
        $ctr = new HomeController();
        $ctr->index();
        break;
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

    default:
        # code...
        break;
}

?>