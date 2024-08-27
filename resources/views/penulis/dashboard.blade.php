@extends('penulis.layout')

@section('content')

<div id="home" class="d-flex justify-content-center" style="width: 165vh">
    <div class="pt-3 ps-4 w-25">
        <div class="card bg-primary text-bg-primary text-center">
            <div class="card-body">
                <div>
                    <p class="fs-3">Berita</p>
                </div>
                <div>
                    <p class="fs-6">
                        Total Berita : {{count($berita)}}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-3 ps-4 w-25">
        <div class="card bg-primary text-bg-primary text-center">
            <div class="card-body">
                <div>
                    <p class="fs-3">Comment</p>
                </div>
                <div>
                    <p class="fs-6">
                        Total Comment : 0
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection