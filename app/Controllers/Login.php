<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Login extends Controller
{
    public function index()
    {
        return view('auth/login'); // Sesuaikan dengan lokasi view Anda
    }

    public function process()
    {
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to('/auth/login');
        }

        if (!$this->validate([
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Username harus diisi'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password harus diisi'
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $users = new UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $dataUser = $users->where('username', $username)->first();

        if ($dataUser) {
            if (password_verify($password, $dataUser['password'])) {
                session()->set([
                    'username' => $dataUser['username'],
                    'name' => $dataUser['nama'], // Sesuaikan dengan nama field yang sesuai
                    'logged_in' => TRUE
                ]);
                return redirect()->to('/dashboard'); // Sesuaikan dengan lokasi halaman dashboard
            } else {
                session()->setFlashdata('error', 'Password salah');
                return redirect()->back()->withInput();
            }
        } else {
            session()->setFlashdata('error', 'Username tidak ditemukan');
            return redirect()->back()->withInput();
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/auth/login'); // Sesuaikan dengan lokasi halaman login
    }
}
