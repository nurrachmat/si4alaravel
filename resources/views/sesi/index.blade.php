@extends('layout.main')

@section('content')
<div class="container">
    <h1>Daftar Sesi</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('sesi.create') }}" class="btn btn-primary mb-3">Tambah Sesi</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Sesi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($sesis as $index => $sesi)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $sesi->nama }}</td>
                    <td>
                        <a href="{{ route('sesi.show', $sesi) }}" class="btn btn-info btn-sm">Lihat</a>
                        <a href="{{ route('sesi.edit', $sesi) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('sesi.destroy', $sesi) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus sesi ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">Belum ada sesi.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection