<?php
namespace App\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;


class ProductController extends BaseController{

    public function remove($id)
    {
        $model = Product::find($id);
        // var_dump($model); die;
        if($model){
            $model->delete();
        }
        header('location: ' . BASE_URL);
    }

    public function addproduct()
    {
        $cates = Category::all();
        $this->render('products.add-product', compact('cates'));

    }

    public function editproduct($id)
    {
        $model = Product::find($id);
        // var_dump($model->name);
        $cates = Category::all();
        $this->render('products.edit-product', compact('model', 'cates'));

    }

    public function saveAddproduct()
    {   
        $data = $_POST;
        $imageName =   uniqid() . '_' . $_FILES['image']['name'] ;
        $imgTmp = $_FILES['image']['tmp_name'];
        $uploadUrl = getcwd() . '\public';
        if(move_uploaded_file($imgTmp, $uploadUrl . '/' . $imageName)) {
            $data['image'] = $imageName;
            Product::create($data);
            // var_dump($data); die;

        }else{

            echo "loi k upload dc anh";
        }
              // var_dump($data); die;
        header('location: ' . BASE_URL);
        die;
    }

    public function saveEditproduct($id)
    {
        $data = $_POST;
        // var_dump($_FILES['image']); die;
        $model = Product::find($id);
        // $imageName =   uniqid() . '_' . $_FILES['image']['name'] ;
        $imgTmp = $_FILES['image']['tmp_name'];
        // var_dump($imgTmp);
        if (strlen($imgTmp)) {

                    $imageName =   uniqid() . '_' . $_FILES['image']['name'] ;
                    $data['image'] = $imageName;
                    $uploadUrl = getcwd() . '\public';
                    move_uploaded_file($imgTmp, $uploadUrl . '/' . $imageName);
            
        }
        // var_dump($model);
        // die;

        $model->update($data);          
        header('location: ' . BASE_URL);
        die;

    }

} 
?>