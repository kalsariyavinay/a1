<?php

namespace App\Repository\Interfaces;

use App\Models\Category;
use Illuminate\Pagination\LengthAwarePaginator;
interface CategoryRepositoryInterface 
{
    public function list() : LengthAwarePaginator;
    public function findById($id) : Category;
    public function storeOrUpdate( $id = null, $data = [] );
    public function deleteById($object);
    public function status_update($id,$status);

}