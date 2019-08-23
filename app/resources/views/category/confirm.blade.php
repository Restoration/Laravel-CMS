@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Do you want to delete it?</div>
                <div class="card-body">
                <form method="post" action="/category/delete">
                    {{ csrf_field() }}
                    <input type="hidden" class="form-control" name="id" value="{{ $category->id }}">
                    {{ $category->name }}
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection
