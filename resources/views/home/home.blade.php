@extends('layout')

@section('content')

<div class="d-flex flex-column justify-content-center align-items-center" style="width: 100%; height: max-content">
    <form action="{{route('home')}}" method="GET" class="d-flex justify-content-center" style="width: 100%">
        <div class="">
            <input type="text" class="form-control" name="search" placeholder="Searching...">
        </div>
        <div class="ms-2">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </form>
    @forelse($berita as $post)
    <div class="card bg-white p-2 mt-3"style="height: max-content; width: max-content">
        <div class="card-body">
            <h3 class="card-title">{{$post->title}}</h3>
            <img src="{{ asset($post->image) }}" alt="image" width="100">
            <div class="p-1 trix-content">
                <p class="d-inline-block text-truncate" style="width: 700px">{{ strip_tags($post->content)}}</p>
            </div>
            <div>
                <a href="{{route('showDetail', $post->id)}}">
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
