 <?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Admin extends CI_Controller
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


            $data['jmlPegawai'] = $this->pegawai->getPegawaiRow();
            // $data['totaldinhut'] = $this->pegawai->getPegawaiDinHut();
            // $data['totaldinkom'] = $this->pegawai->getPegawaiDinKom();



            $this->load->view('template/header', $data);
            $this->load->view('dashboard', $data);
            $this->load->view('template/footer');
        }

        public function tambahPegawai()
        {

            $data['pangkat'] = $this->db->get('pangkat')->result_array();
            $data['dinas'] = $this->db->get('dinas')->result_array();
            $data['jabfung'] = $this->db->get('jabfung')->result_array();

            $this->form_validation->set_rules('nama', 'Nama', 'trim');
            $this->form_validation->set_rules('nip', 'NIP', 'numeric|trim');
            $this->form_validation->set_rules('dinas', 'Dinas', 'trim|required');
            $this->form_validation->set_rules('pangkat', 'Pangkat', 'trim');
            $this->form_validation->set_rules('jabfung', 'jabfung', 'trim|required');

            if ($this->form_validation->run() == false) {
                $data['title'] = "SIAP - Tambah Pegawai";

                $this->load->view('template/header', $data);
                $this->load->view('add_pegawai', $data);
                $this->load->view('template/footer');
            } else {
                $this->pegawai->createPegawai();
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Tambah Pegawai</div>');
                redirect('admin/gabungan');
            }
        }

        public function tambahJabfung()
        {
            $this->form_validation->set_rules('nama_jabfung', 'Nama', 'trim|required');

            if ($this->form_validation->run() == false) {
                $data['title'] = "SIAP - Tambah Jabatan Fungsional";

                $this->load->view('template/header', $data);
                $this->load->view('add_jabfung', $data);
                $this->load->view('template/footer');
            } else {
                $this->pegawai->createJabfung();
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Tambah Jabatan Fungsional</div>');
                redirect('admin/jabfung');
            }
        }


        function gabungan()
        {
            $x['title'] = 'SIAP - Pegawai Gabungan';

            $x['pangkat'] = $this->db->get('pangkat')->result_array();
            $x['dinas'] = $this->db->get('dinas')->result_array();
            $x['jabfung'] = $this->db->get('jabfung')->result_array();

            $x['data'] = $this->pegawai->gabungan();
            // $data['perangkat'] = $this->perangkat->getPerangkat();

            $this->load->view('template/header', $x);
            $this->load->view('v_gabungan', $x);
            $this->load->view('template/footer');
        }

        function ekspor_gabungan()
        {
            $x['data'] = $this->pegawai->gabungan();
            $this->load->view('v_cetak_gabungan', $x);
        }

        function ekspor_kebutuhan_kominfo()
        {
            $x['data'] = $this->pegawai->latestKominfo();
            $x['pngktKominfoIa'] = $this->pegawai->getPngktKominfoIa();
            $x['pngktKominfoIIa'] = $this->pegawai->getPngktKominfoIIa();
            $x['pngktKominfoIIIa'] = $this->pegawai->getPngktKominfoIIIa();
            $x['pngktKominfoIVa'] = $this->pegawai->getPngktKominfoIVa();

            $x['pngktKominfoIb'] = $this->pegawai->getPngktKominfoIb();
            $x['pngktKominfoIIb'] = $this->pegawai->getPngktKominfoIIb();
            $x['pngktKominfoIIIb'] = $this->pegawai->getPngktKominfoIIIb();
            $x['pngktKominfoIVb'] = $this->pegawai->getPngktKominfoIVb();

            $x['pngktKominfoIc'] = $this->pegawai->getPngktKominfoIc();
            $x['pngktKominfoIIc'] = $this->pegawai->getPngktKominfoIIc();
            $x['pngktKominfoIIIc'] = $this->pegawai->getPngktKominfoIIIc();
            $x['pngktKominfoIVc'] = $this->pegawai->getPngktKominfoIVc();

            $x['pngktKominfoId'] = $this->pegawai->getPngktKominfoId();
            $x['pngktKominfoIId'] = $this->pegawai->getPngktKominfoIId();
            $x['pngktKominfoIIId'] = $this->pegawai->getPngktKominfoIIId();
            $x['pngktKominfoIVd'] = $this->pegawai->getPngktKominfoIVd();

            $x['pngktKominfoIVe'] = $this->pegawai->getPngktKominfoIVe();
            $this->load->view('v_cetak_dns_kominfo', $x);
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
            $data['title'] = 'SIAP - Pegawai Perdinas';
            // $data['pangkat'] = $this->db->get('pangkat')->result_array();
            $data['dinas'] = $this->db->get('dinas')->result_array();
            // $data['jabfung'] = $this->db->get('jabfung')->result_array();


            $this->load->view('template/header', $data);
            $this->load->view('v_dinas', $data);
            $this->load->view('template/footer');
            // if ([isset($_POST['cari'])]) {
            //     $data['data'] = $this->pegawai->perDinas($this->input->post('id_dinas'));

            //     // var_dump($this->input->post('id_dinas'));
            //     // echo json_encode($cari);
            // } else {
            // }
        }

        public function loadData($id)
        {
            // $id = $this->input->post('id_dinas');
            $data = $this->pegawai->perDinas($id)->result();
            // echo var_dump($data);
            echo json_encode($data);
            // echo var_dump($id);
        }

        function kebutuhan()
        {
            $x['title'] = 'SIAP - Kebutuhan Pegawai Perdinas';

            $x['data'] = $this->pegawai->latestKominfo();
            // $x['pangkat'] = $this->pegawai->jumlahPangkatById();
            // $x['pngktKominfoIa'] = $this->pegawai->getPngktKominfoIa();
            // $x['pngktKominfoIIa'] = $this->pegawai->getPngktKominfoIIa();
            // $x['pngktKominfoIIIa'] = $this->pegawai->getPngktKominfoIIIa();
            // $x['pngktKominfoIVa'] = $this->pegawai->getPngktKominfoIVa();

            // $x['pngktKominfoIb'] = $this->pegawai->getPngktKominfoIb();
            // $x['pngktKominfoIIb'] = $this->pegawai->getPngktKominfoIIb();
            // $x['pngktKominfoIIIb'] = $this->pegawai->getPngktKominfoIIIb();
            // $x['pngktKominfoIVb'] = $this->pegawai->getPngktKominfoIVb();

            // $x['pngktKominfoIc'] = $this->pegawai->getPngktKominfoIc();
            // $x['pngktKominfoIIc'] = $this->pegawai->getPngktKominfoIIc();
            // $x['pngktKominfoIIIc'] = $this->pegawai->getPngktKominfoIIIc();
            // $x['pngktKominfoIVc'] = $this->pegawai->getPngktKominfoIVc();

            // $x['pngktKominfoId'] = $this->pegawai->getPngktKominfoId();
            // $x['pngktKominfoIId'] = $this->pegawai->getPngktKominfoIId();
            // $x['pngktKominfoIIId'] = $this->pegawai->getPngktKominfoIIId();
            // $x['pngktKominfoIVd'] = $this->pegawai->getPngktKominfoIVd();

            // $x['pngktKominfoIVe'] = $this->pegawai->getPngktKominfoIVe();

            $this->load->view('template/header', $x);
            $this->load->view('v_kebutuhan', $x);
            $this->load->view('template/footer');
        }

        function jabfung()
        {
            $x['title'] = 'SIAP - Data Jabatan Fungsional';

            $x['data'] = $this->pegawai->latestJabfung();

            $this->load->view('template/header', $x);
            $this->load->view('v_jabfung', $x);
            $this->load->view('template/footer');
        }

        function semuaDinas()
        {
            $x['title'] = 'SIAP - Data Dinas Provinsi Riau';

            $x['data'] = $this->pegawai->latestSemuaDinas();

            $this->load->view('template/header', $x);
            $this->load->view('v_semuadinas', $x);
            $this->load->view('template/footer');
        }

        public function searchDinas()
        {
            $x['title'] = 'SIAP - Pegawai Perdinas';

            $data['pangkat'] = $this->db->get('pangkat')->result_array();
            $data['dinas'] = $this->db->get('dinas')->result_array();
            $data['jabfung'] = $this->db->get('jabfung')->result_array();

            //    $data['key'] = $this->input->get('filter');
            //    $data['filter'] =  $this->pegawai->search_dinas();
            $x['data'] = $this->pegawai->gabungan();

            $this->load->view('template/header', $x);
            $this->load->view('v_dinas', $x);
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

        public function editP($id)
        {
            $data['pangkat'] = $this->db->get('pangkat')->result_array();
            $data['dinas'] = $this->db->get('dinas')->result_array();

            $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
            $this->form_validation->set_rules('nip', 'NIP', 'trim|required');

            if ($this->form_validation->run() == false) {
                $data['title'] = "SIAP - Edit Data Pegawai";
                $data['pegawai'] = $this->pegawai->getPegawaiById($id)->row_array();

                $this->load->view('template/header', $data);
                $this->load->view('editPegawai', $data);
                $this->load->view('template/footer');
            } else {
                $this->pegawai->editPegawai($id);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Edit Pegawai</div>');
                redirect('admin/lihatP/' . $id);
            }
        }

        public function editPg($id)
        {
            $data['pangkat'] = $this->db->get('pangkat')->result_array();
            $data['dinas'] = $this->db->get('dinas')->result_array();
            $data['jabfung'] = $this->db->get('jabfung')->result_array();

            $this->form_validation->set_rules('nama', 'Nama', 'trim');
            $this->form_validation->set_rules('nip', 'NIP', 'trim');

            if ($this->form_validation->run() == false) {
                $data['title'] = "SIAP - Edit Data Pegawai";
                $data['pegawai'] = $this->pegawai->getPegawaiById($id)->row_array();

                $this->load->view('template/header', $data);
                $this->load->view('editPegawaiG', $data);
                $this->load->view('template/footer');
            } else {
                $this->pegawai->editPegawai($id);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Edit Pegawai</div>');
                redirect('admin/gabungan');
            }
        }

        public function editJabfung($id)
        {

            $data['jabfung'] = $this->db->get('jabfung')->result_array();

            $this->form_validation->set_rules('nama_jabfung', 'Nama Jabatan Fungsional', 'trim|required');

            if ($this->form_validation->run() == false) {
                $data['title'] = "SIAP - Edit Data Jabatan Fungsional";
                $data['jabfung'] = $this->pegawai->getJabfungById($id)->row_array();

                $this->load->view('template/header', $data);
                $this->load->view('editJabfung', $data);
                $this->load->view('template/footer');
            } else {
                $this->pegawai->editJabfung($id);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Edit Jabatan Fungsional</div>');
                redirect('admin/jabfung');
            }
        }
        public function editKpgw($id)
        {

            $data['pangkat'] = $this->db->get('pangkat')->result_array();
            // $data['dns_kominfo'] = $this->pegawai->jumlahPangkatById();

            $this->form_validation->set_rules('pangkat', 'Pangkat', 'trim|required');

            if ($this->form_validation->run() == false) {
                $data['title'] = "SIAP - Edit Data Kebutuhan Pegawai";
                $data['dns_kominfo'] = $this->pegawai->getKebutuhanById($id)->row_array();

                $this->load->view('template/header', $data);
                $this->load->view('editKebutuhan', $data);
                $this->load->view('template/footer');
            } else {
                $this->pegawai->editKebutuhan($id);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Edit Kebutuhan Pegawai</div>');
                redirect('admin/kebutuhan');
            }
        }
        public function removePegawaiG($id)
        {
            $this->pegawai->removePegawai($id);
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Pegawai Berhasil Dihapus</div>');
            redirect('admin/gabungan');
        }

        public function removePegawai($id)
        {
            $this->pegawai->removePegawai($id);
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Pegawai Berhasil Dihapus</div>');
            redirect('admin/dinas');
        }

        public function removeJabfung($id)
        {
            $this->pegawai->removeJabfung($id);
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Jabfung Berhasil Dihapus</div>');
            redirect('admin/jabfung');
        }

        function v_import()
        {
            $this->load->view('v_import');
        }

        public function upload()
        {
            // Load plugin PHPExcel nya
            include APPPATH . 'third_party/PHPExcel/PHPExcel.php';

            $config['upload_path'] = realpath('excel');
            $config['allowed_types'] = 'xlsx|xls|csv';
            $config['max_size'] = '10000';
            $config['encrypt_name'] = true;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload()) {

                //upload gagal
                $this->session->set_flashdata('notif', '<div class="alert alert-danger"><b>PROSES IMPORT GAGAL!</b> ' . $this->upload->display_errors() . '</div>');

                //redirect halaman
                redirect('admin/v_import');
            } else {

                $data_upload = $this->upload->data();

                $excelreader     = new PHPExcel_Reader_Excel2007();
                $loadexcel         = $excelreader->load('excel/' . $data_upload['file_name']); // Load file yang telah diupload ke folder excel
                $sheet             = $loadexcel->getActiveSheet()->toArray(null, true, true, true);


                $data = array();
                $numrow = 1;
                foreach ($sheet as $row) {

                    if ($numrow > 1) {
                        array_push($data, array(
                            'nama_dinas'          => $row['A'],

                        ));
                    }
                    $numrow++;
                }
                // var_dump($data);
                // die;
                $this->db->insert_batch('dinas', $data);
                //delete file from server
                unlink(realpath('excel/' . $data_upload['file_name']));

                //upload success
                $this->session->set_flashdata('notif', '<div class="alert alert-success mt-5"><b>PROSES IMPORT BERHASIL!</b> Data berhasil diimport!</div>');
                //redirect halaman

                redirect('admin/semuaDinas');
            }
        }
    }
