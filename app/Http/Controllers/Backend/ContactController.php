<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::where('type', 0)->get();
        return view('admin.contact.index', compact('contacts'));
    }
    public function enquiryIndex()
    {
        $contacts = Contact::where('type', 1)->get();
        return view('admin.enquiry.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = Contact::find($id);
        $contact->seen = 1;
        $contact->update();
        return view('admin.contact.view', compact('contact'));
    }


    public function enquiryShow($id)
    {
        $contact = Contact::find($id);
        $contact->seen = 1;
        $contact->update();
        return view('admin.enquiry.view', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */



    public function destroy($id)
    {
        $contact = Contact::where('id', $id)->first();
        if($contact){
            $contact->delete();
            return redirect()->back()->with('success', 'Enquiry Successfully Deleted.');
        }else{
            return redirect()->back()->with('errors', 'Enquiry Not Found!!! Refresh your page.');
        }
    }
}
