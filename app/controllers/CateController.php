<?php

namespace App\Controllers;
use App\Models\Category;

class CateController extends BaseController{

    public function index()
    {
        $cates = Category::all();
        $this->render('categories.index', compact('cates')); 
    }

    public function remove()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : -1;
        $model = Category::find($id);
        if($model){
            $model->delete();
        }
        header('location: ' . BASE_URL . 'show-cate');
    }

    public function addcate()
    {
        $this->render('categories.add-cate');
    }

    public function saveAddcate()
    {
        $data = $_POST;
        // var_dump($data); die;
        Category::create($data);
        header('location: ' . BASE_URL .'show-cate');
    }

    public function editcate($id)
    {
        $model = Category::find($id);
        $this->render('categories.edit-cate', compact('model'));
    }

    public function saveEditcate($id)
    {   
        $data = $_POST;
        $model = Category::find($id);
        // var_dump($model);
        // die;        
        $model->update($data);
        header('location:' .BASE_URL .'show-cate');
    }



}
?>
