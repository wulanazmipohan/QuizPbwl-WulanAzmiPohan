@extends('layouts.app')

@section('content')
<h1>Tambah Pelanggan</h1>

<!-- Tampilkan pesan error jika ada -->
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('pelanggan.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="pel_id_gol">Golongan</label>
        <select name="pel_id_gol" id="pel_id_gol" class="form-control" required>
            <option value="">Pilih Golongan</option>
            @foreach($golongans as $golongan)
            <option value="{{ $golongan->gol_id }}">{{ $golongan->gol_nama }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="pel_id_user">User</label>
        <select name="pel_id_user" id="pel_id_user" class="form-control" required>
            <option value="">Pilih User</option>
            @foreach($users as $user)
            <option value="{{ $user->user_id }}">{{ $user->user_nama }}</option>
            @endforeach
        </select>

    </div>

    <div class="form-group">
        <label for="pel_no">No Pelanggan</label>
        <input type="text" class="form-control" id="pel_no" name="pel_no" required>
    </div>

    <div class="form-group">
        <label for="pel_nama">Nama</label>
        <input type="text" class="form-control" id="pel_nama" name="pel_nama" required>
    </div>

    <div class="form-group">
        <label for="pel_alamat">Alamat</label>
        <textarea class="form-control" id="pel_alamat" name="pel_alamat" required></textarea>
    </div>

    <div class="form-group">
        <label for="pel_hp">No HP</label>
        <input type="text" class="form-control" id="pel_hp" name="pel_hp">
    </div>

    <div class="form-group">
        <label for="pel_ktp">No KTP</label>
        <input type="text" class="form-control" id="pel_ktp" name="pel_ktp">
    </div>

    <div class="form-group">
        <label for="pel_seri">Seri</label>
        <input type="text" class="form-control" id="pel_seri" name="pel_seri" required>
    </div>

    <div class="form-group">
        <label for="pel_meteran">Meteran</label>
        <input type="number" class="form-control" id="pel_meteran" name="pel_meteran" required>
    </div>

    <div class="form-group">
        <label for="pel_aktif">Aktif</label>
        <select name="pel_aktif" id="pel_aktif" class="form-control">
            <option value="Y">Ya</option>
            <option value="N">Tidak</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection