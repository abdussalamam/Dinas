<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Model
{

	function ambil_id($id)
	{
		$where  = array(
			'id' => $id
		);
		$sql = "SELECT * FROM pegawai WHERE id_pegawai = $id";
		return $this->db->query($sql, $where);
	}

	public function getPegawaiRow()
	{
		$this->db->select('*')->from('pegawai');
		$query = $this->db->get();

		return $query->num_rows();
	}

	public function getPegawaiDinHut()
	{

		$this->db->select('*')->from('pegawai')->where('dinas', 'kehutanan');
		$query = $this->db->get();

		return $query->num_rows();
	}

	public function getPegawaiDinKom()
	{

		$this->db->select('*')->from('pegawai')->where('dinas', 'kominfo');
		$query = $this->db->get();

		return $query->num_rows();
	}


	public function search_dinas($key)
	{
		$this->db->select('*');
		$this->db->from('pegawai');
		$this->db->join('pangkat', 'pegawai.pangkat = pangkat.id_pangkat');
		$this->db->join('jabfung', 'pegawai.jabfung = jabfung.id_jabfung');
		$this->db->join('dinas', 'pegawai.dinas = dinas.id_dinas');
		$this->db->like('dinas', $key);
		$query = $this->db->get();

		return $query;
	}

	public function createPegawai()
	{
		$nama = $this->input->post('nama');
		$nip = $this->input->post('nip');
		$pangkat = $this->input->post('pangkat');
		$jabfung = $this->input->post('jabfung');
		$perpres = $this->input->post('perpres');
		$bagian = $this->input->post('bagian');
		$opd = $this->input->post('opd');
		$jenis_adm = $this->input->post('jenis_adm');
		$perjalanan_berkas = $this->input->post('perjalanan_berkas');
		$tgl_sk = date('Y-m-d', strtotime($this->input->post('tgl_sk')));
		$dinas = $this->input->post('dinas');

		$data = [
			'nama' => $nama,
			'nip' => $nip,
			'pangkat' => $pangkat,
			'jabfung' => $jabfung,
			'perpres' => $perpres,
			'bagian' => $bagian,
			'opd' => $opd,
			'jenis_adm' => $jenis_adm,
			'perjalanan_berkas' => $perjalanan_berkas,
			'tgl_sk' => $tgl_sk,
			'dinas' => $dinas,
		];

		$this->db->insert('pegawai', $data);
	}

	public function createJabfung()
	{
		$nama_jabfung = $this->input->post('nama_jabfung');

		$data = [
			'nama_jabfung' => $nama_jabfung,
		];

		$this->db->insert('jabfung', $data);
	}

	public function editPegawai($id)
	{
		$nama = $this->input->post('nama');
		$nip = $this->input->post('nip');
		$pangkat = $this->input->post('pangkat');
		$jabfung = $this->input->post('jabfung');
		$perpres = $this->input->post('perpres');
		$bagian = $this->input->post('bagian');
		$opd = $this->input->post('opd');
		$jenis_adm = $this->input->post('jenis_adm');
		$perjalanan_berkas = $this->input->post('perjalanan_berkas');
		$tgl_sk = date('Y-m-d', strtotime($this->input->post('tgl_sk')));

		$dinas = $this->input->post('dinas');

		$this->db->set('nama', $nama);
		$this->db->set('nip', $nip);
		$this->db->set('pangkat', $pangkat);
		$this->db->set('jabfung', $jabfung);
		$this->db->set('perpres', $perpres);
		$this->db->set('bagian', $bagian);
		$this->db->set('opd', $opd);
		$this->db->set('jenis_adm', $jenis_adm);
		$this->db->set('perjalanan_berkas', $perjalanan_berkas);
		$this->db->set('tgl_sk', $tgl_sk);

		$this->db->set('dinas', $dinas);

		$this->db->where('id_pegawai', $id);

		$this->db->update('pegawai');
	}

	public function editJabfung($id)
	{
		$nama_jabfung = $this->input->post('nama_jabfung');

		$this->db->set('nama_jabfung', $nama_jabfung);

		$this->db->where('id_jabfung', $id);

		$this->db->update('jabfung');
	}

	public function editKebutuhan($id)
	{
		$pangkat = $this->input->post('pangkat');
		$kebutuhan = $this->input->post('kebutuhan');
		$tersedia = $this->input->post('tersedia');
		$keterangan = $this->input->post('keterangan');

		$this->db->set('pangkat', $pangkat);
		$this->db->set('kebutuhan', $kebutuhan);
		// $this->db->set('tersedia', $tersedia);
		$this->db->set('keterangan', $keterangan);

		$this->db->where('id_kominfo', $id);

		$this->db->update('dns_kominfo');
	}



	public function removePegawai($id)
	{
		$this->db->where('id_pegawai', $id);
		$this->db->delete('pegawai');
	}

	public function removeJabfung($id)
	{
		$this->db->where('id_jabfung', $id);
		$this->db->delete('jabfung');
	}

	function gabungan()
	{
		$this->db->select('*');
		$this->db->from('pegawai');
		$this->db->join('pangkat', 'pegawai.pangkat = pangkat.id_pangkat');
		$this->db->join('jabfung', 'pegawai.jabfung = jabfung.id_jabfung');
		$this->db->join('dinas', 'pegawai.dinas = dinas.id_dinas');
		return $this->db->get();
	}

	function show_dinasA()
	{
		$hasil = $this->db->query("SELECT * FROM input WHERE arsip = 'tidak'");
		return $hasil;
	}
	function show_dinasB()
	{
		$hasil = $this->db->query("SELECT * FROM input WHERE arsip = 'ya'");
		return $hasil;
	}

	public function getPegawaiById($id)
	{
		$this->db->select('*');
		$this->db->from('pegawai');
		$this->db->join('pangkat', 'pegawai.pangkat = pangkat.id_pangkat');
		$this->db->join('dinas', 'pegawai.dinas = dinas.id_dinas');
		$this->db->join('jabfung', 'pegawai.jabfung = jabfung.id_jabfung');
		$this->db->where('pegawai.id_pegawai', $id);
		$this->db->order_by('jabfung.nama_jabfung', 'ASC');
		return $this->db->get();
	}

	public function getJabfungById($id)
	{
		$this->db->select('*');
		$this->db->from('jabfung');
		$this->db->where('jabfung.id_jabfung', $id);
		return $this->db->get();
	}

	public function getKebutuhanById($id)
	{
		$this->db->select('*');
		$this->db->from('dns_kominfo');
		$this->db->join('pangkat', 'dns_kominfo.pangkat = pangkat.id_pangkat');
		$this->db->where('dns_kominfo.id_kominfo', $id);
		return $this->db->get();
	}
	//Pangkat Kominfo


	public function perDinas($id)
	{
		return $this->db->query("SELECT * FROM pegawai JOIN pangkat ON 
		pegawai.pangkat = pangkat.id_pangkat JOIN dinas ON pegawai.dinas=dinas.id_dinas JOIN jabfung ON pegawai.jabfung=jabfung.id_jabfung WHERE pegawai.dinas=$id");
		// $this->db->select('*');
		// $this->db->from('pegawai');
		// $this->db->join('pangkat', 'pegawai.pangkat = pangkat.id_pangkat');
		// $this->db->join('jabfung', 'pegawai.jabfung = jabfung.id_jabfung');
		// $this->db->join('dinas', 'pegawai.dinas = dinas.id_dinas');
		// $this->db->where('dinas.id_dinas', $id);
		// return $this->db->get();
	}

	public function view_data($id)
	{
		$this->db->join('dinas', "dinas.id_dinas=pegawai.dinas");
		return $this->db->get_where('pegawai', "pegawai.dinas='$id'");
	}

	public function latestKominfo()
	{
		$this->db->select('*');
		$this->db->from('dns_kominfo');
		$this->db->join('pangkat', 'dns_kominfo.pangkat = pangkat.id_pangkat');
		// $this->db->count('dns_kominfo.pangkat')
		return $this->db->get();
		// {
		// $hasil = $this->db->query("SELECT * FROM dns_kominfo");
		// return $hasil;
		// }
	}

	public function jumlahPangkatById()
	{
		$this->db->select('*');
		$this->db->from('dns_kominfo');
		$this->db->join('pangkat', 'dns_kominfo.pangkat = pangkat.id_pangkat');
		return $this->db->get();
		// $query =  " SELECT `pangkat`.`nama_pangkat`,  `pangkat`.`id_pangkat`, COUNT(`dns_kominfo`.`pangkat`) as tersedia
		//   from `pangkat` 
		//   left join `dns_kominfo` 
		//   on `dns_kominfo`.`pangkat` = `pangkat`.`id_pangkat` GROUP BY `pangkat`.`nama_pangkat`
		//   ORDER BY `pangkat`.`id_pangkat` ASC
		//  ";

		// return $this->db->query($query)->result_array();
	}

	public function latestJabfung()
	{ {
			$this->db->select("*");
			$this->db->from("jabfung");
			$this->db->order_by('nama_jabfung', 'ASC');
			return $this->db->get();
		}
	}
	public function latestSemuaDinas()
	{ {
			$hasil = $this->db->query("SELECT * FROM dinas");
			return $hasil;
		}
	}
}
