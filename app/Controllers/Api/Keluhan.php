<?php

namespace App\Controllers\Api;
use App\Models\KeluhanModel;
use App\Models\UserModel;
use App\Models\KomentarModel;

use CodeIgniter\RESTful\ResourceController;

class Keluhan extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $k = new KeluhanModel();
        $keluhan = $k->findAll();
        return $this->respond($keluhan);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $k = new KeluhanModel();
        $keluhan = $k->find($id);
        return $this->respond($keluhan);
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $k = new KeluhanModel();
        $keluhan = [
            'id_user' => $this->request->getVar('id_user'),
            'judul' => $this->request->getVar('judul'),
            'isi' => $this->request->getVar('isi'),
            'gambar' => "",
            'tanggal' => $this->request->getVar('tanggal'),
            'status' => 0
        ];
        $k->insert($keluhan);
        $res = [
          'status'   => 201,
          'error'    => null,
          'messages' => 'Keluhan ditambahkan..',
        ];
        return $this->respondCreated($res);
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $k = new KeluhanModel();
        $keluhan = $k->find($id);
        return $this->respond($keluhan);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $k = new KeluhanModel();
        $keluhan = $k->find($id);
        if($keluhan){
            $k->delete($id);
            $res = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                'success' => 'Keluhan Terhapus..'
                ]
            ];
            return $this->respondDeleted($res);
        }else{
            return $this->failNotFound('Tidak ditemukan' . $id);
        }
    }
}
