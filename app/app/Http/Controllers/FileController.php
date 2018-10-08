<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\File;

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
        //$real_path = $file->getRealPath();
        $size = $file->getSize();
        $mime_type = $file->getMimeType();
        $destinationPath = 'uploads';
        $in_public = 'uploads';
        $local_path = realpath(public_path($in_public));
        $file->move($local_path,$file->getClientOriginalName());

        $file = new File;
        $file->name = $name;
        $file->extension = $extension;
        $file->real_path = $local_path;
        $file->size = $size;
        $file->mime_type = $mime_type;
        $file->save();

        return view('file/complete');
    }
}
