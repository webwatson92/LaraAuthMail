<?php

namespace App\Http\Controllers;
 
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;
 
class ContactController extends Controller
{
    public function create()
    {
        return view('tmpl.contact');
    }
 
    public function store(ContactRequest $request)
    {
        return view('tmpl.confirm');
    }
}