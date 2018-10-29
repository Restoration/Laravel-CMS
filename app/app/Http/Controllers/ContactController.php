<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Extension\Validate;

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
        return view('contact.complete');
    }

}
