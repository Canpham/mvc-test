<?php

namespace App\Controllers;
use App\Models\Company;

class CompanyController extends BaseController{

    public function index()
    {
        $coms = Company::all();
        $this->render('companies.index', compact('coms')); 
    }

    public function remove($id)
    {
        $id = isset($_GET['id']) ? $_GET['id'] : -1;
        $model = Company::find($id);
        if($model){
            $model->delete();
        }
        header('location: ' . BASE_URL . 'show-com');
    }

    public function addCom()
    {
        $this->render('companies.add-com');
    }

    public function saveAddcom()
    {
        $data = $_POST;
        $imageName =   uniqid() . '_' . $_FILES['logo']['name'] ;
        $imgTmp = $_FILES['logo']['tmp_name'];
        $uploadUrl = getcwd() . '\public';
        if(move_uploaded_file($imgTmp, $uploadUrl . '/' . $imageName)) {
            $data['logo'] = $imageName;
            Company::create($data);            
        }else{

            echo "loi k upload dc anh";
        }
        header('location: ' . BASE_URL .'show-com');
        die;
    }

    public function editCom($id)
    {
        $model = Company::find($id);
        $this->render('companies.edit-com', compact('model'));
    }

    public function saveEditcom($id)
    {   
        $data = $_POST;
        $model = Company::find($id);
        $imgTmp = $_FILES['logo']['tmp_name'];
        if (strlen($imgTmp)) {

            $imageName =   uniqid() . '_' . $_FILES['logo']['name'] ;
            $data['logo'] = $imageName;
            $uploadUrl = getcwd() . '\public';
            move_uploaded_file($imgTmp, $uploadUrl . '/' . $imageName);
            
        }
        $model->update($data); 
        // echo '<pre>' . var_export($model, true) . '</pre>';         
        header('location: ' . BASE_URL . 'show-com');
        die;
    }

}
?>
