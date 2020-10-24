<?php
namespace App\Controllers;

use App\Models\Company;
use App\Models\Employee;


class EmloyeeController extends BaseController{

    public function remove($id)
    {
        $model = Employee::find($id);
        if($model){
            $model->delete();
        }
        header('location: ' . BASE_URL);
    }
 
    //views them nv
    public function addem()
    {
        $coms = Company::all();
        $this->render('employees.add-em', compact('coms'));

    }

    // luu them nv
    public function saveAddem()
    {   
        $data = $_POST;
        $imageName =   uniqid() . '_' . $_FILES['avatar']['name'] ;
        $imgTmp = $_FILES['avatar']['tmp_name'];
        $uploadUrl = getcwd() . '\public';
        if(move_uploaded_file($imgTmp, $uploadUrl . '/' . $imageName)) {
            $data['avatar'] = $imageName;
            Employee::create($data);
            // var_dump($data); die;

        }else{

            echo "404 error";
        }
              // var_dump($data); die;
        header('location: ' . BASE_URL);
        die;
    }

    // views sua nv
    public function editem($id)
    {
        $model = Employee::find($id);
        $coms = Company::all();
        $this->render('employees.edit-em', compact('model', 'coms'));

    }

    // Luu sua nv
    public function saveEditem($id)
    {
        $data = $_POST;
        $model = Employee::find($id);
        // var_dump($model);
        // // die;0
        $imgTmp = $_FILES['avatar']['tmp_name'];
        if (strlen($imgTmp)) {
            $imageName =   uniqid() . '_' . $_FILES['avatar']['name'] ;
            $data['avatar'] = $imageName;
            $uploadUrl = getcwd() . '\public';
            move_uploaded_file($imgTmp, $uploadUrl . '/' . $imageName);
        }
        $model->update($data);          
        header('location: ' . BASE_URL .'show-com'); 
        die;

    }

} 
?>