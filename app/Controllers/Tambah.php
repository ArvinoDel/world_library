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
        $bookModel = new BookModel();
        $kategoriModel = new KategoriModel();
        $penulisModel = new PenulisModel();
        $penerbitModel = new PenerbitModel();

        $buku = $bookModel->findAll();

        foreach ($buku as &$book) {
            $book['kategori'] = $kategoriModel->find($book['kategori_id'])['nama'];
            $book['penulis'] = $penulisModel->find($book['penulis_id'])['nama'];
            $book['penerbit'] = $penerbitModel->find($book['penerbit_id'])['nama'];
        }

        $data1 = [
            'title' => "Add Product | WorldLibrary",
            'scrumb' => "Add Product",
            'title_link' => 'tambah',
            'buku' => $buku,
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

            if (!$this->validate($rules)) {
                return redirect()->back()->withInput()->with('validation', $this->validator);
            }

            $penulisModel = new PenulisModel();
            $penulisData = ['nama' => $this->request->getPost('penulis')];
            $penulis = $penulisModel->where('nama', $penulisData['nama'])->first();
            if (!$penulis) {
                $penulisModel->save($penulisData);
                $penulisId = $penulisModel->insertID();
            } else {
                $penulisId = $penulis['id'];
            }

            $kategoriModel = new KategoriModel();
            $kategoriData = ['nama' => $this->request->getPost('kategori')];
            $kategori = $kategoriModel->where('nama', $kategoriData['nama'])->first();
            if (!$kategori) {
                $kategoriModel->save($kategoriData);
                $kategoriId = $kategoriModel->insertID();
            } else {
                $kategoriId = $kategori['id'];
            }

            $penerbitModel = new PenerbitModel();
            $penerbitData = ['nama' => $this->request->getPost('penerbit')];
            $penerbit = $penerbitModel->where('nama', $penerbitData['nama'])->first();
            if (!$penerbit) {
                $penerbitModel->save($penerbitData);
                $penerbitId = $penerbitModel->insertID();
            } else {
                $penerbitId = $penerbit['id'];
            }

            $bookModel = new BookModel();
            $dataBuku = [
                'judul' => $this->request->getPost('title'),
                'tahun' => date('Y-m-d H:i:s'),
                'jumlah' => $this->request->getPost('jumlah'),
                'kategori_id' => $kategoriId,
                'penulis_id' => $penulisId,
                'penerbit_id' => $penerbitId,
                'cover' => $this->saveCover(),
            ];
            $bookModel->save($dataBuku);

            return redirect()->to('/pages/tambah')->with('success', 'Buku berhasil ditambahkan');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
{
    $bookModel = new BookModel();
    $penulisModel = new PenulisModel();
    $kategoriModel = new KategoriModel();
    $penerbitModel = new PenerbitModel();

    // Find the book by ID
    $book = $bookModel->find($id);

    // If the book doesn't exist, throw a 404 error
    if (!$book) {
        throw new \CodeIgniter\Exceptions\PageNotFoundException('Buku dengan ID ' . $id . ' tidak ditemukan.');
    }

    if ($this->request->getMethod() === 'post') {
            $rules = [
                'title' => 'required',
                'penulis' => 'required',
                'penerbit' => 'required',
                'jumlah' => 'required|integer',
                'kategori' => 'required',
            ];

            if (!$this->validate($rules)) {
                return redirect()->back()->withInput()->with('validation', $this->validator);
            }

            $penulisData = ['nama' => $this->request->getPost('penulis')];
            $penulis = $penulisModel->where('nama', $penulisData['nama'])->first();
            if (!$penulis) {
                $penulisModel->save($penulisData);
                $penulisId = $penulisModel->insertID();
            } else {
                $penulisId = $penulis['id'];
            }

            $kategoriData = ['nama' => $this->request->getPost('kategori')];
            $kategori = $kategoriModel->where('nama', $kategoriData['nama'])->first();
            if (!$kategori) {
                $kategoriModel->save($kategoriData);
                $kategoriId = $kategoriModel->insertID();
            } else {
                $kategoriId = $kategori['id'];
            }

            $penerbitData = ['nama' => $this->request->getPost('penerbit')];
            $penerbit = $penerbitModel->where('nama', $penerbitData['nama'])->first();
            if (!$penerbit) {
                $penerbitModel->save($penerbitData);
                $penerbitId = $penerbitModel->insertID();
            } else {
                $penerbitId = $penerbit['id'];
            }

            $dataBuku = [
                'judul' => $this->request->getPost('title'),
                'jumlah' => $this->request->getPost('jumlah'),
                'kategori_id' => $kategoriId,
                'penulis_id' => $penulisId,
                'penerbit_id' => $penerbitId,
            ];

            // Handle cover update if a new cover is uploaded
            if ($this->request->getFile('cover')->isValid()) {
                $dataBuku['cover'] = $this->saveCover();
            }

            $bookModel->update($id, $dataBuku);

            return redirect()->to('/pages/tambah')->with('success', 'Buku berhasil diubah');
        }

        $data = [
            'title' => 'Edit Buku',
            'book' => $book,
            'penulis' => $penulisModel->findAll(),
            'kategori' => $kategoriModel->findAll(),
            'penerbit' => $penerbitModel->findAll(),
        ];

        return view('pages/edit', $data);
    }

    public function delete($id)
    {
        $bookModel = new BookModel();
        $book = $bookModel->find($id);

        if (!$book) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Buku dengan ID ' . $id . ' tidak ditemukan.');
        }

        $bookModel->delete($id);

        return redirect()->to('/pages/tambah')->with('success', 'Buku berhasil dihapus');
    }

    private function saveCover()
    {
        $cover = $this->request->getFile('cover');
        $coverName = $cover->getRandomName();
        $cover->move('image/', $coverName);
        return $coverName;
    }
}
