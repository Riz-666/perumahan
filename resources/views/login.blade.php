@extends('layout.layout')
@section('content')
<div class="row">
    <div class="col"></div>
    <div class="col">
        <div class="card card-login">
            <div class="card-body">
                <h5 class="card-title">Masuk</h5>
                    <div class="mb-3">
                      <label class="form-label">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-text" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
    <div class="col"></div>
</div>

@endsection
