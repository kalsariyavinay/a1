<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\Interfaces\PrivacyPolicyRepositoryInterface;
use Session;
class PrivacyPolicyController extends Controller
{
    protected $privacypolicy;

    public function __construct(PrivacyPolicyRepositoryInterface $privacypolicy)
    {
        $this->privacypolicy = $privacypolicy;
    }

    public function index()
    {
        $privacypolicys = $this->privacypolicy->list();
        return view('admin.privacypolicy.index', compact('privacypolicys'));
    }


    public function edit($id)
    {
        $privacypolicy = $this->privacypolicy->findById($id);

        return view('admin.privacypolicy.edit', compact('privacypolicy'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'message' => 'required',
        ]);

        $this->privacypolicy->storeOrUpdate($id, $data);
        Session::flash('message', 'Your record has been updated ');
        Session::flash('errormsg', 'success');
        return redirect()->route('privacypolicy.index');
    }

}