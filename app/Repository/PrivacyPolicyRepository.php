<?php

namespace App\Repository;

use App\Repository\Interfaces\PrivacyPolicyRepositoryInterface;
use App\Models\PrivacyPolicy;
use Illuminate\Pagination\LengthAwarePaginator;

class PrivacyPolicyRepository implements PrivacyPolicyRepositoryInterface
{

    protected $privacypolicy = null;

    public function list(): LengthAwarePaginator
    {
        return PrivacyPolicy::paginate(5);
    }

    public function findById($id): PrivacyPolicy
    {
        return PrivacyPolicy::find($id);
    }

    public function storeOrUpdate($id = null, $data = [])
    {
        $privacypolicy = PrivacyPolicy::find($id);
        $privacypolicy->message = $data['message'];
        $privacypolicy->save();

        return $privacypolicy;
    }

   
}