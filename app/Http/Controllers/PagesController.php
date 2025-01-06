<?php

namespace App\Http\Controllers;

use App\Mail\DonateMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    
    public function index()
    {
        return view('index');
    }
    public function moreofus()
    {
        return view('about');
    }

    public function helpers()
    {
        return view('ourpartners');
    }

    public function donmatter()
    {
        return view('donationmatters');
    }

    public function servicom()
    {
        return view('ourservice');
    }

    public function send_message(Request $request)
    {
        $request->validate([
            'firstname'=> 'required',
            'lastname'=> 'required',
            'email'=> 'required',
            'number' => 'required',
            'address'=> 'required',
            'message'=> 'required',
        ]);

        $to = "info@divineonecommunity.com";

        $data = [
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'number' => $request->number,
            'address' => $request->address,
            'message' => $request->message,
            'time' => date('js M. Y h:i a'),
        ];

        $mail = Mail::to($to)->send(new DonateMail($data));

        if ($mail) {
            return view('thankyou');
        }
        return redirect()->back()->with('error', 'Mail not sent');


    }

    public function thank_you()
    {
        return view('thankyou');
    }
}
