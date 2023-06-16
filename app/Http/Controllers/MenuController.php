<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repository\Interfaces\MenuRepositoryInterface;

class MenuController extends Controller
{
    protected $menu;

    public function __construct(MenuRepositoryInterface $menu)
    {
        $this->menu = $menu;
    }

    public function index()
    {
        $users = $this->menu->list();
       return view('admin.menu.index');
    }

    public function create()
    {
        return view('admin.menu.add');

    }

    public function store(Request $request)
    {   
        $data = $request->validate([
            'name' => ['required', 'max:255',],
            'link' => ['required','max:255',],
         ]);

        $this->menu->storeOrUpdate($id = null, $data);

        return redirect()->route('menus.index');
    }

    public function edit($id)
    {   
        $menu = $this->menu->findById($id);

        return view('admin.menu.edit',compact('menu'));
    }

    public function update(Request $request, $id)
    {   
        $data = $request->validate([
            'name' => ['required', 'max:255',],
            'link' => ['required', 'max:255'],
        ]);

        $this->menu->storeOrUpdate($id, $data);

        return redirect()->route('menus.index');
    }

    public function delete($id)
    {   
        $this->menu->deleteById($id);

        return redirect()->route('menus.index');
    }

    public function status_update($id,$status)
    {
        $this->menu->status_update($id,$status);
        
        return back();
    }
}
