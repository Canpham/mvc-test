<?php
namespace App\Controllers;
use Jenssegers\Blade\Blade;
class BaseController{
    protected function render($file, $data = []){
        $blade = new Blade('./app/views', './cache');
        echo $blade->make($file, $data)->render();
    }
}
?>