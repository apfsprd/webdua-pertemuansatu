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
        $data['confirm']='';
         $this->template->load('theme','form/form_kegiatan.php',$data);
  }
  
}