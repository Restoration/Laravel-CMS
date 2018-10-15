<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use App\File as Files;
use App\Extension\Validate;

class FileController extends Controller
{

    /**
     * Show the file upload page
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $images = DB::table('files')->paginate(10);
        return view('file/index',['images'=> $images]);
    }

    /**
     * Show the file upload page
     *
     * @return \Illuminate\Http\Response
     */
    public function add(){
        return view('file/add');
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
            $images = DB::table('files')->paginate(10);
            return view('file/add', ['errors' => $errors,'images'=> $images]);
        }

        // Validate insert data to database
        $errors =  $validate->validateFilePost($request);
        if(!empty($errors)){
            $images = DB::table('files')->paginate(10);
            return view('file/add', ['errors' => $errors,'images'=> $images]);
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
        $file = new Files;
        $file->name = $name;
        $file->extension = $extension;
        $file->real_path = $local_path;
        $file->size = $size;
        $file->mime_type = $mime_type;
        $file->save();

        return view('file/complete');
    }

    /**
     * Show the file edit page
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id){
        $file = Files::find($id);
        return view('file/edit', ['file' => $file]);
    }

    /**
     * The file delete process
     *
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request){
        $image_path = $request->image_path;
        if (File::exists($image_path)) {
            File::delete($image_path);
            Files::destroy($request->id);
            return view('file/complete');
        } else {
            return Redirect::back()->withErrors(['Failed to delete the file.']);
        }
    }
}
