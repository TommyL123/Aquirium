<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model {
    public $timestamps = false;
    protected $table = 'ct_admin';
    protected $guarded = [];
}


?>