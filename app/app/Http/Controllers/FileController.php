<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\File;
use App\Http\Controllers\ValidateController as Validate;

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
        // Validate file
        $validate = new Validate;
        $errors =  $validate->validateFile($request);
        if(!empty($errors)){
            return view('file/index', ['errors' => $errors]);
        }

        // Validate insert data to database
        $errors =  $validate->validateFilePost($request);
        if(!empty($errors)){
            return view('file/index', ['errors' => $errors]);
        }

        // Get file information
        $file = $request->file('image');
        $name = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $size = $file->getSize();
        $mime_type = $file->getMimeType();

        // Move file
        $in_public = 'uploads';
        $local_path = realpath(public_path($in_public));
        $file->move($local_path,$file->getClientOriginalName());

        // Insert data to database
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
