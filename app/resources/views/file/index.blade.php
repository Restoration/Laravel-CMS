@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">FileUploade</div>
                <div class="card-body">
                    <form method="post" action="/file/upload" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" name="image"  class="custom-file-input" id="inputGroupFile" aria-describedby="inputGroupFileAddon">
                                <label class="custom-file-label" for="inputGroupFile">Choose file</label>
                            </div>
                        </div>
                        <div class="input-group-prepend">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
