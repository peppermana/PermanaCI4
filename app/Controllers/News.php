<?php 

namespace App\Controllers;

class News extends BaseController{

    public function data_news(){
        $data['news_data'] =$this->newsmodel->get()->getResult();
        return view ('news_table', $data);
    }

    public function data_edit($id){
        $data = ['post' => $this->newsmodel->find($id)];
        return view ('form_edit_news', $data);
    }

    public function insert_news(){
        return view ('form_insert_news');
    }
    //insert data process
    public function proses_insert(){
        $Judul = $this-> request-> getPost('judul');
        $Gambar = $this-> request-> getFile('gambar');
        $Isi = $this-> request-> getPost('isi');
        $Tanggal = $this-> request-> getPost('tanggal');
        $Penulis = $this-> request-> getPost('penulis');

        $path = "./images/";
        $name = $Gambar->getRandomName();
        $moved = $Gambar->move($path, $name);
        if($moved){
            $data = [
                'judul' => $Judul,
                'gambar' => $name,
                'isi' => $Isi,
                'tanggal' => $Tanggal,
                'penulis' => $Penulis,
            ];
        }else{
            echo "tidak berhasil menginput file";
        }

            $this -> newsmodel -> insert($data);
            return redirect ('news', 'refresh');
        
    }

    public function login_news()
    {
        return view ('form_login');
    }
    public function login_process()
    {
        echo $this-> request-> getPost('nama');
        echo $this-> request-> getPost('password');
    }
    public function delete_news($id)
    {
        $this->newsmodel->delete($id);
        return redirect('news','refresh');
    }
    public function proses_edit($id)
    {
        $Judul = $this-> request-> getPost('judul');
        $Gambar = $this-> request-> getFile('gambar');
        $Isi = $this-> request-> getPost('isi');
        $Tanggal = $this-> request-> getPost('tanggal');
        $Penulis = $this-> request-> getPost('penulis');

        $path = './images/';
        $name = $Gambar->getRandomName();
        $moved = $Gambar->move($path, $name);
        if ($moved) {
            $data = [
                'judul' => $Judul,
                'gambar' => $name,
                'isi' => $Isi,
                'tanggal' => $Tanggal,
                'penulis' => $Penulis,
            ];
        }
            
        $upd = $this->newsmodel->update($id, $data);
        return redirect('news', 'refresh');
    }
}


?>