@extends('layouts.main')

@section('container')
<h3>About Me - {{ $title }}</h3>
    <hr>
    <h4>{{ $nama }}</h4>
    <p><i>{{ $email }}</i></p>
    <p>{{ $alamat }}</p>
    <img src="{{ $foto }}" width="200px" class="img-thumbnail rounded-circle">    
@endsection
