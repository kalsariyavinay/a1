<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\Interfaces\ContactUsRepositoryInterface;
use Session;

class ContactUsController extends Controller
{
    protected $contactus;

    public function __construct(ContactUsRepositoryInterface $contactus)
    {
        $this->contactus = $contactus;
    }

    public function index()
    {
        $contactuss = $this->contactus->list();
        return view('admin.contactus.index', compact('contactuss'));
    }

    public function create()
    {
        return view('admin.contactus.add');

    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|max:255',
            'phone_number' => 'required',
            'msg_subject' => 'required',
            'message' => 'required',
        ]);

        $this->contactus->storeOrUpdate($id = null, $data);
        Session::flash('message', 'Your message has been send ');
        Session::flash('errormsg', 'success');
        return redirect()->back();
    }

    public function edit($id)
    {
        $contactus = $this->contactus->findById($id);

        return view('admin.contactus.edit', compact('contactus'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|max:255',
            'phone_number' => 'required',
            'msg_subject' => 'required',
            'message' => 'required',
        ]);

        $this->contactus->storeOrUpdate($id, $data);

        return redirect()->route('contactus.index');
    }

    public function delete($id)
    {
        $this->contactus->deleteById($id);

        return redirect()->route('contactus.index');
    }

    public function status_update($id, $status)
    {
        $this->contactus->status_update($id, $status);

        return back();
    }
}