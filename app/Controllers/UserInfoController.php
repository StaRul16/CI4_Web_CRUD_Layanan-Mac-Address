<?php

namespace App\Controllers;

use App\Models\UserinfoModel;
use App\Models\JenisPerangkat;
use CodeIgniter\Controller;
use App\Models\DivisiModel;

class UserinfoController extends Controller
{
    public function search()
    {
        $keyword = $this->request->getVar('keyword');
        $model = new UserinfoModel();

        $data['dataMAC'] = $model->searchMACAllFields($keyword);

        $jenisPerangkatModel = new JenisPerangkat();
        $data['jenis_perangkat'] = $jenisPerangkatModel->findAll();

        $divisiModel = new DivisiModel();
        $data['departments'] = $divisiModel->findAll();

        return view('userinfo/view', $data);
    }

    public function index()
    {
        $model = new UserinfoModel();
        $data['dataMAC'] = $model->getMAC();

        // Instansiasi model JenisPerangkat
        $jenisPerangkatModel = new JenisPerangkat();
        $data['jenis_perangkat'] = $jenisPerangkatModel->findAll();

        // Ambil data departemen
        $divisiModel = new DivisiModel();
        $data['departments'] = $divisiModel->findAll();

        return view('/userinfo/view', $data);
    }

    public function create()
    {
        // Instansiasi model JenisPerangkat
        $jenisPerangkatModel = new JenisPerangkat();
        $data['jenis_perangkat'] = $jenisPerangkatModel->findAll();

        // Ambil data departemen
        $divisiModel = new DivisiModel();
        $data['departments'] = $divisiModel->findAll();

        return view('/userinfo/create', $data);
    }

    public function store()
{
    $macAddress = $this->request->getVar('mac_I');
            if (!$this->validateMacAddress($macAddress)) {
                return redirect()->back()->with('error', 'MAC Address tidak valid.')->withInput();
            }
            // Validasi tambahan
        $validationRules = [
            'nama' => 'required',
            'inventaris' => 'required',
            'divisi' => 'required',
            'perangkat' => 'required'
        ];

        $validationMessages = [
            'nama' => [
                'required' => 'Nama harus diisi.'
            ],
            'inventaris' => [
                'required' => 'Inventaris harus diisi.'
            ],
            'divisi' => [
                'required' => 'Divisi harus diisi.'
            ],
            'perangkat' => [
                'required' => 'Perangkat harus diisi.'
            ]
        ];

        if (!$this->validate($validationRules, $validationMessages)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

    $status = $this->request->getVar('status');
    $proxy = $this->request->getVar('proxy');
    $ratelimit = $this->request->getVar('ratelimit');

    $data = [
        'username' => $macAddress,
        'firstname' => $this->request->getVar('nama'),
        'lastname' => $this->request->getVar('inventaris'),
        'department_id' => $this->request->getVar('divisi'),
        'jenis_perangkat_id' => $this->request->getVar('perangkat')
    ];

    $model = new UserinfoModel();
    if ($model->where('username', $macAddress)->first()) {
        return redirect()->back()->with('error', 'MAC Address sudah ada.')->withInput();
    }

    $save = $model->saveMAC($data);

    if ($save) {
        $model->saveRadCheck($macAddress, $status);
        $model->saveRadReply($macAddress, 'Mikrotik-Mark-Id', $proxy);
        
        if (!empty($ratelimit)) {
            $model->saveRadReply($macAddress, 'Mikrotik-Rate-Limit', $ratelimit);
        }
        return redirect()->to('/userinfo')->with('success', 'Berhasil tambah MAC Address!');
    } else {
        return redirect()->back()->with('error', 'Gagal menyimpan MAC Address.');
    }
}


    public function edit($id)
    {
        $model = new UserinfoModel();
        $data['user'] = $model->find($id);

        // Instansiasi model JenisPerangkat
        $jenisPerangkatModel = new JenisPerangkat();
        $data['jenis_perangkat'] = $jenisPerangkatModel->findAll();

        // Ambil data departemen
        $divisiModel = new DivisiModel();
        $data['departments'] = $divisiModel->findAll();

        return view('/userinfo/edit', $data);
    }

    public function update($id)
    {
        $macAddress = $this->request->getVar('mac_I');
        if (!$this->validateMacAddress($macAddress)) {
            return redirect()->back()->with('error', 'MAC Address tidak valid.')->withInput();
        }

        $validationRules = [
            'nama' => 'required',
            'inventaris' => 'required',
            'divisi' => 'required',
            'perangkat' => 'required'
        ];

        $validationMessages = [
            'nama' => [
                'required' => 'Nama harus diisi.'
            ],
            'inventaris' => [
                'required' => 'Inventaris harus diisi.'
            ],
            'divisi' => [
                'required' => 'Divisi harus diisi.'
            ],
            'perangkat' => [
                'required' => 'Perangkat harus diisi.'
            ]
        ];

        if (!$this->validate($validationRules, $validationMessages)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'username' => $macAddress,
            'firstname' => $this->request->getVar('nama'),
            'lastname' => $this->request->getVar('inventaris'),
            'department_id' => $this->request->getVar('divisi'),
            'jenis_perangkat_id' => $this->request->getVar('perangkat')
        ];

        $model = new UserinfoModel();
        $existingMAC = $model->where('username', $macAddress)->where('id !=', $id)->first();
        if ($existingMAC) {
        return redirect()->back()->with('error', 'MAC Address sudah ada.')->withInput();
        }
        $update = $model->updateMAC($id, $data);

        if ($update) {
            return redirect()->to('/userinfo')->with('success', 'MAC Address berhasil diupdate!');
        } else {
            return redirect()->back()->with('error', 'Gagal mengupdate MAC Address.');
        }
    }

    public function delete($id)
{
    $model = new UserinfoModel();
    $delete = $model->deleteMAC($id);

    if ($delete) {
        return redirect()->to('/userinfo')->with('success', 'MAC Address berhasil dihapus!');
    } else {
        return redirect()->back()->with('error', 'Gagal menghapus MAC Address.');
    }
}


    public function deleteSelected()
    {
        $selectedItems = $this->request->getVar('selected');

        if (!$selectedItems) {
            return redirect()->back()->with('error', 'Pilih setidaknya satu item untuk dihapus.');
        }

        $model = new UserinfoModel();
        foreach ($selectedItems as $id) {
            $delete = $model->deleteMAC($id);
            if (!$delete) {
                return redirect()->back()->with('error', 'Gagal menghapus item dengan ID: ' . $id);
            }
        }

        return redirect()->to('/userinfo')->with('success', 'Item terpilih berhasil dihapus.');
    }

    private function validateMacAddress($mac)
    {
        $regex = '/^([0-9A-Fa-f]{2}[:-]){5}([0-9A-Fa-f]{2})$/';
        return preg_match($regex, $mac);
    }
}
