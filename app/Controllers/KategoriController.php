<?php

namespace App\Controllers;

use App\Models\KategoriModel;

class KategoriController extends BaseController
{
    protected $kategori; 

    function __construct()
    {
        $this->kategori = new KategoriModel();
    } 

    public function index()
    {
        $kategori = $this->kategori->findAll();
        $data['kategori'] = $kategori;

        return view('v_kategori', $data);
    }

		/*
    fungsi dibawah ini yang bertanggung jawab untuk
    menangani request dari http://localhost:8080/produk/edit/23
    */
    public function edit($id)
    {
        $dataForm = [
            'kategori' => $this->request->getPost('kategori'),
            'updated_at' => date("Y-m-d H:i:s")
        ];

        $this->kategori->update($id, $dataForm);

        return redirect('kategori')->with('success', 'Data Berhasil Diubah');
    }

    public function delete($id_k)
    {
        $this->kategori->delete($id_k);

        return redirect('kategori')->with('success', 'Data Berhasil Dihapus');
    }
    
    public function create()
    {
    $dataForm = [
        'kategori' => $this->request->getPost('kategori'),
        'created_at' => date("Y-m-d H:i:s")
    ];

    $this->kategori->insert($dataForm);

    return redirect('kategori')->with('success', 'Data Berhasil Ditambah');
    } 
}
