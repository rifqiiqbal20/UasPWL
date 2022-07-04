<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class UsulanA_Model extends CI_Model {
  // Fungsi untuk menampilkan semua data usulan
  public function view(){
    return $this->db->get('usulan')->result();
  }
  
  // Fungsi untuk menampilkan data usulan berdasarkan id nya
  public function view_by($id){
    $this->db->where('id', $id);
    return $this->db->get('usulan')->row();
  }
  
  // Fungsi untuk validasi form tambah dan ubah
  public function validation($mode){
    $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
    
    // Tambahkan if apakah $mode save atau update
    // Karena ketika update, id tidak harus divalidasi
    // Jadi id di validasi hanya ketika menambah data usulan saja
    if($mode == "save")
    $this->form_validation->set_rules('input_id', 'id', 'required|numeric|max_length[11]');
    
    $this->form_validation->set_rules('input_text', 'textt', 'required|max_length[50]');
      
    if($this->form_validation->run()) // Jika validasi benar
      return TRUE; // Maka kembalikan hasilnya dengan TRUE
    else // Jika ada data yang tidak sesuai validasi
      return FALSE; // Maka kembalikan hasilnya dengan FALSE
  }
  
  // Fungsi untuk melakukan simpan data ke tabel usulan
  public function save(){
    $data = array(
      "id" => $this->input->post('input_id'),
      "textt" => $this->input->post('input_textt'),

    );
    
    $this->db->insert('usulan', $data); // Untuk mengeksekusi perintah insert data
  }
  
  // Fungsi untuk melakukan ubah data usulan berdasarkan id usulan
  public function edit($id){
    $data = array(
      "textt" => $this->input->post('input_textt'),
     
    );
    
    $this->db->where('id', $id);
    $this->db->update('usulan', $data); // Untuk mengeksekusi perintah update data
  }
  
  // Fungsi untuk melakukan menghapus data usulan berdasarkan id usulan
  public function delete($id){
    $this->db->where('id', $id);
    $this->db->delete('usulan'); // Untuk mengeksekusi perintah delete data
  }
}