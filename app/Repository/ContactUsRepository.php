<?php

namespace App\Repository;

use App\Repository\Interfaces\ContactUsRepositoryInterface;
use App\Models\ContactUs;
use Auth;
use Illuminate\Pagination\LengthAwarePaginator;

class ContactUsRepository implements ContactUsRepositoryInterface
{

    protected $contactus = null;

    public function list(): LengthAwarePaginator
    {
        return ContactUs::paginate(5);
    }

    public function findById($id): ContactUs
    {
        return ContactUs::find($id);
    }

    public function storeOrUpdate($id = null, $data = [])
    {
        if (is_null($id)) {
            $contactus = new ContactUs;
            $contactus->user_id = Auth::user()->id;
            $contactus->name = $data['name'];
            $contactus->email = $data['email'];
            $contactus->phone_number = $data['phone_number'];
            $contactus->msg_subject = $data['msg_subject'];
            $contactus->message = $data['message'];
            $contactus->save();

            return $contactus;
        }
        $contactus = ContactUs::find($id);
        $contactus->name = $data['name'];
        $contactus->email = $data['email'];
        $contactus->phone_number = $data['phone_number'];
        $contactus->msg_subject = $data['msg_subject'];
        $contactus->message = $data['message'];
        $contactus->save();

        return $contactus;
    }

    public function deleteById($id)
    {
        return ContactUs::find($id)->delete();
    }

    public function status_update($id, $status)
    {
        $contactus = ContactUs::find($id);
        $contactus->is_active = $status;
        $contactus->save();
        return $contactus;
    }
}