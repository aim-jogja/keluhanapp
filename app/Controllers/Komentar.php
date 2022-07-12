<?php

namespace App\Controllers;
use App\Models\KeluhanModel;
use App\Models\UserModel;
use App\Models\KomentarModel;

class Komentar extends BaseController
{
    public function __construct()
    {
        $this->session = session();
        $this->keluhanModel = new KeluhanModel();
        $this->userModel = new UserModel();
        $this->komentarModel = new KomentarModel();
    }
    
    public function add($id_user, $id_keluhan){
        $data = $this->request->getPost();

        $this->komentarModel->save([
            "id_user" => $id_user,
            "id_keluhan" => $id_keluhan,
            "isi" => $data['komentar'],
            "tanggal" => date("Y-m-d")
        ]);
        if($this->session->get('role') == 2){
            return redirect()->to('/keluhan/detail/'.$id_keluhan);
        }
        return redirect()->to('/admin/detailkeluhan/'.$id_keluhan);
    }
}