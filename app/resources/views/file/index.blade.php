@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">File list</div>
                <div class="card-body">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="thumbnail">
                          <a href="/w3images/lights.jpg">
                            <img src="https://www.w3schools.com/w3images/fjords.jpg" alt="Lights" style="width:100%">
                            <div class="caption">
                              <p>Lorem ipsum...</p>
                            </div>
                          </a>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="thumbnail">
                          <a href="/w3images/nature.jpg">
                            <img src="https://www.w3schools.com/w3images/fjords.jpg" alt="Lights" style="width:100%">
                            <div class="caption">
                              <p>Lorem ipsum...</p>
                            </div>
                          </a>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="thumbnail">
                          <a href="/w3images/fjords.jpg">
                            <img src="https://www.w3schools.com/w3images/fjords.jpg" alt="Lights" style="width:100%">
                            <div class="caption">
                              <p>Lorem ipsum...</p>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
