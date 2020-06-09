<?php

namespace App\Extension;

use Illuminate\Http\Request;
use Validator;

class Validate
{

    /**
     * Validate article form
     *
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Validate file
     *
     * @return \Illuminate\Http\Response
     */
    public function validateFile($request){
        return $this->_validateFile($request);
    }
    private function _validateFile($request){
        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($validator->fails()) {
            return $validator->messages();
        }

    }

    /**
     * Validate file information to insert database
     *
     * @return \Illuminate\Http\Response
     */
    public function validateFilePost($request){
        return $this->_validateFilePost($request);
    }
    private function _validateFilePost($request){
        $file = $request->file('image');
        $data = array();
        $in_public = 'uploads';
        $local_path = realpath(public_path($in_public));
        $data['name'] = $file->getClientOriginalName();
        $data['extension'] = $file->getClientOriginalExtension();
        $data['real_path'] = $local_path;
        $data['size'] = $file->getSize();
        $data['mime_type'] = $file->getMimeType();

        $validator = Validator::make($data, [
            'name' => 'required|max:255',
            'extension' => 'required|max:255',
            'real_path' => 'required|max:255',
            'size' => 'required',
            'mime_type' => 'required|max:255',
        ]);
        if ($validator->fails()) {
            return $validator->messages();
        }
    }

    /**
     * Validate contact form
     *
     * @return \Illuminate\Http\Response
     */
    public function validateContact($request){
        return $this->_validateContact($request);
    }
    private function _validateContact($request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email',
            'subject' => 'max:255',
            'message' => 'required',
        ]);
        if ($validator->fails()) {
            return $validator->messages();
        }
    }


    /**
     * Validate category form
     *
     * @return \Illuminate\Http\Response
     */
    public function validateCategory($request){
        return $this->_validateCategory($request);
    }
    private function _validateCategory($request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255|unique:categories',
        ]);
        if ($validator->fails()) {
            return $validator->messages();
        }
        return "";
    }
}
