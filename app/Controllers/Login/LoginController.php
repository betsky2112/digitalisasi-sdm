<?php

namespace App\Controllers\Login;

use App\Controllers\BaseController;
use App\Models\UserModel;

class LoginController extends BaseController
{
    public function index()
    {
        // Tampilkan form login
        return view('pages/login/login_view');
    }

    // public function processLogin()
    // {
    //     // Validasi inputan dari form
    //     $username = trim($this->request->getPost('username'));
    //     $password = trim($this->request->getPost('password'));

    //     // Cek apakah username dan password terisi
    //     if (!$username || !$password) {
    //         return redirect()->back()->with('error', 'Username dan password wajib diisi.');
    //     }

    //     // Panggil model untuk mencari user
    //     $userModel = new UserModel();
    //     $user = $userModel->getUserByUsername($username);

    //     if ($user) {
    //         // Verifikasi password
    //         if ($password === $user['password']) {
    //             // Simpan data user ke session
    //             session()->set([
    //                 'user_id'   => $user['id'],
    //                 'username'  => $user['username'],
    //                 'logged_in' => true,
    //             ]);

    //             // Redirect ke halaman dashboard
    //             return redirect()->to('/dashboard');
    //         } else {
    //             // Password salah
    //             return redirect()->back()->with('error', "Password $password salah.");
    //         }
    //     } else {
    //         // Username tidak ditemukan
    //         return redirect()->back()->with('error', 'Username tidak ditemukan.');
    //     }
    // }

    // public function logout()
    // {
    //     // Hapus session
    //     session()->destroy();
    //     return redirect()->to('/login')->with('success', 'Anda berhasil logout.');
    // }
}
