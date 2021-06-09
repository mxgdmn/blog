<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactsRequest;

class ContactsController extends Controller
{
    public function submit(ContactsRequest $req) {
        dd($req->input("f-name"));
    }
}
