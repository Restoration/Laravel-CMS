@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Do you want to delete it?</div>
                <div class="card-body">
                <form method="post" action="/article/delete">
                    {{ csrf_field() }}
                    <input type="hidden" class="form-control" name="id" value="{{ $article->id }}">
                    <div class="form-group">
                        <label for="titleInput">Title</label>
                        <input type="text" readonly class="form-control" id="titleInput" name="title" value="{{ $article->title }}">
                    </div>
                    <div class="form-group">
                        <label for="bodyInput">Message</label>
                        <textarea readonly class="form-control" id="bodyInput" rows="3" name="body">{{ $article->body }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection
