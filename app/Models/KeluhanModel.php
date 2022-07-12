<?php

namespace App\Models;

use CodeIgniter\Model;

class KeluhanModel extends Model
{
    protected $table = "keluhan";
    protected $primaryKey = "id";
    protected $allowedFields = ["id_user", "judul", "isi", "tanggal", "gambar", "status"];
    protected $useTimestamps = false;
    
}