<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\Interfaces\CategoryRepositoryInterface;

class CategoryController extends Controller
{    
    protected $category;

    public function __construct(CategoryRepositoryInterface $category) 
    {
        $this->category = $category;
    }   

    public function index()
    {   
        $categorys = $this->category->list();
        return view('admin.category.index',compact('categorys'));
    }

    public function create()
    {
        return view('admin.category.add');
    }

    public function store(Request $request)
    {   
        $data = $request->validate([
            'category_name' => ['required', 'string', 'max:255'],
        ]);

        $this->category->storeOrUpdate($id = null, $data);

        return redirect()->route('category.index');
    }

    public function edit($id)
    {   
        $category = $this->category->findById($id);

        return view('admin.category.edit',compact('category'));
    }

    public function update(Request $request, $id)
    {   
        $data = $request->validate([
            'category_name' => ['required', 'string', 'max:255'],
        ]);

        $this->category->storeOrUpdate($id, $data);

        return redirect()->route('category.index');
    }

    public function delete($id)
    {   
        $this->category->deleteById($id);

        return redirect()->route('category.index');
    }

    public function status_update($id,$status)
    {
        $this->category->status_update($id,$status);
        
        return back();
    }

}
