<?php

namespace App\Services;

// use App\Models\datapengguna;
// use App\Models\User;
use App\Models\OrangTua;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
class LoginService
{
    public function loginweb($request)
    {
        $ceklogin = datapengguna::where('nip',$request['nip'])->first();
        if($ceklogin != null){
            if(Hash::check($request['password'],$ceklogin->password)){
                return $ceklogin;
            } else {
                return ['status' => 'password_error', 'message' => 'Password salah'];
            }
        } else {
            // Cek apakah NIP sudah pernah terdaftar
            $existingNip = datapengguna::where('nip', 'like', $request['nip'])->exists();

            if ($existingNip) {
                return ['status' => 'nip_error', 'message' => 'NIP salah'];
            } else {
                return ['status' => 'account_not_found', 'message' => 'Akun tidak ditemukan'];
            }
        }
    }
    public function loginsiswa($request)
    {
        $ceklogin = datapengguna::where('nis',$request['nis'])->first();
        if($ceklogin != null){
            if(Hash::check($request['password'],$ceklogin->password)){
                return $ceklogin;
            } else {
                return ['status' => 'password_error', 'message' => 'Password salah'];
            }
        } else {
            // Cek apakah NIP sudah pernah terdaftar
            $existingNip = datapengguna::where('nis', 'like', $request['nis'])->exists();

            if ($existingNip) {
                return ['status' => 'nip_error', 'message' => 'NIP salah'];
            } else {
                return ['status' => 'account_not_found', 'message' => 'Akun tidak ditemukan'];
            }
        }
    }

    public function loginortu($request)
    {
        $ortu = OrangTua::where('nik_ortu', $request['nik_ortu'])->first();

        if (!$ortu || !Hash::check($request['password'], $ortu->password)) {
            throw ValidationException::withMessages([
                'nik' => ['NIK atau password salah.'],
            ]);
        }

        // Generate token setelah login
    $token = $ortu->createToken('API Token')->plainTextToken;

    return ['user' => $ortu, 'token' => $token];
        // Auth::login($ortu);

        // return $ortu;
    }

    public function logout($request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    }

    public function changePassword($request)
    {
        $datauser = auth('sanctum')->user();
        $validator = Validator::make($request->all(), [
            'old_password' => 'required',
            'new_password' => 'required|min:6|different:old_password',
            'confirm_password' => 'required|same:new_password',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => $validator->errors()], 400);
        }

        $user = datapengguna::where('id_pegawai', $datauser->id_pegawai)->first();

        if (!Hash::check($request->old_password, $user->password)) {
            return response()->json(['status' => false, 'message' => 'Old password is incorrect'], 400);
        }

        $user->password = Hash::make($request->new_password);
        $user->save();

        return response()->json(['status' => true, 'message' => 'Password changed successfully']);
    }
}
