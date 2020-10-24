<?php
namespace App\Controllers;

use App\Models\Company;
use App\Models\Employee;


class HomeController extends BaseController{

	public function index(){

        $ems = Employee::with('company')->get();
        // echo '<pre>' . var_export($products, true) . '</pre>';
        $this->render('employees.index', compact('ems'));
    }
}
?>