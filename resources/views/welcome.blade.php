@extends('layouts.app')

@section('content')
<div class="p-5 mb-4 bg-light rounded-3 text-center">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Welcome to Lara-Library</h1>
        <p class="col-md-8 fs-4">Find out our amazing books collection</p>
        <button class="btn btn-primary btn-lg" type="button">Find out more</button>
    </div>
</div>
<div class="content">
    <div class="container my-5">
        <div class="row">
            @forelse($books as $book)
            <div class="col">
                <div class="card">
                    <img src="{{$book->cover_image}}" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3>{{$book->title}}</h3>
                        <p>{{$book->plot}}</p>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <p>
                    🙄 Sorry, no books in the labrary yet.
                </p>
            </div>
            @endforelse
        </div>
    </div>
</div>
@endsection
