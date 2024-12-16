@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Golongan</h1>

    <form action="{{ route('golongan.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="gol_kode" class="form-label">Kode Golongan</label>
            <input type="text" name="gol_kode" class="form-control" id="gol_kode" required>
        </div>
        <div class="mb-3">
            <label for="gol_nama" class="form-label">Nama Golongan</label>
            <input type="text" name="gol_nama" class="form-control" id="gol_nama" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection