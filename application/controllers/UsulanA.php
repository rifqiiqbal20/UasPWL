<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class UsulanA extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('UsulanA_Model'); // Load UsulanA_Model ke controller ini
  }
  
  public function index(){
    $data['usulan'] = $this->UsulanA_Model->view();
    $this->load->view('UsulanA/index', $data);
  }
  
  public function tambah(){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->UsulanA_Model->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->UsulanA_Model->save(); // Panggil fungsi save() yang ada di UsulanA_Model.php
        redirect('UsulanA');
      }
    }
    
    $this->load->view('UsulanA/form_tambah');
  }
  
  public function ubah($id){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->UsulanA_Model->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->UsulanA_Model->edit($id); // Panggil fungsi edit() yang ada di UsulanA_Model.php
        redirect('UsulanA');
      }
    }
    
    $data['UsulanA'] = $this->UsulanA_Model->view_by($id);
    $this->load->view('UsulanA/form_ubah', $data);
  }
  
  public function hapus($id){
    $this->UsulanA_Model->delete($id); // Panggil fungsi delete() yang ada di UsulanA_Model.php
    redirect('UsulanA');
  }
}