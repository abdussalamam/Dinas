<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Pegawai_C extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct();
            $this->load->model('pegawai');
        $this->load->library('form_validation');


            if (!$this->session->logged_in) {
                redirect('login');
            }
        }
        public function index()
        {
            $data['title'] = "SIAP - Dashboard";
            $data['user_level'] = $this->session->userdata('level');

            $data['jmlPegawai'] = $this->pegawai->getPegawaiRow();
            // $data['totaldinhut'] = $this->pegawai->getPegawaiDinHut();
            // $data['totaldinkom'] = $this->pegawai->getPegawaiDinKom();
            $data['pngktIa'] = $this->pegawai->getPngktIa();
            $data['pngktIIa'] = $this->pegawai->getPngktIIa();
            $data['pngktIIIa'] = $this->pegawai->getPngktIIIa();
            $data['pngktIVa'] = $this->pegawai->getPngktIVa();

            $data['pngktIb'] = $this->pegawai->getPngktIb();
            $data['pngktIIb'] = $this->pegawai->getPngktIIb();
            $data['pngktIIIb'] = $this->pegawai->getPngktIIIb();
            $data['pngktIVb'] = $this->pegawai->getPngktIVb();
            

            $data['pngktIc'] = $this->pegawai->getPngktIc();
            $data['pngktIIc'] = $this->pegawai->getPngktIIc();
            $data['pngktIIIc'] = $this->pegawai->getPngktIIIc();
            $data['pngktIVc'] = $this->pegawai->getPngktIVc();
                

            $data['pngktId'] = $this->pegawai->getPngktId();
            $data['pngktIId'] = $this->pegawai->getPngktIId();
            $data['pngktIIId'] = $this->pegawai->getPngktIIId();
            $data['pngktIVd'] = $this->pegawai->getPngktIVd();
            
            $data['pngktIVe'] = $this->pegawai->getPngktIVe();

            $this->load->view('template/header', $data);
            $this->load->view('dashboard', $data);
            $this->load->view('template/footer');
        }


        function gabungan()
        {
            $data['title'] = "SIAP - Pegawai Gabungan";

            $x['data'] = $this->pegawai->gabungan();
            $this->load->view('template/header', $data);
            $this->load->view('v_gabungan', $x);
            $this->load->view('template/footer');
        }

        function ekspor_gabungan()
        {
            $x['data'] = $this->pegawai->gabungan();
            $this->load->view('v_cetak_gabungan', $x);
        }

        function ekspor_perdinas($key)
        {
            
            $x['data'] = $this->pegawai->search_dinas($key);
            // echo $key;
            // die;
            $this->load->view('v_cetak_perdinas', $x);
        }

        function dinas()
        {
            $data['title'] = "SIAP - Pegawai Perdinas";
            $x['latest'] = $this->pegawai->latestInsert();

            $x['data'] = $this->pegawai->gabungan();
            $this->load->view('template/header',$data);
            $this->load->view('v_dinas', $x);
            $this->load->view('template/footer');
        }

        public function searchDinas()
        {
            $data['title'] = "SIAP - Pegawai Perdinas";

            $data['key'] = $this->input->get('filter');
           $data['filter'] =  $this->pegawai->search_dinas($data['key']);

           $this->load->view('template/header', $data);
           $this->load->view('v_dinas', $data);
           $this->load->view('template/footer');
        }

        public function lihatP($id)
        {
            $data['title'] = "SIAP - Detail Data Pegawai";
            $data['pegawai'] = $this->pegawai->getPegawaiById($id)->row_array();
    
            $this->load->view('template/header');
           $this->load->view('detailPegawai', $data);
           $this->load->view('template/footer');
        }

}
