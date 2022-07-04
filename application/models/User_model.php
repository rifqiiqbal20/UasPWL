<?php

class User_model extends CI_Model
{
    public function getAllUser()
    {
        return $this->db->get('user')->result_array();
    }
    public function inputData()
    {
        $data = [
            "username" => $this->input->post('username', true), //mengamankan data dengan parameter true, pake XSS filter seperti binding
            "email" => $this->input->post('email', true),
            "password" => $this->input->post('password', true)
        ];
        $this->db->insert('user', $data);
    }
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
        
        $this->form_validation->set_rules('input_text', 'text', 'required|max_length[50]');
          
        if($this->form_validation->run()) // Jika validasi benar
          return TRUE; // Maka kembalikan hasilnya dengan TRUE
        else // Jika ada data yang tidak sesuai validasi
          return FALSE; // Maka kembalikan hasilnya dengan FALSE
      }
      
      // Fungsi untuk melakukan simpan data ke tabel usulan
      public function save(){
        $data = array(
          "id" => $this->input->post('input_id'),
          "text" => $this->input->post('input_text'),
    
        );
        
        $this->db->insert('usulan', $data); // Untuk mengeksekusi perintah insert data
      }
      
}