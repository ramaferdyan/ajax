<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class SiswaModel extends CI_Model {
  
  public function view(){
    return $this->db->get('barang')->result();
  }
  
  public function search($keyword){
    $this->db->like('no_barang', $keyword);
    $this->db->or_like('nama', $keyword);
    $this->db->or_like('satuan', $keyword);
    $this->db->or_like('harga', $keyword);
    
    $result = $this->db->get('barang')->result();
    
    return $result; 
  }
}