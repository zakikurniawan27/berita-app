@extends('penulis.layout')

@section('content')

<div class="d-flex justify-content-center align-items-center" style="width: 175vh; height: 100%">
    <div class="card bg-white w-75 p-2" style="height: max-content">
        <h3 class="card-title ps-3 pt-3">
            Tambah Berita
        </h3>
        <div class="card-body mt-5">
            <form action="{{route('storeBerita')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Harap Masukan Judul Berita">
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <input id="x" type="hidden" name="content">
                    <trix-editor input="x" class="trix-content"></trix-editor>
                </div>
                <div class="input-group mb-3">
                    <input type="file" name="image" class="form-control" id="imageContent" accept=".png, .jpg, .jpeg">
                    <label class="input-group-text" for="imageContent">Upload Image</label>
                </div>
                <div class="mt-4 mb-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection