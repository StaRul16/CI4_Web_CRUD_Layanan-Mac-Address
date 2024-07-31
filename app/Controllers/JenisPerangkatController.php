<?php

namespace App\Controllers;
use App\Models\UserinfoModel;
use App\Models\JenisPerangkat;
use CodeIgniter\Controller;

class JenisPerangkatController extends Controller
{
    public function index()
    {
        $model = new JenisPerangkat();
        $data['jenis_perangkat'] = $model->findAll();
        return view('/perangkat/view', $data);
    }

    public function create()
    {
        return view('perangkat/create');
    }

    public function store()
    {
        $model = new JenisPerangkat();
        $validationRules = [
            'nama_perangkat' => 'required'
        ];

        $validationMessages = [
            'nama_perangkat' => [
                'required' => 'Nama Perangkat harus diisi.'
            ]
        ];

        if (!$this->validate($validationRules, $validationMessages)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
    
        // Simpan data jika validasi berhasil
        $saved = $model->save([
            'nama_perangkat' =>$this->request->getPost('nama_perangkat'),
        ]);
        if ($saved) {
            session()->setFlashdata('success', 'Perangkat berhasil ditambahkan.');
        } else {
            session()->setFlashdata('error', 'Gagal menambahkan perangkat.');
        }
        return redirect()->to('/perangkat');
    }

    public function edit($id)
    {
        $model = new JenisPerangkat();
        $data['jenis_perangkat'] = $model->find($id);
        return view('perangkat/edit', $data);
    }

    public function update($id)
    {
        $model = new JenisPerangkat();
        $validationRules = [
            'nama_perangkat' => 'required'
        ];

        $validationMessages = [
            'nama_perangkat' => [
                'required' => 'Nama Perangkat harus diisi.'
            ]
        ];

        if (!$this->validate($validationRules, $validationMessages)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
        // Update data jika validasi berhasil
        $model->update($id, [
            'nama_perangkat' => $this->request->getPost('nama_perangkat'),
        ]);
        return redirect()->to('/perangkat'); 
    }

    public function delete($id)
    {
        // Membuat instansiasi model JenisPerangkat
        $model = new JenisPerangkat();
        
        // Mengecek apakah JenisPerangkat digunakan oleh Userinfo
        $userinfoModel = new UserinfoModel();
        $isUsed = $userinfoModel->isJenisPerangkatUsed($id);
        
        if ($isUsed) {
            // Jika JenisPerangkat digunakan, tampilkan pesan error
            session()->setFlashdata('error', 'Perangkat ini sedang digunakan di Mac Address. Tidak dapat menghapus.');
            return redirect()->to('/perangkat');
        }

        // Jika tidak digunakan, lanjutkan proses penghapusan
        $model->delete($id);
        session()->setFlashdata('success', 'Perangkat berhasil dihapus.');
        return redirect()->to('/perangkat');
    }
}
