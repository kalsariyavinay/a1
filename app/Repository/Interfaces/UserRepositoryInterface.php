<?php

namespace App\Repository\Interfaces;

use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;
interface UserRepositoryInterface 
{
    public function list() : LengthAwarePaginator;
    public function findById($id) : User;
    public function storeOrUpdate( $id = null, $data = [] );
    public function deleteById($object);
    public function status_update($id,$status);
}