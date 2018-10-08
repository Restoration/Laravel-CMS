@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">File Edit</div>
                <div class="card-body">
                     <div class="row">
                        <div class="col-md-4">
                            <div class="thumbnail">
                                <a href="{{ $file->real_path.'/'.$file->name }}">
                                    <img src="{{ $file->real_path.'/'.$file->name }}" alt="{{ $file->name }}">
                                    <div class="caption">
                                        <p>{{ $file->name }}</p>
                                        <a href="/file/delete?id={{ $file->id }}" class="btn btn-danger">Delete</a>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
