@extends('penulis.layout')

@section('content')

<div class="d-flex justify-content-center align-items-center" style="width: 175vh; height: 100%">
    <div class="card bg-white w-75 p-2" style="height: max-content">
        <div class="card-body">
            <h3 class="card-title ps-3 pt-3">Detail Comment</h3>
            <div class="form-floating mb-3">
                <input type="text" id="name" disabled value="{{$comment->name}}" class="form-control">
                <label for="name">Nama</label>
            </div>
            <div class="form-floating mb-3">
                <textarea type="text" id="comment" disabled class="form-control">{{$comment->comment}}</textarea>
                <label for="comment">Comment</label>
            </div>
            @foreach($dataComment as $data)
            <div class="form-floating mb-3">
                <input type="text" id="title" disabled value="{{$data->title}}" class="form-control">
                <label for="name">Title</label>
            </div>
            <div class="mb-3 d-flex justify-content-center">
                <img src="{{asset($data->image)}}" alt="image">
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" name="content" id="content" disabled  style="height: 29rem">{{strip_tags($data->content)}}</textarea>
                <label for="content">Content</label>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection