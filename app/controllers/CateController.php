<?php

namespace App\Controllers;
use App\Models\Category;

class CateController extends BaseController{

    public function index()
    {
        $cates = Category::all();
        $this->render('categories.index' [
            'cates' = $cates;
        ]); 
    }

    public function remove()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : -1;
        $model = Category::find($id);
        if($model){
            $model->delete();
        }
        header('location: ' . BASE_URL);
    }

}
?>
