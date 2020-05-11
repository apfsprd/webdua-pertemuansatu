<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function form_user($confirm='')
	{        
        $data['title']="Form User";
        $data['confirm']=$confirm;
        
        $this->load->model('Moduser');
        $data['read_user'] = $this->Moduser->read();
        $this->template->load('theme','form/form_user',$data);
    }

    public function save_form_user(){
        $data1['title']="Form User";
        $confirm='<div class="alert btn-success" role="alert">
        <a href="#" class="alert-link">Success</a>
      </div>';

       
        $name         = $this->input->post('name');
        $previledge   = $this->input->post('previledge');
        $username     = $this->input->post('username');
        $password     = $this->input->post('password');
        $form_date    = $this->input->post('form_date');
       
        $data=[
            'name'=>$name,
            'previledge'=>$previledge,
            'username'=>$username,
            'password'=>$password,
            'tgl_lahir'=>$form_date
        ];

        $this->load->model('Moduser');
        $this->Moduser->save($data);
        
        $this->form_user($confirm);
    }
}