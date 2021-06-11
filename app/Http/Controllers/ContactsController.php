<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactsRequest;
use App\Models\Contacts;

class ContactsController extends Controller
{
    public function submit(ContactsRequest $req) {
        $contact = new Contacts();
        $contact->firstname = $req->input('firstname');
        $contact->lastname = $req->input('lastname');
        $contact->email = $req->input('email');
        $contact->message = $req->input('message');

        $contact->save();
        return redirect()->route('home')->with('success', 'Сообщение было добавлено!');
    }
    public function allData() {
        $messages = new Contacts;
        return view('allmessages', ['data' => $messages->all()]);
    }
    public function userData($id) {
        $message = new Contacts;
        return view('userdata', ['data' => $message->find($id)]);
    }
}
