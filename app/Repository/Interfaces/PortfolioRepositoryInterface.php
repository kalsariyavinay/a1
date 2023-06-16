<?php

namespace App\Repository\Interfaces;

use App\Models\Portfolio;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
interface PortfolioRepositoryInterface 
{
    public function list() : LengthAwarePaginator;
    public function findById($id) : Portfolio;
    public function storeOrUpdate( $id = null, $data = [] , Request $request);
    public function deleteById($object);
    public function portfolio_media_deleteById($object);
    public function status_update($id,$status);
}