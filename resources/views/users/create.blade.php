@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Tambah User Baru</h3>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="user_email" class="form-control" required>
            @error('user_email')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="user_password" class="form-control" required>
            @error('user_password')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="user_nama" class="form-control" required>
            @error('user_nama')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="user_alamat" class="form-control" required></textarea>
            @error('user_alamat')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label>No. HP</label>
            <input type="text" name="user_hp" class="form-control" required>
            @error('user_hp')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label>Role</label>
            <select name="user_role" class="form-control" required>
                <option value="1">Admin</option>
                <option value="2">User</option>
            </select>
            @error('user_role')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label>Status</label>
            <select name="user_aktif" class="form-control" required>
                <option value="1">Aktif</option>
                <option value="0">Tidak Aktif</option>
            </select>

            @error('user_aktif')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection