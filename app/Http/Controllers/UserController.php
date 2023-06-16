<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\Interfaces\UserRepositoryInterface;

class UserController extends Controller
{   
    protected $user;

    public function __construct(UserRepositoryInterface $user) 
    {
        $this->user = $user;
    }   

    public function index()
    {   
        $users = $this->user->list();
        return view('admin.user.index',compact('users'));
    }

    public function create()
    {
        return view('admin.user.add');
    }

    public function store(Request $request)
    {   
        $data = $request->validate([
            'username' => ['required', 'string', 'max:255', 'unique:users','regex:/^[a-zA-Z0-9_]+$/'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'name' => ['required', 'string', 'max:255'],
            'password' => ['required', 'max:255', 'min:12', 'regex:/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]+$/'],
        ]);

        $this->user->storeOrUpdate($id = null, $data);

        return redirect()->route('users.index');
    }

    public function edit($id)
    {   
        $user = $this->user->findById($id);

        return view('admin.user.edit',compact('user'));
    }

    public function update(Request $request, $id)
    {   
        $data = $request->validate([
            'username' => ['required', 'string', 'max:255','regex:/^[a-zA-Z0-9_]+$/'],
            'name' => ['required', 'string', 'max:255'],
        ]);

        $this->user->storeOrUpdate($id, $data);

        return redirect()->route('users.index');
    }

    public function delete($id)
    {   
        $this->user->deleteById($id);

        return redirect()->route('users.index');
    }

    public function status_update($id,$status)
    {
        $this->user->status_update($id,$status);
        
        return back();
    }

}
