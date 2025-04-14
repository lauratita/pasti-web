<?php

namespace App\Services;

use App\Models\JenisPegawai;
use Exception;
use Illuminate\Support\Facades\Log;

class JenisPegawaiService
{
    protected $model;

    public function __construct()
    {
        $this->model = new JenisPegawai();
    }

    public function getAll($search = null)
    {
        try {
            // Jika ada parameter pencarian
            if ($search) {
                return $this->model->where('nama', 'like', "%{$search}%")
                                  ->orWhere('id_jenispegawai', 'like', "%{$search}%")
                                  ->get();
            }

            // Jika tidak ada parameter pencarian, kembalikan semua data
            return $this->model->all();
        } catch (Exception $e) {
            Log::error('Error getting all jenis pegawai: ' . $e->getMessage());
            return false;
        }
    }

    public function getById($id)
    {
        try {
            return $this->model->findOrFail($id);
        } catch (Exception $e) {
            Log::error('Error getting jenis pegawai by ID: ' . $e->getMessage());
            return false;
        }
    }

    public function create($data)
    {
        try {
            return $this->model->create([
                'nama' => $data['nama']
            ]);
        } catch (Exception $e) {
            Log::error('Error creating jenis pegawai: ' . $e->getMessage());
            return false;
        }
    }

    public function update($id, $data)
    {
        try {
            $jenisPegawai = $this->model->findOrFail($id);
            return $jenisPegawai->update([
                'nama' => $data['nama']
            ]);
        } catch (Exception $e) {
            Log::error('Error updating jenis pegawai: ' . $e->getMessage());
            return false;
        }
    }

    public function delete($id)
    {
        try {
            $jenisPegawai = $this->model->findOrFail($id);
            return $jenisPegawai->delete();
        } catch (Exception $e) {
            Log::error('Error deleting jenis pegawai: ' . $e->getMessage());
            return false;
        }
    }
}
