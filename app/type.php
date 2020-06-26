<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use DB;
class type extends Model
{
    protected $connection = 'mysql';
    protected $table = 'type';
    protected $fillable = [ 'id', 'name'];
    public $timestamps = false;
    protected $primaryKey = 'id';
}
