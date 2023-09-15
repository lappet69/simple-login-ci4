<?php

namespace App\Controllers;

use App\Models\User;

class Auth extends BaseController
{


    public function __construct()
    {
    }

    public function index()
    {
        return view('auth/index');
    }

    public function login()
    {
        $session = session();
        $model = new User();

        $username = $this->request->getVar('username');
        $pwd = $this->request->getVar('password');
        $data = $model->where('username', $username)->first();
        if ($data) {
            $pass = $data['password'];
            $verify_pass = password_verify($pwd, $pass);
            if ($verify_pass) {
                $ses_data = [
                    'id'       => $data['id'],
                    'username'     => $data['username'],
                    'name'    => $data['name'],
                    'address'    => $data['name'],
                ];
                $session->set($ses_data);
                return redirect()->to('/dashboard');
            } else {
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to(base_url('/'));
            }
        } else {
            $session->setFlashdata('msg', 'username not Found');
            return redirect()->to(base_url('/'));
        }
    }

    public function dashboard()
    {
        $session = session();
        $data = $session->get();
        return view('auth/dashboard', $data);
    }
    public function create()
    {

        return view('auth/signup');
    }
    public function save()
    {
        $session = session();
        var_dump($this->request->getVar());
        $rules = [
            'username'          => 'required|min_length[2]|max_length[20]',
            'password'      => 'required|min_length[2]|max_length[100]',
        ];

        if ($this->validate($rules)) {
            $model = new User();
            $data = [
                'username'     => $this->request->getVar('username'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT)
            ];
            $model->save($data);
            $session->setFlashdata('msg', 'berhasil membuat akun');
            return redirect()->to(base_url('/'));
        } else {
            $data['validation'] = $this->validator;

            echo view('auth/signup', $data);
        }
    }

    public function edit()
    {

        return view('auth/edit_acc');
    }
    public function update()
    {
        $session = session();
        $builder = new User();
        $data = [
            'username'  => $this->request->getVar('username'),
            'name'  => $this->request->getVar('name'),
            'address'  => $this->request->getVar('address'),
        ];
        $builder->set($data);
        $builder->where('username', $this->request->getVar('username'));
        $builder->update();
        $session->setFlashdata('msg', 'berhasil update akun');
        $session->set($data);
        return redirect()->to(base_url('/dashboard'));
    }

    public function logout()
    {
        $session = session();
        $session->destroy();

        return redirect()->to('/');
    }
}
