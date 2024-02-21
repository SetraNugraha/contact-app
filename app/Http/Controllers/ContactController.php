<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $data = Contacts::all()->sortByDesc('id');
        return view('contact', ['title' => 'Contact', 'contacts' => $data]);
    }

    public function input()
    {
        return view('/input-contact', ['title' => 'Contact']);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
        ]);

        $contactData = [
            'name' => $validateData['name'],
            'email' => $validateData['email'],
            'phone' => $validateData['phone'],
            'address' => $validateData['address'],
            'created_at' => NOW(),
            'updated_at' => null
        ];

        try {
            Contacts::create($contactData);
            Session::flash('status', 'success');
            Session::flash('message', 'New Contact Added Successfuly');
            return redirect('contact');
        } catch (QueryException $e) {
            Session::flash('status', 'warning');
            Session::flash('message', 'Error while adding New Contact !' . $e->getMessage());
            return redirect('contact');
        }
    }

    public function edit($id)
    {
        $data = Contacts::findOrFail($id);
        return view('/edit-contact', ['title' => 'Contact', 'contact' => $data]);
    }

    public function update(Request $request, $id)
    {
        $contact = Contacts::findOrFail($id);

        $contact->fill([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'updated_at' => NOW()
        ]);

        if ($contact->isDirty()) {
            Session::flash('status', 'success');
            Session::flash('message', 'Contact Update Successfuly');

            $contact->save();
            return redirect('contact');
        } else {
            Session::flash('status', 'warning');
            Session::flash('message', 'Error While Updating Contact ');

            return redirect('contact');
        }
    }

    public function destroy($id)
    {
        $contact = Contacts::findOrFail($id);

        $contact->delete();
        Session::flash('status', 'success');
        Session::flash('message', 'Delete Contact Successfuly');

        return redirect('contact');
    }
}
