<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactsRequest;
use App\Models\Contacts;

class ContactsController extends Controller
{
    public function sendFeedbackMessage(ContactsRequest $req) {
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

    public function editFeedbackMessage($id) {
        $message = new Contacts;
        return view('feedback-edit', ['data' => $message->find($id)]);
    }

    public function updateFeedbackMessage($id, ContactsRequest $req) {
        $contact = Contacts::find($id);
        $contact->firstName = $req->input('firstName');
        $contact->lastName = $req->input('lastName');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save();
        return redirect()->route('feedback-message', $id)->with('success', 'The message updated!');
    }
    public function deleteFeedbackMessage($id) {
        Contacts::find($id)->delete();
        return redirect()->route('feedback-messages')->with('success', 'The message deleted!');
    }

}
