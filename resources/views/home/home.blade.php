@extends('layout')

@section('content')

<div class="d-flex justify-content-center align-items-center" style="width: 100%; height: 85vh">
    @forelse($berita as $post)
    <div class="card bg-white p-2"style="height: max-content; width: max-content">
        <div class="card-body">
            <h3 class="card-title">{{$post->title}}</h3>
            <img src="{{ asset($post->image) }}" alt="image" width="100">
            <div class="p-1">
                <p class="d-inline-block text-truncate" style="width: 700px">{{$post->content}}</p>
            </div>
            <div>
                <a href="">
                    <button class="btn btn-primary">Baca Selengkapnya</button>
                </a>
            </div>
        </div>
    </div>
    @empty
    <div>
        Data Berita is Empty
    </div>
    @endforelse
</div>

@endsection
