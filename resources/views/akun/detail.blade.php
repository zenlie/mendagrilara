@extends('layouts.main')

@section('container')
<h4>{{ $data['nama'] }}</h4>
<p>{{ $data['alamat'] }}</p>

<p><a href="#" onclick="history.back()">Kembali</a></p>
@endsection