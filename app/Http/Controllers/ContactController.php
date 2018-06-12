<?php


namespace App\Http\Controllers;
use App\Http\Requests;
use App\ContactUs;
use Illuminate\Http\Request;
// use App\Http\Requests\ContactRequest;
class ContactController extends Controller
{

public function store(Request $request)
{

  $this->validate($request,
[
  'contact_name'=>'required|min:5|max:100',
  'contact_email'=>'required|min:5|max:100',
  'contact_message'=>'required|min:5',
  'contact_type'=>'required|integer'
]
);
$contactUs=ContactUs::create(
  [
    'contact_name'=>$request->input('contact_name'),
    'contact_email'=>$request->input('contact_email'),
    'contact_type'=>$request->input('contact_type'),
    'contact_message'=>$request->input('contact_message'),
    'view'=>0
  ]
);
if($contactUs){
return redirect()->back()->with('success', 'message have been sent successfully');
}
else {
     return redirect()->back()->with('errors', 'error sending message');
}
}
}
