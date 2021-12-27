<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }
    public function mailContactForm(Request $request)
    {

        $this->validate($request, [
      'name'     =>  'required',
      'subject'     =>  'required',
      'email'  =>  'required|email',
      'message' =>  'required',
      'captcha' => 'required|captcha'

     ]);
        $data = [

        'name' => $request->get('name'),
        'subject' => $request->get('subject'),
        'email' => $request->get('email'),
        'message' => $request->get('message'),
        ];

        \Mail::to(env('RECIPIENT_EMAIL'))->send(new \App\Mail\ContactMail($data));

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
}
