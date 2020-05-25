<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Import Contact model
Use App\Contact;

// Use Mail
Use Mail;

class ContactController extends Controller
{
    public function submitContactForm(Request $req)
    {
        $req->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'overunder25k' => 'required',
            'message' => 'required'
        ]);

        $contact = new Contact;

        $contact->firstname = $req->first_name;
        $contact->lastname = $req->last_name;
        $contact->email = $req->email;
        $contact->telephone = $req->phone;
        $contact->overunder25k = $req->overunder25k;
        $contact->message = $req->message;

        $contact->save();

            // Send email to FreshStart admin once quote form submitted
            $emailTo = "David Moftakhar";
            $emailAddress = ['d_moftakhar@hotmail.com', 'david@chillaweb.com'];
            $contactName = $req->first_name . " " . $req->last_name;
            $contactEmail = $req->email;
            $contactPhone = $req->phone;
            $overunder25k = $req->overunder25k;
            $contactMessage = $req->message;

               $data = array(  'name'=> $contactName, 
                               'email'=> $contactEmail, 
                               'phone' => $contactPhone,
                               'overunder25k' => $overunder25k,
                               'contactmessage' => $contactMessage
                           );
               
               // Mail to FreshStart
               Mail::send('email/contactsubmission', $data, function($message) use ($emailTo, $emailAddress){
                   $message->to($emailAddress)
                   ->subject('FreshStart Contact Form Submission');
               // echo "Email sent";
               });


            return redirect()
            ->back()
            ->withInput()
            ->with('success', 'You message has been sent. We will be in touch shortly.');
    }
}
