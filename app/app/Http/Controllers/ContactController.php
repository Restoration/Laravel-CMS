<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Extension\Validate;
use App\Mail\SendMailable;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index() {
        return view('contact.index');
    }
    public function send(Request $request) {
        $validate = new Validate;
        $errors =  $validate->validateContact($request);
        if(!empty($errors)){
            return view('contact.index', ['errors' => $errors]);
        }
        $to = env('MY_EMAIL_ADDRESS',null);
        Mail::to($to)->send(new SendMailable($request));
        return view('contact.complete');
    }

}
