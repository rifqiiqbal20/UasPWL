<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Usulan extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('Usulan_Model'); // Load Usulan_Model ke controller ini
  }
  
  public function index(){
    $data['usulan'] = $this->Usulan_Model->view();
    $this->load->view('Usulan/index', $data);
  }
  
  public function tambah(){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->Usulan_Model->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->Usulan_Model->save(); // Panggil fungsi save() yang ada di Usulan_Model.php
        redirect('user');
      }
    }
    
    $this->load->view('Usulan/form_tambah');
  }
  
  public function ubah($id){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->Usulan_Model->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->Usulan_Model->edit($id); // Panggil fungsi edit() yang ada di Usulan_Model.php
        redirect('Usulan');
      }
    }
    
    $data['Usulan'] = $this->Usulan_Model->view_by($id);
    $this->load->view('Usulan/form_ubah', $data);
  }
  
  public function hapus($id){
    $this->Usulan_Model->delete($id); // Panggil fungsi delete() yang ada di Usulan_Model.php
    redirect('Usulan');
  }
}