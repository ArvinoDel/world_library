<?php

namespace App\Models;

use CodeIgniter\Model;

class PenerbitModel extends Model
{
    protected $table = 'tb_penerbit';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama'];
}
