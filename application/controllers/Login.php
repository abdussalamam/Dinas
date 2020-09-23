<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
        $this->load->library('email');
	}

	public function index()
	{
		$data['a'] = rand(1, 10);
		$data['b'] = rand(1, 10);
		$data['c'] = $data['a'] + $data['b'];
 
		$this->load->view('login_v', $data);
	}

	public function prosesLogin()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('captcha', 'Verifikasi', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('alert');
			redirect('login');
		} else {

			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));
			$hasil = $this->input->post('hasil');
			$captcha = $this->input->post('captcha');
			$cek = $this->auth_model->cekusername($username);

			if ($hasil != $captcha) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger">
				Jawaban anda salah, Silahkan coba lagi</div>');
				redirect('login');
			} elseif ($cek->num_rows() == 1) {
				$data = $cek->row_array();
				$level = $data['level'];


				if ($password == $cek->row()->password) {
					if ($level == 'admin') {
						$session['logged_in'] = TRUE;
						$this->session->set_userdata('username', $username);
						$this->session->set_userdata('level', $level);
						$this->session->set_userdata($session);

						redirect('admin');
					} elseif ($level == 'pegawai') {
                        $session['logged_in'] = TRUE;
						$this->session->set_userdata('username', $username);
						$this->session->set_userdata('level', $level);
                        $this->session->set_userdata($session);

						redirect('pegawai_C');
                    } else {
						$session['logged_in'] = FALSE;
						$this->session->set_userdata('username', $username);
						$this->session->set_userdata('level', $level);
						$this->session->set_userdata($session);
						redirect('login');
					}
				} else {
					$this->session->set_flashdata('login', 'Username atau Password Salah');
					redirect('login');
				}
			} else {
				$this->session->set_flashdata('login', 'Username atau Password Salah');
				redirect('login');
			}
		}
    }
    
	private function _sendmail($type)
    {
        $config = [
            'protocol'      => 'smtp',
            'smtp_host'     => 'ssl://smtp.googlemail.com',
            'smtp_user'     => 'puslitpen.LPPM@gmail.com',
            'smtp_pass'     => 'puslitpen123',
            'smtp_port'     => 465,
            'mailtype'      => 'html',
            'charset'       => 'utf-8',
            'newline'       => "\r\n"
        ];

        $this->email->initialize($config);

        $this->email->from('univrabhumas@gmail.com', 'Humas Univrab');
        $this->email->to($this->input->post('email'));

        if ($type == 'forgot') {
            $this->email->subject('Reset Password');
            $this->email->message('Click this link to reset your password : <a href="' . base_url() . 'login/resetPassword?email=' . $this->input->post('email') . '">Reset Password</a>');
        }

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

    public function forgotPassword()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Forgot Password';
            // $this->load->view('template/header', $data);
            $this->load->view('forgot_v');
            $this->load->view('template/footer');
        } else {
            $email = $this->input->post('email');
            $user = $this->db->get_where('user', ['username' => $email])->row_array();

            if ($user) {
                $this->session->set_userdata('reset_email', $email);
                $this->_sendmail('forgot');
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Silahkan cek email anda untuk reset password</div>');
                redirect('login/forgotPassword');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email anda tidak terdaftar</div>');
                redirect('login/forgotPassword');
            }
        }
    }

    public function resetPassword()
    {
        // $email = $this->input->get('email');
        $email = $this->session->userdata('reset_email');
        $user = $this->db->get_where('user', ['username' => $email])->row_array();

        if ($user) {
            // $this->session->set_userdata('reset_email', $email);
            $this->changePassword();
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal reset password, link sudah digunakan</div>');
            redirect('login');
        }
    }

    public function changePassword()
    {
        if (!$this->session->userdata['reset_email']) {
            redirect('login/blocked');
        }

        $data['judul'] = 'Change Password';

        $this->form_validation->set_rules('new_password1', 'New Password', 'trim|required|min_Length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'trim|required|min_Length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
            // $this->load->view('template/header', $data);
            $this->load->view('new_pass_v');
            $this->load->view('template/footer');
        } else {
            $new_password = $this->input->post('new_password1');
            $email = $this->session->userdata('reset_email');
            // password ok/
            $this->auth_model->changeForgotPass($new_password, $email);
            $this->session->unset_userdata('reset_email');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password berhasil diubah, silahkan login</div>');
            redirect('login');
        }
    }


	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}
