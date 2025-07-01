<?php

namespace App\Controllers;

use App\Models\Usermodel;

class Home extends BaseController
{
    public function index()
    {
        $model = new Usermodel();
        // $data['users'] = $model->getall();
        $data['users'] = $model->findAll(); //perubahan function findAll
        // return view('user', $data)
        return view('user', $data); //pembetulan        
    }

    public function tambah()
    {
        if($this->request->getMethod() === 'POST'){
            // $userModel = new usermodel; 
            $userModel = new Usermodel; //Pembetulan 
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
