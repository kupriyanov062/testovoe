<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use DB;
class product extends Model
{
    protected $connection = 'mysql';
    protected $table = 'product';
    protected $fillable = ['id', 'name', 'url_image', 'price', 'type_id', 'created_at'];
    public $timestamps = false;
    protected $primaryKey = 'id';


    public function type()
    {
        return $this->hasOne('App\type', 'id', 'type_id');
    }
}