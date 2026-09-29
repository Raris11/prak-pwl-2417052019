<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        $kelas = (new Kelas())->getKelas();
        $title = 'Buat Pengguna Baru';

        return view('create_user', compact('kelas', 'title'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:20',
            'kelas_id' => 'required|exists:kelas,id',
        ]);

        $user = new UserModel();
        $user->nama = $data['nama'];
        $user->nim = $data['npm'];
        $user->kelas_id = $data['kelas_id'];
        $user->save();

        return redirect()->route('user.index');
    }

    public function index()
    {
        $users = (new UserModel())->getUser();
        $title = 'Daftar Pengguna';

        return view('list_user', compact('users', 'title'));
    }
}