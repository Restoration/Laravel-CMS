@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Article</div>
                <div class="card-body">
                    <div class="alert alert-primary" role="alert">
                        Created article
                        <a href="/article" class="btn btn-primary">Back to list page</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
