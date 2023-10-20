<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\User;

class Login extends BaseController
{
    public function __construct()
    {
        helper(['form']);
        $this->userModel = new User();
    }

    public function index()
    {
        $data['title'] = 'Sign In | MC Tech'; 
        echo view('login',$data);
    }
    
    public function login()
    {
        // Jika sudah login, alihkan ke halaman lain (misalnya halaman dashboard)
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/dashboard');
        }

        // Validasi form login
        $validation = \Config\Services::validation();

        if ($this->request->getMethod() === 'post') {
            $rules = [
                'email' => 'required|valid_email',
                'password' => 'required|min_length[8]',
            ];

            $errors = [
                'password' => [
                    'min_length' => 'Password minimal harus 8 karakter.',
                ],
            ];

            if (!$this->validate($rules, $errors)) {
                return redirect()->back()->withInput()->with('validation', $validation);
            }

            // Proses login
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $user = $this->userModel->where('email', $email)->first();

            if ($user) {
                if (password_verify($password, $user['password'])) {
                    // Login sukses, set session
                    session()->set([
                        'isLoggedIn' => true,
                        'user_id' => $user['id'],
                        'username' => $user['username'],
                    ]);

                    return redirect()->to('admin/dashboard');
                }
            }

            // Login gagal
            session()->setFlashdata('message', 'Email atau password salah.');
            return redirect()->to('login');
        }

        return view('/login');
    }

    public function logout()
    {
        // Logout, hapus session
        session()->destroy();
        return redirect()->to('login');
    }
}
