<?php

namespace App\Models;

use CodeIgniter\Model;

class UserActivityModel extends Model
{
    protected $table = 'tb_peminjaman';
    protected $primaryKey = 'id';
    protected $allowedFields = ['user_id', 'jumlah_buku', 'tgl_pinjam', 'tgl_kembali', 'batas_waktu', 'status', 'denda'];

    public function getUserActivities()
    {
        return $this->select('tb_peminjaman.*, tb_user.nama as user_name, tb_user.email')
                    ->join('tb_user', 'tb_peminjaman.user_id = tb_user.id')
                    ->findAll();
    }
}
