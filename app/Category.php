<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name' , 'admin_id'
    ];
    protected $primaryKey = 'id';
    public $timestamps = true;

    public function Products()
    {
        return $this->hasMany('App\Product','category_id','id');
    }
}
