<?php

namespace App\Controllers;
use App\Models\KeluhanModel;
use App\Models\UserModel;

class User extends BaseController
{
    public function __construct()
    {
        $this->session = session();
        $this->keluhanModel = new KeluhanModel();
        $this->userModel = new UserModel();
    }
    
    public function index()
    {
        $keluhan = $this->keluhanModel->findAll();
        $userPhoto = $this->userModel->find($this->session->get("id_user"));
        if(!$this->session->has('isLogin')){
            return redirect()->to('/auth/login');
        }
        
        return view('user/index', compact(["keluhan", "userPhoto"]));
    }

    public function profile(){
        $id = $this->session->get("id_user");
        $user = $this->userModel->find($id);
        return view('user/profile', compact("user"));
    }
}