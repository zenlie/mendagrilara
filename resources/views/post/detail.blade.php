@extends('layouts.main')

@section('container')
<h4>{{ $data->nama }}</h4>
<p>{{ $data->tmplahir.", ".$data->tgllahir }}</p>
<p>{{ $data->alamat }}</p>
<p>{{ $data->email }}</p>
<p>{{ $data->status }}</p>

<p><a href="#" onclick="history.back()">Kembali</a></p>
@endsection