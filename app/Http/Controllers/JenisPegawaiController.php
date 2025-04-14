<?php

namespace App\Http\Controllers;

use App\Services\JenisPegawaiService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class JenisPegawaiController extends Controller
{
    protected $jenisPegawaiService;

    public function __construct(JenisPegawaiService $jenisPegawaiService)
    {
        $this->jenisPegawaiService = $jenisPegawaiService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $jenisPegawai = $this->jenisPegawaiService->getAll($search);

    return view('pages.data.jenisPegawai', [
        'jenisPegawai' => $jenisPegawai,
        'type_menu' => 'pegawai'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.data.tambahJenisPegawai', [
            'type_menu' => 'pegawai'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:50'
        ]);

        $result = $this->jenisPegawaiService->create($request->all());

        if ($result) {
            return redirect()->route('jenisPegawai.index')
                ->with('success', 'Jenis pegawai berhasil ditambahkan!');
        } else {
            return redirect()->back()
                ->with('error', 'Gagal menambahkan jenis pegawai!')
                ->withInput();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $jenisPegawai = $this->jenisPegawaiService->getById($id);

        if (!$jenisPegawai) {
            return redirect()->route('jenisPegawai.index')
                ->with('error', 'Jenis pegawai tidak ditemukan!');
        }

        return view('pages.data.editJenisPegawai', [
            'jenisPegawai' => $jenisPegawai,
            'type_menu' => 'pegawai'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:50'
        ]);

        $result = $this->jenisPegawaiService->update($id, $request->all());

        if ($result) {
            return redirect()->route('jenisPegawai.index')
                ->with('success', 'Jenis pegawai berhasil diperbarui!');
        } else {
            return redirect()->back()
                ->with('error', 'Gagal memperbarui jenis pegawai!')
                ->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $result = $this->jenisPegawaiService->delete($id);

        if ($result) {
            return redirect()->route('jenisPegawai.index')
                ->with('success', 'Jenis pegawai berhasil dihapus!');
        } else {
            return redirect()->route('jenisPegawai.index')
                ->with('error', 'Gagal menghapus jenis pegawai!');
        }
    }
}
