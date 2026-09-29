<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;    
use App\Models\MataKuliah;

class MataKuliahController extends Controller
{
    public function index()
    {
        return view('list_mk', [
            'title' => 'Daftar Mata Kuliah',
            'mks' => MataKuliah::all(),
        ]);
    }

    public function create()
    {
        return view('create_mk', [
            'title' => 'Tambah Mata Kuliah',
        ]);
    }
    public function store(Request $request)
    {
        MataKuliah::create([
            'nama_mk' => $request->input('nama_mk'),
            'sks' => $request->input('sks'),
        ]);
        return redirect()->to('/mata_kuliah');
    }
}
