<?php

namespace App\Controllers;
use App\Models\KeluhanModel;
use App\Models\UserModel;
use App\Models\KomentarModel;

class Admin extends BaseController
{
    
    public function __construct()
    {
        $this->session = session();
        $this->keluhanModel = new KeluhanModel();
        $this->db = db_connect();
        $this->userModel = new UserModel();      
        $this->komentarModel = new KomentarModel();
    }
    
    public function index(){
        if(!$this->session->has('isLogin')){
            return redirect()->to('/auth/login');
        }
        
        if($this->session->get('role') != 1){
            return redirect()->to('/user/index');
        }
        $keluhanTable = $this->db->table("keluhan");
        $keluhanTable->select('count(id) as total_bulan')->where('MONTH(tanggal)', date('m'));
        $query = $keluhanTable->get();
        
        $monthCount = $query->getResult();

        $keluhanTable->select('count(id) as total');
        $query = $keluhanTable->get();
        $total = $query->getResult();

        $keluhan = $this->keluhanModel->findAll();
        return view('admin/index', compact(["monthCount", "total", "keluhan"]));     
    }

    public function keluhan(){
        $keluhan = $this->keluhanModel->findAll();

        return view('admin/daftarkeluhan', compact("keluhan"));
    }

    public function detailkeluhan($id){
        $keluhan = $this->keluhanModel->find($id);
        $komentar = $this->komentarModel->where('id_keluhan', $id)->findAll();
        $user = $this->userModel->where("id", $keluhan['id_user'])->first();
        print_r($keluhan);
        return view("admin/detailkeluhan", compact(["keluhan", "user", "komentar"]));
    }

    public function penghuni(){
        $user = $this->userModel->where('role', 2)->findAll();

        return view('admin/penghuni', compact("user"));
    }

    public function penghunidetail($id){
        $user = $this->userModel->where('id', $id)->first();
        return view('admin/profilepenghuni', compact("user"));
    }
    
}