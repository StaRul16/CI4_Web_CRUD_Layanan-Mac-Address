<?php namespace App\Controllers;

use App\Models\OperatorModel;
use CodeIgniter\Controller;

class LoginController extends Controller
{
    public function index()
    {
        return view('/auth/login');
    }

    public function authenticate()
    {
        $session = session();
        $model = new OperatorModel();
        
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        
        $operator = $model->where('username', $username)->first();
        
        if ($operator) {
            // Tambahkan logging
            log_message('debug', 'Password from user: ' . $password);
            log_message('debug', 'Password from database: ' . $operator['password']);
            log_message('debug', 'Password hash length: ' . strlen($operator['password']));
            
            if (password_verify($password, $operator['password'])) {
                $session->set([
                    'id' => $operator['id'],
                    'username' => $operator['username'],
                    'nama' => $operator['nama'],
                    'isLoggedIn' => true,
                ]);
                return redirect()->to('/dashboard');
            } else {
                log_message('debug', 'Password verification failed');
                $session->setFlashdata('msg', ['text' => 'Password salah', 'class' => 'alert alert-danger']);
                return redirect()->to('/auth/login');
            }
        } else {
            $session->setFlashdata('msg', ['text' => 'Username tidak ditemukan', 'class' => 'alert alert-danger']);
            return redirect()->to('/auth/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/auth/login');
    }

    public function register()
    {
        return view('/auth/register');
    }

    public function store()
    {
        $model = new OperatorModel();
        
        $data = [
            'username' => $this->request->getVar('username'),
            'nama' => $this->request->getVar('nama'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
        ];
        log_message('debug', 'Register Data: ' . json_encode($data));

        $model->insert($data);
        
        return redirect()->to('/auth/login')->with('msg', ['text' => 'Registrasi berhasil, silakan login', 'class' => 'alert alert-success']);
    }
}
