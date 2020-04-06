<?php


class Crud extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		 $this->load->helper('url');

	}

	function index(){
		$data['pasien'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_tampil',$data);
	}

	function tambah(){
		$this->load->view('v_input');
	}

	function tambah_aksi(){
		$id_pasien = $this->input->post('id_pasien');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$noHP = $this->input->post('noHP');
		$tglmasuk = $this->input->post('tglmasuk');
		$penyakit = $this->input->post('penyakit');
		$dokter = $this->input->post('dokter');
		$obat = $this->input->post('obat');


		$data = array(
			'id_pasien' => $id_pasien,
			'nama' => $nama,
			'alamat' => $alamat,
			'noHp' => $noHP,
			'tglmasuk' => $tglmasuk,
			'penyakit' => $penyakit,
			'dokter' => $dokter,
			'obat' => $obat
			);
		$this->m_data->input_data($data,'pasien');
		redirect('crud/index');
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'pasien');
		redirect('crud/index');
	}

	function edit($id){
		$where = array('id' => $id);
		$data['pasien'] = $this->m_data->edit_data($where,'pasien')->result();
		$this->load->view('v_edit',$data);
	}

	function update(){
		$id = $this->input->post('id');
		$id_pasien = $this->input->post('id_pasien');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$noHP = $this->input->post('noHP');
		$tglmasuk = $this->input->post('tglmasuk');
		$penyakit = $this->input->post('penyakit');
		$dokter = $this->input->post('dokter');
		$obat = $this->input->post('obat');


		$data = array(
			'id_pasien' => $id_pasien,
			'nama' => $nama,
			'alamat' => $alamat,
			'noHP' => $noHP,
			'tglmasuk' => $tglmasuk,
			'penyakit' => $penyakit,
			'dokter' => $dokter,
			'obat' => $obat
		);

		$where = array(
			'id' => $id
		);

		$this->m_data->update_data($where,$data,'pasien');
		redirect('crud/index');
	}

	public function search(){
		$data['pasien']=$this->m_data->search();
		$this->load->view('v_tampil',$data);
	}
}