<?php

namespace App\Repository\Interfaces;

use App\Models\ContactUs;
use Illuminate\Pagination\LengthAwarePaginator;
interface ContactUsRepositoryInterface 
{
    public function list() : LengthAwarePaginator;
    public function findById($id) : ContactUs;
    public function storeOrUpdate( $id = null, $data = [] );
    public function deleteById($object);
    public function status_update($id,$status);

}