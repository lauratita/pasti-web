<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrangTuaRequest;
use App\Models\OrangTua;
use App\Services\OrangTuaService;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateOrangTuaRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;

class OrangTuaController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    protected $orangTuaService;
    public function __construct(OrangTuaService $orangTuaService)
    {
        $this->orangTuaService = $orangTuaService;
    }

    public function index(Request $request)
    {
        $search = $request->input('search');
        $orangTua = $this->orangTuaService->getAll($search);

        return view('pages.data.orangTua', [
            'orangTua' => $orangTua,
            'type_menu' => 'orangtua'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.data.tambahOrangTua', [
            'type_menu' => 'orangtua'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $validated = $request->validated(); // validasi pakai FormRequest

        // dd($request->all());
        $request->validate([
            'nik_ortu' => 'required|string|max:16|unique:tb_orangtua,nik_ortu',
            'nama_ortu' => 'required|string|max:50',
            'alamat_ortu' => 'required|string',
            'no_hp_ortu' => 'required|string|max:15',
            'jk_ortu' => 'required|in:laki-laki,perempuan',
            'email' => 'required|string|email|max:50|unique:tb_orangtua,email',
        ]);

        $data = $request->all();
        $data['password'] = $request->nik_ortu;

        $result = $this->orangTuaService->create($data);

        if ($result){
            return redirect()->route('orangTua.index')
                ->with('success', 'Orang tua berhasil ditambahkan!');
        } else {
            // Log::error('Error creating orang tua: ' . $e->getMessage());
            return redirect()->back()
                ->with('error', 'Gagal menambahkan orang tua!')
                ->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(OrangTua $orangTua)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $orangTua = $this->orangTuaService->getById($id);
        if (!$orangTua) {
            return redirect()->route('orangTua.index')
                ->with('error', 'Orang tua tidak ditemukan!');
        }

        return view('pages.data.editOrangTua', [
            'orangTua' => $orangTua,
            'type_menu' => 'orangtua'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nik_ortu' => 'required|string|max:16|unique:tb_orangtua,nik_ortu,' . $id . ',id_ortu',
            'nama_ortu' => 'required|string|max:50',
            'alamat_ortu' => 'required|string',
            'no_hp_ortu' => 'required|string|max:15',
            'jk_ortu' => 'required|in:laki-laki,perempuan',
            'email' => 'required|string|email|max:50|unique:tb_orangtua,email,' . $id . ',id_ortu',
        ]);

        $result = $this->orangTuaService->update($id, $request->all());

        if($result){
            return redirect()->route('orangTua.index')
                ->with('success', 'Orang tua berhasil diperbarui!');
        } else {
            return redirect()->back()
                ->with('error', 'Gagal memperbarui orang tua!')
                ->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $result = $this->orangTuaService->delete($id);

        if($result){
            return redirect()->route('orangTua.index')
                ->with('success', 'Orang tua berhasil dihapus!');
        } else {
            return redirect()->route('orangTua.index')
                ->with('error', 'Gagal menghapus orang tua!');
        }
    }
}