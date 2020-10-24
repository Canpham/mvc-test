<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Employee extends Model{
   	
    protected $table = "employees";

    protected $fillable = [

    'name',
    'company_id',
    'id_card_number',
    'avatar',
    'birth_date',
    'position'

    ];
    
    public $timestamps = false;

    public function company()
    {
    	return $this->belongsTo(Company::class, 'company_id');
    }

}

?>