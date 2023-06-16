<?php

namespace App\Repository;
use App\Repository\Interfaces\MenuRepositoryInterface;
use App\Models\Menu;
use Illuminate\Pagination\LengthAwarePaginator;

class MenuRepository implements MenuRepositoryInterface {

    protected $menu = null;

    public function list() : LengthAwarePaginator 
    {
        return Menu::paginate(5);
    }

    public function findById($id) : Menu
    {
        return Menu::find($id);
    }

    public function storeOrUpdate($id = null, $data = [] )
    {   
        if(is_null($id)) {
            $menu = new Menu;
            $menu->name = $data['name'];
            $menu->link = $data['link'];
            $menu->save();

            return $menu;
        }

        $menu = Menu::find($id);
        $menu->name = $data['name'];
        $menu->link = $data['link'];
        $menu->save();

        return $menu;
    }
    
    public function deleteById($id)
    {
        return Menu::find($id)->delete();
    }

    public function status_update($id,$status)
    {
        $menu=Menu::find($id);
        $menu->is_active = $status;
        $menu->save();
        return $menu;
    }
}