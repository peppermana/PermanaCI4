<?php

namespace App\Controllers;

class Penulis extends BaseController
{
    public function penulis()
    {
        $data['data_penulis'] = $this->penulismodel->get()->getResult();
        return view ('tb_penulis/tabel_penulis', $data);
    }
    public function form_insert()
    {
        return view ('tb_penulis/form_insert');
    }
    public function process_insert()
    {
        $Nama_penulis = $this->request->getPost('nama_penulis');
        $Bio_penulis = $this->request->getPost('bio_penulis');
        $Foto_penulis = $this->request->getFile('foto_penulis');
        
        $path = "./images/";
        $name = $Foto_penulis->getRandomName();
        $moved = $Foto_penulis->move($path, $name);
        if ($moved) {
            $data =[
                'nama_penulis' => $Nama_penulis,
                'bio_penulis' => $Bio_penulis,
                'foto_penulis' => $name,
            ];
        }else{
            echo "foto tidak dapat dimuat";
        }
        $this-> penulismodel -> insert($data);
         return redirect('data-penulis', 'refresh');
    }
    
    public function delete_penulis($id_penulis)
    {
        $this->penulismodel->delete($id_penulis);
        return redirect ('data-penulis', 'refresh');

    }

    public function form_edit($id_penulis)
    {
        $data = ['post' => $this->penulismodel->find($id_penulis)];
        return view ('tb_penulis/form_edit', $data);
    
    }

    public function process_edit($id_penulis)
    {
        $Nama_penulis = $this->request->getPost('nama_penulis');
        $Bio_penulis = $this->request->getPost('bio_penulis');
        $Foto_penulis = $this->request->getFile('foto_penulis');

        $path = './images/';
        $name = $Foto_penulis->getRandomName();
        $moved = $Foto_penulis->move($path, $name);
        if ($moved) {
            $data = [
                'nama_penulis' => $Nama_penulis,
                'bio_penulis' => $Bio_penulis,
                'foto_penulis' => $name
            ];
        }else{
            echo "tidak bisa upload foto";
        }
        $upd = $this-> penulismodel-> update($id_penulis, $data);
        return redirect ('data-penulis', 'refresh');
    }

    // public function form_edit()
    // {
        
    //     return view ('tb_penulis/form_edit');
    // }
    // public function process_edit($id_penulis)
    // {
    //     $Nama_penulis = $this-> request-> getPost('nama_penulis');
    //     $Bio_penulis = $this-> request-> getPost('bio_penulis');
    //     $Foto_penulis = $this-> request-> getFile('foto_penulis');

    //     $data = [
    //         'nama_penulis' => $Nama_penulis,
    //         'bio_penulis' => $Bio_penulis,
    //         'foto_penulis' => $Foto_penulis,
    //     ];

    //    $upd = $this -> penulismodel ->update($id_penulis, $data);
    //     return redirect ('data-penulis', 'refresh');
    // }
    

}