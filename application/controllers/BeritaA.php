<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class BeritaA extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		
		$this->load->model('BeritaModel');
	}
	
	public function index(){
		$data['gambar'] = $this->BeritaModel->view();
		$this->load->view('beritaA/view', $data);
	}
	
	public function tambah(){
		$data = array();
		
		if($this->input->post('submit')){ // Jika user menekan tombol Submit (Simpan) pada form
			// lakukan upload file dengan memanggil function upload yang ada di BeritaModel.php
			$upload = $this->BeritaModel->upload();
			
			if($upload['result'] == "success"){ // Jika proses upload sukses
				// Panggil function save yang ada di BeritaModel.php untuk menyimpan data ke database
				$this->BeritaModel->save($upload);
				
				redirect('beritaA'); // Redirect kembali ke halaman awal / halaman view data
			}else{ // Jika proses upload gagal
				$data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
			}
		}
		
		$this->load->view('beritaA/form', $data);
	}
          public function hapus($id){
                    $this->BeritaModel->delete($id); // Panggil fungsi delete() yang ada di userA_Model.php
                    redirect('beritaA');
                  }
	        public function search(){
		$keyword =$this -> input-> post('keyword');
		$data['gambar']=$this->BeritaModel->get_keyword($keyword);
		$this->load->view('beritaA/view', $data);
	        }
          }
