<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'tb_user';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'jk', 'telp', 'alamat', 'email', 'username', 'password', "image", "country", 'birthday', 'gender'];
}

