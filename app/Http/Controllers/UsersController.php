<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UsersController extends Controller
{
    public function index()
    {
        $users = Users::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_email' => 'required|email|unique:tb_users',
            'user_password' => 'required|min:8',
            'user_nama' => 'required|string|max:100',
            'user_alamat' => 'required|string',
            'user_hp' => 'required|string|max:25',
            'user_role' => 'required|integer',
            'user_aktif' => 'required|in:0,1',  // Validasi untuk angka 0 atau 1
        ]);

        // Simpan data dengan user_aktif sebagai 0 atau 1
        Users::create([
            'user_email' => $request->user_email,
            'user_password' => bcrypt($request->user_password),
            'user_nama' => $request->user_nama,
            'user_alamat' => $request->user_alamat,
            'user_hp' => $request->user_hp,
            'user_role' => $request->user_role,
            'user_aktif' => $request->user_aktif,  // Langsung menggunakan input user_aktif (0 atau 1)
        ]);

        return redirect()->route('users.index')->with('success', 'Data user berhasil ditambahkan');
    }

    public function edit($id)
    {
        $users = Users::findOrFail($id);
        return view('users.edit', compact('users'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'user_email' => 'required|email|unique:tb_users,user_email,' . $id . ',user_id',
            'user_nama' => 'required|string|max:100',
            'user_alamat' => 'required|string',
            'user_hp' => 'required|string|max:25',
            'user_role' => 'required|integer',
            'user_aktif' => 'required|in:0,1',  // Validasi untuk angka 0 atau 1
        ]);

        $users = Users::findOrFail($id);
        $users->update([
            'user_email' => $request->user_email,
            'user_password' => bcrypt($request->user_password),  // Hanya update password jika perlu
            'user_nama' => $request->user_nama,
            'user_alamat' => $request->user_alamat,
            'user_hp' => $request->user_hp,
            'user_role' => $request->user_role,
            'user_aktif' => $request->user_aktif,  // Langsung menggunakan input user_aktif (0 atau 1)
        ]);

        return redirect()->route('users.index')->with('success', 'Data user berhasil diperbarui');
    }

    public function destroy($id)
    {
        $users = Users::findOrFail($id);
        $users->delete();

        return redirect()->route('users.index')->with('success', 'Data user berhasil dihapus');
    }
}