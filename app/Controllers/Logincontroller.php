<?php

namespace App\Controllers;

class Logincontroller extends BaseController
{
    public function login()
    {
        return view('tb_admin/form_admin');
    }
    public function process_login()
    {

        $usr = $this->request->getPost('username');
        $psd = $this->request->getPost('password');

        $execute = [
            'username' => $usr,
            'password' => md5($psd)
        ];
        $data = $this->loginmodel->where($execute)->get()->getRowArray();

        $this->sess->set($data);
        return redirect('news', 'refresh');
        // var_dump($this->session->set($data));
        // print_r($this->sess->get());
        // echo($data);

    }
    public function logout()
    {
        $this->sess->destroy();
        return redirect('login', 'refresh');
    }
}
