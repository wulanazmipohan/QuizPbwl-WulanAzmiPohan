@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Daftar Users</h3>
    <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Tambah User</a>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Email</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Role</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->user_email }}</td>
                <td>{{ $user->user_nama }}</td>
                <td>{{ $user->user_alamat }}</td>
                <td>{{ $user->user_hp }}</td>
                <td>{{ $user->user_role == 1 ? 'Admin' : 'User' }}</td>
                <!-- Perbaikan untuk Status -->
                <td>{{ $user->user_aktif == 1 ? 'Aktif' : 'Tidak Aktif' }}</td>
                <td>
                    <a href="{{ route('users.edit', $user->user_id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('users.destroy', $user->user_id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection