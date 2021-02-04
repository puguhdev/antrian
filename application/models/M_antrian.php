<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_antrian extends CI_Model {

    private $_table = 'tbl_antrian';

    public function get_no_antrian()
    {
        $this->db->select('RIGHT(tbl_antrian.id_antrian,4) as kode', FALSE);
        $this->db->order_by('id_antrian','DESC');    
        $this->db->limit(1);    
        $query = $this->db->get('tbl_antrian');    
        if($query->num_rows() <> 0){          
            $data = $query->row();      
            $kode = intval($data->kode) + 1;    
        }else {            
            $kode = 1;    
        }
        $kodemax    = str_pad($kode, 1, "0", STR_PAD_LEFT);
        $kodejadi   = $kodemax;
        return $kodejadi;  
    }

    /**
     * Ambil Nomor Antrian
     */
    public function buat_antrian($data){
        return $this->db->insert($this->_table, $data);
    }

    /**
     * Reset Antrian
     */
    public function reset_antrian(){
        $query =  $this->db->empty_table($this->_table);
        $query =  $this->db->truncate($this->_table);
        return $query;
    }

}

/* End of file M_antrian.php */
