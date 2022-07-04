<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class BeritaModel extends CI_Model {
	// Fungsi untuk menampilkan semua data gambar
	public function view(){
		return $this->db->get('gambar')->result();
	}
	
	// Fungsi untuk melakukan proses upload file
	public function upload(){
		$config['upload_path'] = './images/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']	= '2048';
		$config['remove_space'] = TRUE;
	
		$this->load->library('upload', $config); // Load konfigurasi uploadnya
		if($this->upload->do_upload('input_gambar')){ // Lakukan upload dan Cek jika proses upload berhasil
			// Jika berhasil :
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		}else{
			// Jika gagal :
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}
	
	// Fungsi untuk menyimpan data ke database
	public function save($upload){
		if($upload['result'] == "success"){
			$data = array(
				'judul'=>$this->input->post('input_judul'),
				'nama_file' => $upload['file']['file_name'],
				'tanggal'=>$this->input->post('input_tanggal'),
				'autor'=>$this->input->post('input_autor'),
				'kategori'=>$this->input->post('input_kategori'),
				'deskripsi'=>$this->input->post('input_deskripsi')
				
			);
		}else{
			$data = array('judul'=>$this->input->post('input_judul'));
		}
		
		$this->db->insert('gambar', $data);
	}
	public function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('gambar'); // Untuk mengeksekusi perintah delete data
	        }
	        public function get_keyword($keyword){
		$this->db->select('*');
		$this->db->from('gambar');
		$this->db->like('judul', $keyword);
		$this->db->or_like('tanggal', $keyword);
	        return $this->db->get()->result();
	        }
}
