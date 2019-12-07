<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SandEmailController extends Controller
{
    function index()
    {
        return view('user.contact');
    }

    function send(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required | email',
            'subject' => 'required',
            'website' => 'required',
            'message' => 'required'
        ]);

        $first_name = $request->get('first_name');
        $last_name = $request->get('last_name');
        $email = $request->get('email');
        $subject = $request->get('subject');
        $website = $request->get('website');
        $message = $request->get('message');
        $date = date('Y-m-d');

        $to = "ppa@falconmyanmar.com";

        $body = 'Hello, <br><br>

        You have received a message from Benchmark Management College International. <br /><br />

        First Name    : '.$first_name.'    <br /><br />

        Last Name    : '.$last_name.'    <br /><br />

        Email : '.$email.'    <br /><br />

        Date : '.$date.'    <br /><br />

        Website : '.$website.'    <br /><br />

        Subject : '.$subject.'    <br /><br />

        Message : '.$message.'    <br /><br />

        ';

        $headers = "From: ".$email."\n";

        // $headers .= "MIME-Version: 1.0\n";

        // $headers .= "Content-type: text/html; charset=iso-8859-1\n";

        if (mail($to, $subject, $body, $headers)) {

            // echo '<div class="alert alert-success form-alert">Thank you very much for contacting us.</div>';
            return redirect('/contact');

        } else{

            echo '<div class="alert alert-danger form-alert">There was an error sending the email.</div>';
        }
    }
}
