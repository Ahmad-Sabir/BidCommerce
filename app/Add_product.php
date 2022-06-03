<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Add_product extends Model
{
    protected $table='addproducts';
    protected $fillable=['name','email','post','image','image2'];
}
