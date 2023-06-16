<?php

namespace App\Repository\Interfaces;

use App\Models\Blog;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
interface BlogRepositoryInterface 
{
    public function list() : LengthAwarePaginator;
    public function findById($id) : Blog;
    public function storeOrUpdate( $id = null, array $data = [], Request $request );
    public function deleteById($object);
    public function blog_media_deleteById($object);
    public function status_update($id,$status);

}