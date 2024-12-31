@extends('admin.layout.layout')
@section('content')
@if(session('success'))
  <div class="error">{{ session('success') }}<div>
@endif

<div class="card text-bg-success container" style="width: 90%;">
    <div class="card-body">
      <h5 class="card-title">Hae !!!</h5>
      <hr>
      <h6 class="card-subtitle" style="color: green">Okaerinasai {{ Auth::user()->nama }}-san</h6>
      <p>anda sudah login sebagai {{ Auth::user()->nama }} dan anda berhak melakukan apa pun kepada saya >.<</p>
    </div>
</div>

@endsection
