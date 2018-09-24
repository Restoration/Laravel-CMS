@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Article</div>
                <div class="card-body">
                    <form method="post" action="/article/create">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="titleInput">Title</label>
                            <input type="text" class="form-control" id="titleInput" name="title">
                        </div>
                        <div class="form-group">
                            <label for="bodyInput">Message</label>
                            <textarea class="form-control" id="bodyInput" rows="3" name="body"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
