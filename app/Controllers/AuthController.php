<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseController
{
    private $users = [
        'admin' => [
            'id' => 1,
            'username' => 'admin',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'role' => 'admin'
        ],
        'user' => [
            'id' => 2,
            'username' => 'user',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'role' => 'user'
        ]
    ];

    public function login()
    {
        // Jika sudah login, redirect ke dashboard sesuai role
        if (session()->has('user')) {
            return redirect()->to(session()->get('user')['role']);
        }

        return view('login');
    }

    public function attemptLogin()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Cek apakah username ada di daftar user
        if (!isset($this->users[$username])) {
            session()->setFlashdata('error', 'Username atau password salah');
            return redirect()->back();
        }

        $user = $this->users[$username];

        // Verifikasi password (3. Login Page dan Session)
        if (!password_verify($password, $user['password'])) {
            session()->setFlashdata('error', 'Username atau password salah');
            return redirect()->back();
        }

        // Set session (3. Login Page dan Session)
        $userData = [
            'id' => $user['id'],
            'username' => $user['username'],
            'role' => $user['role']
        ];
        session()->set('user', $userData);

        // Redirect ke dashboard sesuai role
        return redirect()->to($user['role']);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
