<?php

namespace App\Controllers;
use App\Models\UserModel;

class Auth extends BaseController
{
    public function __construct()
    {
        //membuat user model untuk konek ke database 
        $this->userModel = new UserModel();
        
        //meload validation
        $this->validation = \Config\Services::validation();
        
        //meload session
        $this->session = \Config\Services::session();
        
    }
    
    public function index(){
        echo "hello";
    }

    public function login()
    {
        return view('auth/login');
    }
    
    public function register()
    {
        return view('auth/register');
    }
    
    public function valid_register()
    {
        //tangkap data dari form 
        $data = $this->request->getPost();
        
        //jalankan validasi
        $this->validation->run($data, 'register');
        
        //cek errornya
        $errors = $this->validation->getErrors();
        
        //jika ada error kembalikan ke halaman register
        if($errors){
            session()->setFlashdata('error', $errors);
            return redirect()->to('/auth/register');
        }
        
        //jika tdk ada error 
        
        //buat salt
        //$salt = uniqid('', true);
        
        //hash password digabung dengan salt
        $password = md5($data['password']);//.$salt;
        
        //masukan data ke database
        $this->userModel->save([
            'username' => $data['username'],
            'password' => $password,
            'salt' => "...",
            'role' => 2,
            'nama_lengkap' => $data['namalengkap'],
            'nik' => $data['nik'],
            'no_hp' => $data['no_hp']
            ]);
        
        //arahkan ke halaman login
        session()->setFlashdata('login', 'Anda berhasil mendaftar, silahkan login');
        return redirect()->to('/auth/login');
    }
    
    public function valid_login()
    {
        //ambil data dari form
        $data = $this->request->getPost();
        
        //ambil data user di database yang usernamenya sama 
        $user = $this->userModel->where('username', $data['username'])->first();
        
        if($user){
            if($user['password'] != md5($data['password'])){
                session()->setFlashdata('password', 'Password salah');
                return redirect()->to('/auth/login');
            }
            else{
                $sessLogin = [
                    'isLogin' => true,
                    'username' => $user['username'],
                    'id_user' => $user['id'],
                    'role' => $user['role']
                    ];
                    $this->session->set($sessLogin);
                if($user['role'] == 1){
                    return redirect()->to('/admin/index/');
                }
                return redirect()->to('/user/index/');
            }
        }
        else{
            //jika username tidak ditemukan, balikkan ke halaman login
            session()->setFlashdata('username', 'Username tidak ditemukan');
            return redirect()->to('/auth/login');
        }
    }
    
    public function logout()
    {
        //hancurkan session 
        //balikan ke halaman login
        $this->session->destroy();
        return redirect()->to('/auth/login');
    }
    
}