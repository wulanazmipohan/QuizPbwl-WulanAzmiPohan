@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Golongan</h1>
    <a href="{{ route('golongan.create') }}" class="btn btn-primary mb-3">Tambah Golongan</a>

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($golongans as $golongan)
            <tr>
                <td>{{ $golongan->gol_id }}</td>
                <td>{{ $golongan->gol_kode }}</td>
                <td>{{ $golongan->gol_nama }}</td>
                <td>
                    <a href="{{ route('golongan.edit', $golongan->gol_id) }}" class="btn btn-warning">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection