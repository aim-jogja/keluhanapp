<?php

namespace App\Models;

use CodeIgniter\Model;

class KomentarModel extends Model
{
    protected $table = "komentar";
    protected $primaryKey = "id";
    protected $allowedFields = ["id_keluhan", "id_user", "isi", "tanggal"];
    protected $useTimestamps = false;
    
}