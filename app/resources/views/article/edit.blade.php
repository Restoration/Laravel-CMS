@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Article</div>
                <div class="card-body">
                    <form method="post" action="/article/edit">
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
                        <input type="hidden" class="form-control" name="id" value="{{ $article->id }}">
                        <div class="form-group">
                            <label for="titleInput">Title</label>
                            <input type="text" class="form-control" id="titleInput" name="title" value="{{ $article->title }}">
                        </div>
                        <div class="form-group">
                            <label for="bodyInput">Message</label>
                            <textarea class="form-control" id="bodyInput" rows="3" name="body">{{ $article->body }}</textarea>
                        </div>
                        <a href="/article/delete/{{ $article->id }}" class="btn btn-danger">Delete</a>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
