<?php

namespace App\Repository\Interfaces;

use App\Models\CmsPage;
use Illuminate\Pagination\LengthAwarePaginator;
interface CmsPageRepositoryInterface 
{
    public function list() : LengthAwarePaginator;
    public function findById($id) : CmsPage;
    public function storeOrUpdate( $id = null, $data = [] );
    public function deleteById($object);
    public function status_update($id,$status);

}