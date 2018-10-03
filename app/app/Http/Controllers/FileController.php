<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

}
