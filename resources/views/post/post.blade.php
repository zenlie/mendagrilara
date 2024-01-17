@extends('layouts.main')

@section('container')
<h3>Pengguna - {{ $title }}</h3>
<hr>
@foreach($data as $dp)
<article class="mt-4">
<h5><a href="/post/detail/{{ $dp->nip }}">{{ $dp->nama }}</a></h5>
<p>{{ $dp['alamat'] }}</p>
</article>
@endforeach

@endsection
