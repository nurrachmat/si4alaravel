@extends('layout.main')

@section('content')
    <h1>Program Studi</h1>

    @foreach ($prodi as $item)
        {{ $item->nama }} | {{ $item->singkatan }} | {{ $item->fakultas->nama }} <br>
    @endforeach
@endsection