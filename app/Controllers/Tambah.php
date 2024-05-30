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
            if (!$this->validate($rules)) {
                return redirect()->back()->withInput()->with('validation', $this->validator);
            }

            // Simpan data penulis dan dapatkan ID
            $penulisModel = new PenulisModel();
            $penulisData = ['nama' => $this->request->getPost('penulis')];
            $penulis = $penulisModel->where('nama', $penulisData['nama'])->first();
            if (!$penulis) {
                $penulisModel->save($penulisData);
                $penulisId = $penulisModel->insertID();
            } else {
                $penulisId = $penulis['id'];
            }

            // Simpan data kategori dan dapatkan ID
            $kategoriModel = new KategoriModel();
            $kategoriData = ['nama' => $this->request->getPost('kategori')];
            $kategori = $kategoriModel->where('nama', $kategoriData['nama'])->first();
            if (!$kategori) {
                $kategoriModel->save($kategoriData);
                $kategoriId = $kategoriModel->insertID();
            } else {
                $kategoriId = $kategori['id'];
            }

            // Simpan data penerbit dan dapatkan ID
            $penerbitModel = new PenerbitModel();
            $penerbitData = ['nama' => $this->request->getPost('penerbit')];
            $penerbit = $penerbitModel->where('nama', $penerbitData['nama'])->first();
            if (!$penerbit) {
                $penerbitModel->save($penerbitData);
                $penerbitId = $penerbitModel->insertID();
            } else {
                $penerbitId = $penerbit['id'];
            }

            // Simpan data buku
            $bookModel = new BookModel();
            $dataBuku = [
                'judul' => $this->request->getPost('title'),
                'tahun' => date('Y-m-d H:i:s'), // Menyimpan tanggal saat ini
                'jumlah' => $this->request->getPost('jumlah'),
                'kategori_id' => $kategoriId,
                'penulis_id' => $penulisId,
                'penerbit_id' => $penerbitId,
                'cover' => $this->saveCover(),
            ];
            $bookModel->save($dataBuku);

            // Redirect dengan flash data
            return redirect()->to('/pages/tambah')->with('success', 'Buku berhasil ditambahkan');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', $e->getMessage());
        }
    }

    // Fungsi untuk menyimpan cover
    private function saveCover()
    {
        $cover = $this->request->getFile('cover');
        $coverName = $cover->getRandomName();
        $cover->move('image/', $coverName);
        return $coverName;
    }
}
