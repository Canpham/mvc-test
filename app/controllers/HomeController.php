<?php
namespace App\Controllers;

use App\Models\Category;

class HomeController extends BaseController{
    public function index(){
        // hiển thị danh sách danh mục
        // 1. lấy dữ liệu danh mục bằng model
        $cates = Category::all();
        // 2. render ra view kèm dữ liệu
        // categories/index.blade.php
        $this->render('categories.index', [
            'cates' => $cates
        ]);
    }

    public function detail()
    {
        echo "Đây là trang chi tiết sản phẩm";
    }
}

?>