<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('admin.contact.add-contact');
    }

     public function saveContact(Request $request){
        $this->validate($request,[
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'publication_status' => 'required',
        ]);


        $contact = new Contact();

        $contact->address = $request->address;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->publication_status = $request->publication_status;

        $contact->save();

        return redirect('/contact/add')->with('message','Contact Saved Successfully');
    }

     public function manageContact(){
        $contacts = Contact::all();
    	return view('admin.contact.manage-contact',['contacts' => $contacts]);
    }

    public function unpublishedContact($id){
        $contact = Contact::find($id);
        $contact->publication_status = 0;
        $contact->save();

        return redirect('/contact/manage');
    }

    public function publishedContact($id){
        $contact = Contact::find($id);
        $contact->publication_status = 1;
        $contact->save();

        return redirect('/contact/manage');
    }

    public function editContact($id){
        $contact = Contact::find($id);
        return view('admin.contact.edit-contact',['contact'=>$contact]);
    }

     public function updateContact(Request $request){
        $contact = Contact::find($request->id);

         $contact->address = $request->address;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->publication_status = $request->publication_status;

        $contact->save();

        return redirect('/contact/manage')->with('message','Contact Updated Successfully');
    }

    public function deleteContact($id){
        $contact = Contact::find($id);
        $contact->delete();

        return redirect('/contact/manage')->with('message','Contact deleted successfully');
    }

}
