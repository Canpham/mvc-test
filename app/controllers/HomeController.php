<?php
namespace App\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;


class HomeController extends BaseController{

	public function index(){

        $products = Product::with('category')->get();
        // echo '<pre>' . var_export($products, true) . '</pre>';
        
        $this->render('products.index', compact('products'));
    }



}
?>