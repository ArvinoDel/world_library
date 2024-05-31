<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class BookDetail extends Controller
{
    public function index(){
        // $bookModel = new \App\Models\BookModel();

        // $book = $bookModel->find('id');
            $data = [
                'title' => "Detail | WorldLibrary",
                'scrumb' => "Detail",
                'title_link' => "detail",
                // 'book' => $book,
            ];
            return view('pages/product', $data);
        }

    public function detail($id)
    {
        // Load model yang berinteraksi dengan data buku (misalnya: BookModel)
        $bookModel = new \App\Models\BookModel();

        // Ambil data buku berdasarkan ID
        $book = $bookModel->find($id);

        // Jika buku tidak ditemukan, redirect atau tampilkan pesan error
        if (!$book) {
            // Misalnya, redirect ke halaman utama
            return redirect()->to('/pages');
        }

        // Kirim data buku ke view detail buku
        return view('/pages/product', ['book' => $book]);
    }
}
