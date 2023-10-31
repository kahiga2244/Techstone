<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactEmail;
use App\Mail\SubscribeEmail;
use App\Mail\RequestQuoteEmail;

class MailController extends Controller
{
    public function sendContactEmail(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'subject' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
          Mail::to('techstone254@gmail')->send(new ContactEmail($data));

          return redirect('/thankyou')->with('message', 'Message sent!');
    }
    public function sendSubscribeEmail(Request $request)
    {
        \Log::info('Sending subscribe email');
        $data = $request->validate([
        'email' => 'required',
    ]);

     Mail::to('techstone254@gmail.com.com')->send(new SubscribeEmail($data));

    return redirect('/thankyou')->with('message', 'Subscribed successfully!');
    }
    public function RequestQuoteEmail(Request $request)
    {
        Log::info('Request data:', $request->all());

        $data = $request->validate([
            'phone_number' => 'required',
            'username' => 'required',
            'business' => 'required',
            'service' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);
         // Log the validated data
         Log::info('Validated data:', $data);

        Mail::to('techstone254@gmail.com')->send(new RequestQuoteEmail($data));

        return redirect('/thankyou')->with('message', 'Subscribed successfully!');
    }
}
