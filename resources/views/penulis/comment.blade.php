@extends('penulis.layout')

@section('content')

<div class="d-flex justify-content-center align-items-center" style="width: 175vh; height: 100%">
    <div class="card bg-white w-75 p-2" style="height: max-content">
        <h3 class="card-title ps-3 pt-3">Comment</h3>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Comment</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comment as $item)
                    <tr>
                        <td>{{$item->name}}</td>
                        <td>
                            <p class="d-inline-block text-truncate" style="max-width: 155px;">
                                {{($item->comment)}}
                            </p>
                        </td>
                        <td>{{$item->created_at->toDateString()}}</td>
                        <td>
                            <a href="{{route('showDetailComment', $item->id)}}">
                                <button type="button" class="btn btn-warning ms-2">Detail</button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @if(!count($comment))
                <div class="d-flex justify-content-center">
                   <p>Data Empty</p>
                </div>
            @endif
        </div>
    </div>
</div>

@endsection