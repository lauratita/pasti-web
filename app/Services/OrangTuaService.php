<?php

namespace App\Services;

use App\Models\OrangTua;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;

class OrangTuaService
{
    protected $model;

    public function __construct()
    {
        $this->model = new OrangTua();
    }

    public function getAll($search = null)
    {
        try {
            if ($search) {
                return $this->model->where('nama_ortu', 'like', "%{$search}%")
                                   ->orWhere('nik_ortu', 'like', "%{$search}%")
                                   ->orWhere('email', 'like', "%{$search}%")
                                   ->get();
            }

            return $this->model->all();
        } catch (Exception $e) {
            Log::error('Error getting all orang tua: ' . $e->getMessage());
            return false;
        }
    }

    public function getById($id)
    {
        try {
            return $this->model->findOrFail($id);
        } catch (Exception $e) {
            Log::error("Error getting orang tua by ID ({$id}): " . $e->getMessage());
            return false;
        }
    }

    public function create($data)
    {
        try {
            return $this->model->create([
                'nik_ortu'     => $data['nik_ortu'],
                'nama_ortu'    => $data['nama_ortu'],
                'alamat_ortu'  => $data['alamat_ortu'],
                'no_hp_ortu'   => $data['no_hp_ortu'],
                'jk_ortu'      => $data['jk_ortu'],
                'email'        => $data['email'],
                'password'     => Hash::make($data['nik_ortu']),
            ]);
        } catch (Exception $e) {
            Log::error('Error creating orang tua: ' . $e->getMessage());
            return false;
        }
    }

    public function update($id, $data)
    {
        try {
            $ortu = $this->model->findOrFail($id);

            // Jika password disertakan dalam update, hash ulang
            if (!empty($data['nik_ortu'])) {
                $data['password'] = Hash::make($data['nik_ortu']);
            } else {
                unset($data['password']); // Hindari update kolom password jadi null
            }

            return $ortu->update($data);
        } catch (Exception $e) {
            Log::error("Error updating orang tua ({$id}): " . $e->getMessage());
            return false;
        }
    }

    public function delete($id)
    {
        try {
            $ortu = $this->model->findOrFail($id);
            return $ortu->delete();
        } catch (Exception $e) {
            Log::error("Error deleting orang tua ({$id}): " . $e->getMessage());
            return false;
        }
    }
}