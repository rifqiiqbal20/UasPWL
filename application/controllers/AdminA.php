<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class AdminA extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('AdminA_Model'); // Load AdminA_Model ke controller ini
  }
  
  public function index(){
    $data['adminn'] = $this->AdminA_Model->view();
    $this->load->view('AdminA/index', $data);
  }
  
  public function tambah(){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->AdminA_Model->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->AdminA_Model->save(); // Panggil fungsi save() yang ada di AdminA_Model.php
        redirect('AdminA');
      }
    }
    
    $this->load->view('AdminA/form_tambah');
  }
  
  public function ubah($id){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->AdminA_Model->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->AdminA_Model->edit($id); // Panggil fungsi edit() yang ada di AdminA_Model.php
        redirect('AdminA');
      }
    }
    
    $data['AdminA'] = $this->AdminA_Model->view_by($id);
    $this->load->view('AdminA/form_ubah', $data);
  }
  
  public function hapus($id){
    $this->AdminA_Model->delete($id); // Panggil fungsi delete() yang ada di AdminA_Model.php
    redirect('AdminA');
  }



  public function search(){
    $keyword =$this -> input-> post('keyword');
    $data['adminn']=$this->AdminA_Model->get_keyword($keyword);
    $this->load->view('AdminA/index', $data);
  }
}