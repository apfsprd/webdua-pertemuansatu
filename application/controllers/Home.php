<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{        
        $data['name']="Welcome";
        // echo "tes";
         $this->template->load('theme','home',$data);
    }

    public function form_kegiatan()
	{        
        $data['title']="Form Kegiatan";
        // $data['confirm']='';
        $this->template->load('theme','form/form_kegiatan',$data);
    }

    public function tes()
	{        
        $this->load->view('form/form_kegiatan.php');
    }

    public function save_form_kegiatan(){
        $data['title'] = "Form Kegiatan";
    //     $data['confirm']='<div class="alert btn-success" role="alert">
    //     <a href="#" class="alert-link">Success</a>
    //   </div>';

        $this->load->model('Modkegiatan');
        $judul_kegiatan  = $this->input->post('judul_kegiatan');
        $pembicara       = $this->input->post('pembicara');
        $tgl_pelaksanaan = $this->input->post('tgl_pelaksanaan');
        $alamat          = $this->input->post('alamat');
        $propinsi        = $this->input->post('provinsi');
        $kota            = $this->input->post('kota');

        $data=array(
            'judul_kegiatan'=>$judul_kegiatan,
            'pembicara'=>$pembicara,
            'tanggal_pelaksanaan'=>$tgl_pelaksanaan,
            'provinsi'=>$propinsi,
            'kota'=>$kota
        );

        $this->Modkegiatan->save($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation!</div>');
        redirect('home/form_kegiatan');
    }
    
  
     

	
}

