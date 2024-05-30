<?php

namespace App\Models;

use CodeIgniter\Model;

class BookModel extends Model
{
    protected $table = 'tb_buku';
    protected $primaryKey = 'id';
    protected $allowedFields = ['judul', 'penulis_id', 'penerbit_id', 'tahun', 'jumlah', 'kategori_id', 'cover'];
    
    public function getBooksWithDetails()
    {
        return $this->select('tb_buku.*, tb_penulis.nama as penulis, tb_penerbit.nama as penerbit, tb_kategori.nama as kategori')
                    ->join('tb_penulis', 'tb_buku.penulis_id = tb_penulis.id')
                    ->join('tb_penerbit', 'tb_buku.penerbit_id = tb_penerbit.id')
                    ->join('tb_kategori', 'tb_buku.kategori_id = tb_kategori.id')
                    ->findAll();
    }
}
