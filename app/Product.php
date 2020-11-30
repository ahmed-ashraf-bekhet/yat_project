<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name' , 'description' , 'image' , 'category_id'
    ];

    protected $primaryKey = 'id';
    public $timestamps = true;

    public function Category()
    {
        return $this->belongsTo('App\Category','category_id','id');
    }
}
