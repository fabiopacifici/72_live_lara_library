@extends('layouts.app')

@section('content')
<div class="p-5 mb-4 bg-light rounded-3 text-center">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Get in touch with Lara-Library</h1>
        <p class="col-md-8 fs-4">Contact us we will get back to you in a jiffy</p>
        <button class="btn btn-primary btn-lg" type="button">Find out more</button>
    </div>
</div>
<div class="content">
    <div class="container my-5">
        <form action="" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Mario" aria-describedby="nameHelper">
                <small id="nameHelper" class="text-muted">Type your name</small>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="mario@example.comment" aria-describedby="emailHelper">
                <small id="emailHelper" class="text-muted">Add your email address here</small>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" name="message" id="message" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
