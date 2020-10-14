<?php
namespace App\Controllers;
use App\Models\User;

class UserController extends BaseController{ 

	public function index()
	{
		$users = User::all();
		$this->render('users.index', compact('users'));
	}

	public function remove()
	{	
		$id = isset($_GET['id']) ? $_GET['id'] : -1;
        $model = User::find($id);
        // var_dump($model);
        // die;
        if($model){
            $model->delete();
        }
        header('location: ' . BASE_URL . 'show-user');
	}

	public function adduser()
	{
		$model = User::all();
		$this->render('users.add-user', compact('model'));
	}

	public function saveAdduser()
	{
		$data = $_POST;
		// var_dump($data); die;
		$imageName =   uniqid() . '_' . $_FILES['avatar']['name'] ;
        $imgTmp = $_FILES['avatar']['tmp_name'];
        $uploadUrl = getcwd() . '\public';
        $password = $_POST ['password'];
        $passwordhash = password_hash($password, PASSWORD_DEFAULT);
        if(move_uploaded_file($imgTmp, $uploadUrl . '/' . $imageName)) {
            $data['avatar'] = $imageName;
            $data['password'] = $passwordhash;
            User::create($data);
            // var_dump($data['role']);
            // die; 
            
        }else{

            echo "loi k upload dc anh";
        }
              // var_dump($data); die;
        header('location: ' . BASE_URL .'show-user');
        die;
	}

	public function edituser($id)
	{
		$model = User::find($id);
		
		$role = [
                [
                    'value' => 1,
                    'name' => 'Administrator'
                ],
                [
                    'value' => 900,
                    'name' => 'User'
                ]
            ];

         $this->render('users.edit-user', compact('model', 'role'));

	}

	public function saveEdituser($id)
	{
		$data = $_POST;
		$model = User::find($id);
		$imageName =   uniqid() . '_' . $_FILES['avatar']['name'] ;
        $imgTmp = $_FILES['avatar']['tmp_name'];
        $uploadUrl = getcwd() . '\public';
        if(move_uploaded_file($imgTmp, $uploadUrl . '/' . $imageName)) {
            $data['avatar'] = $imageName;
            // var_dump($imgTmp);
            // die;
            
        }
        $model->update($data);
        // var_dump($model);
        // die;

        header('location: ' . BASE_URL .'show-user');
        die;
	}
	

	
}


?>