<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Product extends Model{
	
    protected $table = "products";

    protected $fillable = [

    'name',
    'price',
    'cate_id',
    'short_desc',
    'detail',
    'image'

    ];

    // public function getCategory(){
    //     return Category::find($this->cate_id);
    // }

    public function category()
    {
    	return $this->belongsTo(Category::class, 'cate_id');
    }

}

?>