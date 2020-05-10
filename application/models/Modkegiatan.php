<?php

class Modkegiatan extends CI_Model
{

       function __construct()
    {
     
    }

    public function save($data){
        $this->db->insert('tbl_kegiatan',$data);
    }

    public function update($id_kegiatan,$data){
        $this->db->where('id_kegiatan',$id_kegiatan);
        $this->db->update('tbl_kegiatan',$data);
    }

    public function getid($id_kegiatan){
        $this->db->from('tbl_kegiatan');
    	$this->db->where('id_kegiatan',$id_kegiatan);
    	$query=$this->db->get();
    	if($query->num_rows()>0){
    		return $query->result();
    	}else{
    		return 0;
    	}
    }
    
    public function delete($id_kegiatan){
        $this->db->where('id_kegiatan',$id_kegiatan);        
        $this->db->delete('tbl_kegiatan');
    }

}