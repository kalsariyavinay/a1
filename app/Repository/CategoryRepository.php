<?php

namespace App\Repository;
use App\Repository\Interfaces\CategoryRepositoryInterface;
use App\Models\Category;
use Illuminate\Pagination\LengthAwarePaginator;

class CategoryRepository implements CategoryRepositoryInterface {

    protected $category = null;

    public function list() : LengthAwarePaginator 
    {
        return Category::paginate(5);
    }

    public function findById($id) : Category
    {
        return Category::find($id);
    }

    public function storeOrUpdate($id = null, $data = [] )
    {   
        if(is_null($id)) {
            $category = new Category;
            $category->category_name = $data['category_name'];
            $category->save();

            return $category;
        }

        $category = Category::find($id);
        $category->category_name = $data['category_name'];
        $category->save();

        return $category;
    }
    
    public function deleteById($id)
    {
        return Category::find($id)->delete();
    }

    public function status_update($id,$status)
    {
        $category=Category::find($id);
        $category->is_active = $status;
        $category->save();
        return $category;
    }
}