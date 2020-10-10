<?php
namespace App\Controllers;

class UserController extends BaseController{

	public function index()
	{
		$users = User::all();
		$this->render('user.index' [
			'users' = $users;
		])
	}



}


?>