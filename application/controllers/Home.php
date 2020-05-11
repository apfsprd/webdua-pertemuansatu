<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{        
        $data['name']="Welcome";
        // echo "tes";
         $this->template->load('theme','home',$data);
    }

    public function form_kegiatan($confirm='')
	{        
        $data['title']="Form Kegiatan";
        $data['confirm']=$confirm;

        $this->load->model('Modkegiatan');
        $data['read_kegiatan']=$this->Modkegiatan->read();  
         $this->template->load('theme','form/form_kegiatan',$data);
    }

    public function tes()
	{        
        $this->load->view('form/form_kegiatan.php');
    }

    public function save_form_kegiatan(){
        $data1['title']="Form Kegiatan";
        $confirm='<div class="alert btn-success" role="alert">
        <a href="#" class="alert-link">Success</a>
      </div>';

       
        $judul_kegiatan      = $this->input->post('judul_kegiatan');
        $pembicara           = $this->input->post('pembicara');
        $tanggal_pelaksanaan = $this->input->post('tanggal_pelaksanaan');
        $alamat              = $this->input->post('alamat');
        $provinsi            = $this->input->post('provinsi');
        $kota                = $this->input->post('kota');
       
        $data=[
            'judul_kegiatan'=>$judul_kegiatan,
            'pembicara'=>$pembicara,
            'tanggal_pelaksanaan'=>$tanggal_pelaksanaan,
            'alamat'=>$alamat,
            'provinsi'=>$provinsi,
            'kota'=> $kota
        ];

        $this->load->model('Modkegiatan');
        $this->Modkegiatan->save($data);
        
        $this->form_kegiatan($confirm);
    }
    
  
     

	
}

