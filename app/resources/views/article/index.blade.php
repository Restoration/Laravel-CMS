@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Article</div>
                <div class="card-body"> 
                    @foreach ($articles as $article)
                    <article class="mb-4">
                        <h4 class="card-title">{{ $article->title }}</h4>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $article->updated_at }}</h6>
                        <p class="card-text">{{ $article->body }}</p>
                        <a href="/article/edit/{{ $article->id }}" class="card-link">Edit</a>
                    </article>
                    @endforeach
               </div>
            </div>
        </div>
    </div>
</div>
@endsection
