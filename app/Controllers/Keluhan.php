<?php

namespace App\Controllers;
use App\Models\KeluhanModel;
use App\Models\UserModel;
use App\Models\KomentarModel;

class Keluhan extends BaseController
{
    public function __construct(){
        $this->session = session();

        $this->keluhanModel = new KeluhanModel();
        $this->userModel = new UserModel();      
        $this->komentarModel = new KomentarModel();        
    }
    
    public function index(){
        $id = $this->session->get('id_user');
        $keluhan = $this->keluhanModel->where('id_user', $id)->findAll();
        
        return view('user/keluhansaya', compact("keluhan"));
    }

    public function detail($id){
        $keluhan = $this->keluhanModel->find($id);
        $komentar = $this->komentarModel->where('id_keluhan', $id)->findAll();
        $user = $this->userModel->where("id", $keluhan['id_user'])->first();
        print_r($keluhan);
        return view("user/detailkeluhan", compact(["keluhan", "user", "komentar"]));
    }

    public function daftarkeluhan(){
        $keluhan = $this->keluhanModel->findAll();

        return view('user/daftarkeluhan', compact("keluhan"));
    }    

    public function buat(){
        $id = $this->session->get('id_user');
        return view('user/buatkeluhan', compact("id"));
    }

    public function simpan(){        
        $data = $this->request->getPost();
        $fileName = "";
        //return $this->request->getFile('gambar');
        if($this->request->getFile('gambar') != ""){
            $dataBerkas = $this->request->getFile('gambar');
            $fileName = $dataBerkas->getRandomName();
            $dataBerkas->move('uploads/gambar/', $fileName);
        }
		
        $this->keluhanModel->save([
            'id_user' => $this->session->get("id_user"),
            'judul' => $data["judul"],
            'isi' => $data["isi"],
            'tanggal' => date("Y-m-d"),
            'gambar' => $fileName
        ]);
        session()->setFlashdata('login', 'Anda berhasil membuat keluhan');
        return redirect()->to('/keluhan/index');
    }

    public function selesai($id){
        $keluhan = new KeluhanModel();

        $keluhan->update($id, [
            "status" => 2
        ]);
        return redirect()->to('/admin/index');
    }

    public function proses($id){
        $keluhan = new KeluhanModel();

        $keluhan->update($id, [
            "status" => 1
        ]);
        return redirect()->to('/admin/index');
    }
    
}