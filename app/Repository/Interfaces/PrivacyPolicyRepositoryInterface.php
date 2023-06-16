<?php

namespace App\Repository\Interfaces;

use App\Models\PrivacyPolicy;
use Illuminate\Pagination\LengthAwarePaginator;
interface PrivacyPolicyRepositoryInterface 
{
    public function list() : LengthAwarePaginator;
    public function findById($id) : PrivacyPolicy;
    public function storeOrUpdate( $id = null, $data = [] );

}