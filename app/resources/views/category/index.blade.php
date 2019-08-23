@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Category</div>
                <div class="card-body">
                    @foreach ($categories as $category)
                    <article class="mb-4">
                        <h4 class="card-title">{{ $category->name }}</h4>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $category->updated_at }}</h6>
                        <a href="/category/edit/{{ $category->id }}" class="card-link">Edit</a>
                    </article>
                    @endforeach
               </div>
            </div>
        </div>
    </div>
</div>
@endsection
