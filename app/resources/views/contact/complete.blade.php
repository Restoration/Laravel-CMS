@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Send email.</div>
                <div class="card-body">
                    <div class="alert alert-primary" role="alert">
                        Send your message.
                        <a href="/contact/index" class="btn btn-primary">Back to contact page</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
