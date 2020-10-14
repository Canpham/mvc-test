<?php
namespace App\Controllers;
use App\Models\User;
class LoginController extends BaseController{
    public function loginForm(){
        $msg = isset($_GET['msg']) ? $_GET['msg'] : "";
        $this->render('auth.index', compact('msg'));
    }

    public function postLogin(){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = User::where('email', $email)->first();
        if($user && password_verify($password, $user->password)){
            # tạo session
            $data = [
                'id' => $user->id,
                'email' => $user->email,
                'avatar' => $user->avatar,
                'name' => $user->name,
                'role' => $user->role
            ];
            $_SESSION[AUTH] = $data;
            header('location: ' . BASE_URL);
            die;
        }

        header('location: ' . BASE_URL . 'login?msg=Email hoặc mật khẩu không đúng');
        die;
    }

    public function logout(){
        unset($_SESSION[AUTH]);
        header('location: ' . BASE_URL);
        die;
    }
}

?>