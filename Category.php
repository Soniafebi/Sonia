<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'table_category';
    protected $fillable = ['category_name'];
}
