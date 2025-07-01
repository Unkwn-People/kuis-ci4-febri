<?php

namespace App\Controllers;

use App\Models\Usermodel;

class Home extends BaseController
{
    public function index()
    {
        $model = new Usermodel();
        $data['users'] = $model->getall();
        return view('user', $data)
    }

    public function tambah()
    {
        if($this->request->getMethod() === 'POST'){
            $userModel = new usermodel;
            $userModel->insert([
                'name' => $this->request->getPost('nama'),
                'email' => $this->request->getVar('email'),
                'created_at' => date('Y-m-d')
            ]);
            return redirect()->to('/');
        }
        echo view('form');
    }
}
