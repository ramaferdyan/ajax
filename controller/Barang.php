<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Siswa extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('BarangModels');
  }
  public function index(){
    $data['siswa'] = $this->BarangModels->view();
    $this->load->view('index', $data);
  }
  
  public function search(){
    // Ambil data NIS yang dikirim via ajax post
    $keyword = $this->input->post('keyword');
    $siswa = $this->BarangModel->search($keyword);
    
    $hasil = $this->load->view('view', array('barang'=>$barang), true);
    
    // Buat sebuah array
    $callback = array(
      'hasil' => $hasil, // Set array hasil dengan isi dari view.php yang diload tadi
    );
    echo json_encode($callback); // konversi varibael $callback menjadi JSON
  }
}
