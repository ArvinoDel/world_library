<?php

namespace App\Controllers;

use App\Models\BookModel;
use App\Models\PenulisModel;
use App\Models\KategoriModel;
use App\Models\PenerbitModel;
use CodeIgniter\Controller;

class Tambah extends Controller
{
    public function index()
    {
        $data1 = [
            'title' => "Add Product | WorldLibrary",
            'scrumb' => "Add Product",
            'title_link' => 'tambah',
        ];
        return view('/pages/tambah', $data1);
    }

    public function tambah()
    {
        helper(['form', 'url']);

        try {
            $rules = [
                'title' => 'required',
                'penulis' => 'required',
                'penerbit' => 'required',
                'jumlah' => 'required|integer',
                'kategori' => 'required',
                'cover' => 'uploaded[cover]|max_size[cover,2048]|is_image[cover]',
            ];

            // Validasi input
            $this->validate($rules);

            

            // Simpan data buku
            $bookModel = new BookModel();
            $dataBuku = [
                'judul' => $this->request->getPost('title'),
                'tahun' => date('Y'), // Get the current year
                'jumlah' => $this->request->getPost('jumlah'),
                'kategori' => $this->request->getPost('kategori'),

                'cover' => $this->saveCover(),
            ];
            $bookModel->save($dataBuku);

            // Simpan data penulis
            $penulisModel = new PenulisModel();
            $penulisData = ['nama' => $this->request->getPost('penulis')];
            $penulisModel->save($penulisData);

            // Simpan data kategori
            $kategoriModel = new KategoriModel();
            $kategoriData = ['nama' => $this->request->getPost('kategori')];
            $kategoriModel->save($kategoriData);

            // Simpan data penerbit
            $penerbitModel = new PenerbitModel();
            $penerbitData = ['nama' => $this->request->getPost('penerbit')];
            $penerbitModel->save($penerbitData);
            dd($penulisData,$kategoriData,$penerbitData,$this->saveCover());

            $data2 = [
                'title' => "Add Product | WorldLibrary",
                'scrumb' => "Add Product",
                'title_link' => 'tambah',
            ];
            // Redirect dengan flash data
            return redirect()->to('/pages/tambah',)->with('buku', $bookModel->findAll());
        } catch (\Exception $e) {
            $data['validation'] = $this->validator;
            return view('/pages/tambah', $data);
        }
    }

    // Fungsi untuk menyimpan cover
    private function saveCover()
    {
        $cover = $this->request->getFile('cover');
        $coverName = $cover->getRandomName();
        $cover->move('img/', $coverName);
        return $coverName;
    }
}
