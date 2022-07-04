<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class AdminA_Model extends CI_Model {
  // Fungsi untuk menampilkan semua data adminn
  public function view(){
    return $this->db->get('adminn')->result();
  }
  
  // Fungsi untuk menampilkan data adminn berdasarkan id nya
  public function view_by($id){
    $this->db->where('id', $id);
    return $this->db->get('adminn')->row();
  }
  
  // Fungsi untuk validasi form tambah dan ubah
  public function validation($mode){
    $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
    
    // Tambahkan if apakah $mode save atau update
    // Karena ketika update, id tidak harus divalidasi
    // Jadi id di validasi hanya ketika menambah data adminn saja
    if($mode == "save")
    $this->form_validation->set_rules('input_id', 'id', 'required|numeric|max_length[11]');
    
    $this->form_validation->set_rules('input_username', 'username', 'required|max_length[50]');
    $this->form_validation->set_rules('input_email', 'email', 'required|max_length[50]');
    $this->form_validation->set_rules('input_password', 'password', 'required|MD5|max_length[50]');
    if($this->form_validation->run()) // Jika validasi benar
      return TRUE; // Maka kembalikan hasilnya dengan TRUE
    else // Jika ada data yang tidak sesuai validasi
      return FALSE; // Maka kembalikan hasilnya dengan FALSE
  }
  
  // Fungsi untuk melakukan simpan data ke tabel adminn
  public function save(){
    $data = array(
      "id" => $this->input->post('input_id'),
      "username" => $this->input->post('input_username'),
      "email" => $this->input->post('input_email'),
      "password" => $this->input->post('input_password')

    );
    
    $this->db->insert('adminn', $data); // Untuk mengeksekusi perintah insert data
  }
  
  // Fungsi untuk melakukan ubah data adminn berdasarkan id adminn
  public function edit($id){
    $data = array(
      "username" => $this->input->post('input_username'),
      "email" => $this->input->post('input_email'),
      "password" => $this->input->post('input_password')
     
    );
    
    $this->db->where('id', $id);
    $this->db->update('adminn', $data); // Untuk mengeksekusi perintah update data
  }
  
  // Fungsi untuk melakukan menghapus data adminn berdasarkan id adminn
  public function delete($id){
    $this->db->where('id', $id);
    $this->db->delete('adminn'); // Untuk mengeksekusi perintah delete data
  }
  public function get_keyword($keyword){
    $this->db->select('*');
    $this->db->from('adminn');
    $this->db->like('username', $keyword);
    $this->db->or_like('email', $keyword);
  return $this->db->get()->result();
  }
}