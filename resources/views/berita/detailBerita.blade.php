@extends('layout')

@section('content')

<div class="d-flex justify-content-center align-items-center" style="width: 100%;">
    <div class="card bg-white p-5 mt-5" style=" width: 70%">
        <div class="card-body">
            <h3 class="card-title fs-2" style="line-height: 30%">{{$berita->title}}</h3>
            <p class="text-body-secondary fst-italic ps-1" style="font-size: 13px">{{$berita->created_at->diffForHumans()}}</p>
            <div class="d-flex justify-content-center mt-4" style="width: 100%">
                <img src="{{ asset($berita->image) }}" alt="image" width="300">
            </div>
            <div class="mt-3">
                <p class="fs-6" style="text-align: justify; text-indent: 2rem">{{$berita->content}}</p>
            </div>
        </div>
    </div>
</div>

@endsection