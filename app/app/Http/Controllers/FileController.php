<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class FileController extends Controller
{

    /**
     * Show the file upload page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('file/index');
    }

    /**
     * File upload process
     *
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request){
        $file = $request->file('image');
        $name = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $real_path = $file->getRealPath();
        $size = $file->getSize();
        $mime_type = $file->getMimeType();
        $destinationPath = 'uploads';
        $file->move($destinationPath,$file->getClientOriginalName());
        return view('file/complete');
    }
}
