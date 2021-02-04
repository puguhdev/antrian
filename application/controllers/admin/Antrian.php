<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Antrian extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_antrian','antri');
    }
    

    public function index()
    {
        $this->vars['antrian']  = $this->antri->get_no_antrian();
        $this->vars['title']    = 'Aplikasi Antrian';
        $this->load->view('antrian/ambil_antrian', $this->vars);
    }

    public function poli_gigi()
    {
        if(isset($_POST['submit'])){
            $no_antrian = $this->input->post('no_antrian', TRUE);
            $data = [
                'no_antrian'    => 'G-'.$no_antrian,
                'loket_tujuan'  => 'Poli Gigi',
                'is_finish'     => 0,
                'created_at'    => date('Y-m-d')
            ];
        }
        $this->antri->buat_antrian($data);
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function poli_umum()
    {
        if(isset($_POST['submit'])){
            $no_antrian = $this->input->post('no_antrian', TRUE);
            $data = [
                'no_antrian'    => 'U-'.$no_antrian,
                'loket_tujuan'  => 'Poli Umum',
                'is_finish'     => 0,
                'created_at'    => date('Y-m-d')
            ];
        }
        $this->antri->buat_antrian($data);
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function poli_ibu_anak()
    {
        if(isset($_POST['submit'])){
            $no_antrian = $this->input->post('no_antrian', TRUE);
            $data = [
                'no_antrian'    => 'IA-'.$no_antrian,
                'loket_tujuan'  => 'Poli Ibu dan Anak',
                'is_finish'     => 0,
                'created_at'    => date('Y-m-d')
            ];
        }
        $this->antri->buat_antrian($data);
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function poli_mata()
    {
        if(isset($_POST['submit'])){
            $no_antrian = $this->input->post('no_antrian', TRUE);
            $data = [
                'no_antrian'    => 'M-'.$no_antrian,
                'loket_tujuan'  => 'Poli Mata',
                'is_finish'     => 0,
                'created_at'    => date('Y-m-d')
            ];
        }
        $this->antri->buat_antrian($data);
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function reset()
    {
        $this->antri->reset_antrian();
        redirect($_SERVER['HTTP_REFERER']);
    }

}

/* End of file Antrian.php */
