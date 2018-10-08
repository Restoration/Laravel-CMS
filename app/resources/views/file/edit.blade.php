@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">File Edit</div>
                <div class="card-body">
                    <form method="post" action="/file/delete">
                        {{ csrf_field() }}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                                </ul>
                            </div>
                        @endif
                        <input type="hidden" name="id" value="{{ $file->id }}">
                        <input type="hidden" name="image_path" value="{{ $file->real_path.'/'.$file->name  }}">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="thumbnail">
                                    <img src="{{ $file->real_path.'/'.$file->name }}" alt="{{ $file->name }}">
                                    <div class="caption">
                                        <p>{{ $file->name }}</p>
                                        <input type="submit" name="delete" class="btn btn-danger" value="Delete">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
