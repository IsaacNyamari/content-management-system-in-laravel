@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-body">
                    <img src="../storage/{{$post->images[0]->path}}" alt="" class="card-img">
                    <div class="card-title mt-2 text-capitalize">{{$post->title}}</div>
                    <div class="card-text">
                        {{$post->body}}
                    </div>
                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>
    </div>
@endsection
