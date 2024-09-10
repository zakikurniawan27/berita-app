@extends('layout')

@section('content')

<div class="d-flex flex-column justify-content-center align-items-center" style="width: 100%;">
    <div class="card bg-white p-5 mt-5" style=" width: 70%">
        <div class="card-body">
            <h3 class="card-title fs-2" style="line-height: 30%">{{$berita->title}}</h3>
            <p class="text-body-secondary fst-italic ps-1" style="font-size: 13px">{{$berita->created_at->diffForHumans()}}</p>
            <div class="d-flex justify-content-center mt-4" style="width: 100%">
                <img src="{{ asset($berita->image) }}" alt="image" width="300">
            </div>
            <div class="mt-3">
                <p class="fs-6" style="text-align: justify; text-indent: 2rem">{!!$berita->content!!}</p>
            </div>
        </div>
    </div>
    <div class="card bg-white mt-3" style="width: 70%">
        <div class="card-body">
            <form action="{{route('createComment', $berita->id)}}" method="POST">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingName" name="name" placeholder="masukan nama anda">
                    <label for="floatingName">Nama</label>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" name="comment" placeholder="Tinggalkan Komen disini" id="floatingComment"></textarea>
                    <label for="floatingComment">Comment</label>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection