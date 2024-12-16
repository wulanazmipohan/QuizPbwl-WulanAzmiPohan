@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Edit User</h3>
    <form action="{{ route('users.update', $users->user_id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="user_email" class="form-control" value="{{ $users->user_email }}" required>
        </div>
        <div class="mb-3">
            <label>Password (Kosongkan jika tidak ingin mengubah)</label>
            <input type="password" name="user_password" class="form-control">
        </div>
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="user_nama" class="form-control" value="{{ $users->user_nama }}" required>
        </div>
        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="user_alamat" class="form-control" rows="3" required>{{ $users->user_alamat }}</textarea>
        </div>
        <div class="mb-3">
            <label>No HP</label>
            <input type="text" name="user_hp" class="form-control" value="{{ $users->user_hp }}" required>
        </div>
        <div class="mb-3">
            <label>Role</label>
            <select name="user_role" class="form-control" required>
                <option value="1" {{ $users->user_role == 1 ? 'selected' : '' }}>Admin</option>
                <option value="2" {{ $users->user_role == 2 ? 'selected' : '' }}>User</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Status</label>
            <select name="user_aktif" class="form-control" required>
                <option value="Y" {{ $users->user_aktif == 'Y' ? 'selected' : '' }}>Aktif</option>
                <option value="N" {{ $users->user_aktif == 'N' ? 'selected' : '' }}>Tidak Aktif</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection