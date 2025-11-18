<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    //list all contacts
    function index() 
{
    return view('contacts.index');
}
    //
    function create()
{
    return view('contacts.create');
}

function show($id)
{
    $contact = App\Models\Contacts::find($id); // Retrive the contact as an obj
    return view('contacts.show{id}', compact('contact')); // Convert the obj to an array
}
}
