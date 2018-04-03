<?php
class FlowerModel extends CI_Model {
 
function getFlowers(){
  $this->db->select('nume,marime,culoare,pret');
  $this->db->from('flori');
  $query = $this->db->get();
  return $query->result();
}
}
