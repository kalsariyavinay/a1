<?php

namespace App\Repository;
use App\Repository\Interfaces\UserRepositoryInterface;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Pagination\LengthAwarePaginator;

class UserRepository implements UserRepositoryInterface { 


    protected $user = null;

    public function list() : LengthAwarePaginator 
    {   
        return User::paginate(5);
    }
    
    public function findById($id) : User
    {
        return User::find($id);
    }

    public function storeOrUpdate($id = null, $data = [] )
    {   
        if(is_null($id)) {
            $user = new User;
            $user->username = $data['username'];
            $user->email = $data['email'];
            $user->name = $data['name'];
            $user->password = Hash::make('password');
            $user->save();

            return $user;
        }

        $user = User::find($id);
        $user->username = $data['username'];
        $user->name = $data['name'];
        $user->save();

        return $user;
    }
    
    public function deleteById($id)
    {
        return User::find($id)->delete();
    }

    public function status_update($id,$status)
    {
        $user=User::find($id);
        $user->is_active = $status;
        $user->save();
        return $user;
    }
}
