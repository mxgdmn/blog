<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactsRequest;
use App\Models\Contacts;
use Illuminate\Database\Eloquent\Model;

class ContactsController extends Controller
{
    public function sendFeedback(ContactsRequest $req) {
        $contact = new Contacts;
        $contact->firstName = $req->input('firstName');
        $contact->lastName = $req->input('lastName');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save();
        return redirect()->route('home')->with('success', 'The message was send!');
    }

    public function showFeedbackMessages() {
        $messages = new Contacts;
        return view('feedback-messages', ['data' => $messages->all()]);
    }

    public function showOneFeedbackMessage($id) {
        $message = new Contacts;
        return view('feedback-message', ['data' => $message->find($id)]);
    }

}
