<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class UserA extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('userA_Model'); // Load userA_Model ke controller ini
  }
  
  public function index(){
    $data['user'] = $this->userA_Model->view();
    $this->load->view('userA/index', $data);
  }
  
  public function tambah(){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->userA_Model->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->userA_Model->save(); // Panggil fungsi save() yang ada di userA_Model.php
        redirect('userA');
      }
    }
    
    $this->load->view('userA/form_tambah');
  }
  
  public function ubah($id){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->userA_Model->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->userA_Model->edit($id); // Panggil fungsi edit() yang ada di userA_Model.php
        redirect('userA');
      }
    }
    
    $data['userA'] = $this->userA_Model->view_by($id);
    $this->load->view('userA/form_ubah', $data);
  }
  
  public function hapus($id){
    $this->userA_Model->delete($id); // Panggil fungsi delete() yang ada di userA_Model.php
    redirect('userA');
  }
  public function search(){
    $keyword =$this -> input-> post('keyword');
    $data['user']=$this->userA_Model->get_keyword($keyword);
    $this->load->view('userA/index', $data);
  }
}