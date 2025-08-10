<?php

namespace App\Models;
   
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{ 
    protected $fillable = ['category_id', 'sub_category_id', 'name', 'uppervalue'];

    function category(){ 

        return $this->belongsTo(Category::class, 'category_id');
    }
    function subcategory(){
        
        return $this->belongsTo(SubCategory::class, 'sub_category_id');
    }
}
