@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">File list</div>
                <div class="card-body">
                    <div class="row">
                    @foreach ($images as $image)
                        <div class="col-md-4">
                            <div class="thumbnail">
                                <a href="{{ $image->real_path.'/'.$image->name }}">
                                    <img src="{{ $image->real_path.'/'.$image->name }}" alt="{{ $image->name }}">
                                    <div class="caption">
                                        <p>{{ $image->name }}</p>
                                        <a href="/file/edit/{{ $image->id }}" class="btn btn-success">Edit</a>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                    {{ $images->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
