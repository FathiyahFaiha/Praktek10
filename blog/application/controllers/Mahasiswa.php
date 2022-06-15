<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    // Fungsi : menampilkan seluruh data
	public function index()
	{
		// Load model
        $this->load->model('mahasiswa_model', 'mhs');

        //Simpan Objek ke dalam Array
        $list_mhs = $this->mhs->getAll();

        //Siap data untuk dikirim
        $data["list_mhs"] = $list_mhs;

        //Untuk mengirim data
        $this->load->view('layout/header');
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('layout/footer');
        $this->load->view('layout/sidebar');
    }

    
}
?>