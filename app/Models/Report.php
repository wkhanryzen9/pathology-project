<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }
    function subcategory(){
        return $this->belongsTo(SubCategory::class, 'sub_category_id');
    }
    function test(){
        return $this->belongsTo(Test::class, 'test_id');
    }
}
