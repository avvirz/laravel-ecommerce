<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Category extends Model
{
    use HasFactory;
    use Notifiable;
    protected $guarded=[];

    public function parent(){
        return $this->belongsTo(Category::class,'category_id');
    }

    public static function tree(){
        $allCategories = Category::all();
        
        //First level only get parent Categories
        $rootCategories = $allCategories->whereNull('category_id');
        //  dd($rootCategories);
        //Find Children of Root Category 
        self::formateTree($rootCategories,$allCategories);

        return $rootCategories;
    }

    private static function formateTree($categories,$allCategories)
    {
        //Find Children of Root Category 
        foreach($categories as $category)
        {
          $category->children = $allCategories->where('category_id',$category->id)->values();

          if($category->children->isNotEmpty())
          {
            //Call method to recursively loop tree 
            self::formateTree($category->children, $allCategories);
          }     
        }
    }
}
