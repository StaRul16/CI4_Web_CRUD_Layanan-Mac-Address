<?php

namespace App\Controllers;
use App\Models\UserinfoModel;
use App\Models\DivisiModel;
use CodeIgniter\Controller;

class DivisiController extends Controller
{
    public function index()
    {
        $model = new DivisiModel();
        $data['department'] = $model->findAll();
        return view('divisi/view', $data);
    }

    public function create()
    {
        return view('divisi/create_divisi');
    }

    public function store()
    {
        $model = new DivisiModel();

        $validationRules = [
            'kode_department' => 'required',
            'nama_department' => 'required'
        ];

        $validationMessages = [
            'kode_department' => [
                'required' => 'Kode Divisi harus diisi.'
            ],
            'nama_department' => [
                'required' => 'Nama Divisi harus diisi.'
            ]
        ];

        if (!$this->validate($validationRules, $validationMessages)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
        
        $saved = $model->save([
            'nama_department' => $this->request->getPost('nama_department'),
            'kode_department' => $this->request->getPost('kode_department'),
        ]);
        if ($saved) {
            session()->setFlashdata('success', 'Divisi berhasil ditambahkan.');
        } else {
            session()->setFlashdata('error', 'Gagal menambahkan divisi.');
        }
        return redirect()->to('/divisi');
    }

    public function edit($id)
    {
        $model = new DivisiModel();
        $data['department'] = $model->find($id);
        return view('divisi/edit_divisi', $data);
    }

    public function update($id)
    {
        $model = new DivisiModel();
        $validationRules = [
            'kode_department' => 'required',
            'nama_department' => 'required'
        ];

        $validationMessages = [
            'kode_department' => [
                'required' => 'Kode Divisi harus diisi.'
            ],
            'nama_department' => [
                'required' => 'Nama Divisi harus diisi.'
            ]
        ];

        if (!$this->validate($validationRules, $validationMessages)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
        $model->update($id, [
            'nama_department' => $this->request->getPost('nama_department'),
            'kode_department' => $this->request->getPost('kode_department')
        ]);
        return redirect()->to('/divisi'); 
    }

    public function delete($id)
    {
        $model = new DivisiModel();

        // Check if the division is still referenced in Userinfo
        $userinfoModel = new UserinfoModel();
        $isUsed = $userinfoModel->isDepartmentUsed($id);

        if ($isUsed) {
            session()->setFlashdata('error', 'Divisi tidak dapat dihapus karena masih digunakan dalam data user.');
            return redirect()->to('/divisi');
        }

        // Delete the division if not used
        $deleted = $model->delete($id);

        if ($deleted) {
            session()->setFlashdata('success', 'Divisi berhasil dihapus.');
        } else {
            session()->setFlashdata('error', 'Gagal menghapus divisi.');
        }

        return redirect()->to('/divisi');
    }
}
