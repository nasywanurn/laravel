@extends('layouts.master')
@section('judul')
halaman album
@endsection

@section('content')
<a class="btn btn-primary btn-lg"  href="{{ route('album') }}">Album</a>
{{-- <a class="btn btn-primary btn-lg"  href="{{ route('Artis') }}">Artis</a> --}}
@endsection


