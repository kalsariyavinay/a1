<?php

namespace App\Repository\Interfaces;

use App\Models\Menu;
use Illuminate\Pagination\LengthAwarePaginator;
interface MenuRepositoryInterface 
{
    public function list() : LengthAwarePaginator;
    public function findById($id) : Menu;
    public function storeOrUpdate( $id = null, $data = [] );
    public function deleteById($object);
    public function status_update($id,$status);

}