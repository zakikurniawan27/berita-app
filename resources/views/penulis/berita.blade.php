@extends('penulis.layout')

@section('content')

<div class="d-flex justify-content-center align-items-center" style="width: 175vh; height: 100%">
    <div class="card bg-white w-75 p-2" style="height: max-content">
        <h3 class="card-title ps-3 pt-3">Berita</h3>
        <div class="card-body">
            <div class="d-flex justify-content-end mb-3">
                <a href="{{route('createBerita')}}" class="text-reset text-decoration-none">
                    <button type="button" class="btn btn-primary">
                        <span class="fs-5"> + </span>Tambah Berita
                    </button>    
                </a>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Author</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($berita as $item)
                    <tr>
                        <td>{{$item->username}}</td>
                        <td>
                            <p class="d-inline-block text-truncate" style="max-width: 125px;">
                                {{$item->title}}
                            </p>
                        </td>
                        <td>
                            <p class="d-inline-block text-truncate" style="max-width: 155px;">
                                {{$item->content}}
                            </p>
                        </td>
                        <td>{{$item->created_at->toDateString()}}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{route('editBerita', $item->id)}}">
                                <button type="button" class="btn btn-warning ms-2">Edit</button>
                                </a>
                                <form onsubmit="return confirm('apakah data ini mau dihapus?')" action="{{route('destroyBerita', $item->id)}}" method="POST" >
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger ms-2">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @if(!count($berita))
                <div class="d-flex justify-content-center">
                   <p>Data Empty</p>
                </div>
            @endif
        </div>
    </div>
</div>

@endsection