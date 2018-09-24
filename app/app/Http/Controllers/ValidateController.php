<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class ValidateController extends Controller
{
    public function validateArticle($request){
        return $this->_validateArticle($request);
    }
    private function _validateArticle($request){
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'body' => 'required',
        ]);
        if ($validator->fails()) {
            return $validator->messages();
        }
        return "";
    }
}
