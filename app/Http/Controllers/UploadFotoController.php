<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UploadFotoController extends Controller
{
    public function index()
    {
        return view('layouts.import_profile');
    }

    public function upload_profile(Request $request)
    {
        if ($request->ajax() || $request->wantsJson()) {
            $rules = [
                'profile_photo' => ['required', 'mimes:jpg,jpeg,png', 'max:1024']
            ];
    
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Validasi Gagal',
                    'msgField' => $validator->errors()
                ]);
            }
    
            $file = $request->file('profile_photo'); // ambil file dari request
            $filename = uniqid() . '.' . $file->getClientOriginalExtension(); // buat nama unik
            $path = $file->storeAs('public/profile', $filename); // simpan di storage/app/public/profile
    
            // update user (asumsikan user login)
            $user = auth()->user();
            $user->profile_photo = $filename;
    
            return response()->json([
                'status' => true,
                'message' => 'Foto profil berhasil diupload',
                'photo_url' => asset('storage/profile/' . $filename)
            ]);
        }
    
        return redirect('/');
    }
    

    public function removeFoto()
    {
        $user = Auth::user();

        if ($user->foto && Storage::disk('public')->exists($user->foto)) {
            Storage::disk('public')->delete($user->foto);
        }


        UserModel::where('user_id', $user->user_id)->update(['foto' => null]);

        return redirect('/profile')->with('success', 'Foto profil berhasil dihapus');
    }
}