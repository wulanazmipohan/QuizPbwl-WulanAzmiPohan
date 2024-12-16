@extends('layouts.app')

@section('content')
<h1>Daftar Pelanggan</h1>


@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<a href="{{ route('pelanggan.create') }}" class="btn btn-primary mb-3">Tambah Pelanggan</a>

<table class="table table-bordered mt-3">
    <thead>
        <tr>
            <th>No</th>
            <th>No Pelanggan</th>
            <th>Nama</th>
            <th>Golongan</th>
            <th>Seri</th>
            <th>Status</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>No KTP</th>
            <th>Meteran</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pelanggans as $pelanggan)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $pelanggan->pel_no }}</td>
            <td>{{ $pelanggan->pel_nama }}</td>
            <td>{{ $pelanggan->golongan->gol_nama }}</td>
            <td>{{ $pelanggan->pel_seri }}</td>
            <td>{{ $pelanggan->pel_aktif == 'Y' ? 'Aktif' : 'Non-Aktif' }}</td>
            <td>{{ $pelanggan->pel_alamat }}</td>
            <td>{{ $pelanggan->pel_hp }}</td>
            <td>{{ $pelanggan->pel_ktp }}</td>
            <td>{{ $pelanggan->pel_meteran }}</td>
            <td>
                <a href="{{ route('pelanggan.edit', $pelanggan->pel_id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('pelanggan.destroy', $pelanggan->pel_id) }}" method="POST"
                    style="display:inline-block;">
                    @csrf

                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection