<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "user";
    protected $primaryKey = "id";
    protected $allowedFields = ["nama_lengkap", "username", "no_hp", "nik", "password", "salt", "role"];
    protected $useTimestamps = false;
    
}