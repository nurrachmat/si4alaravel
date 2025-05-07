@extends('layout.main')

@section('content')
    <h1>Mahasiswa</h1>

    @foreach ($mahasiswa as $item)
        {{ $item->npm }} | {{ $item->nama }} | {{ $item->prodi->nama }} <br>
    @endforeach
@endsection