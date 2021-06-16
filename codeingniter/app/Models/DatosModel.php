<?php
namespace App\Models;
use codeigniter\Model;
class DatosModel extends Model{
    public  function obtenerinformacion($data){
      $gModel = $this->db->table('persona');
      $gModel->where($data);
      return $gModel->get()->getResultArray();
      
      
    }
  
  public function insertar ($data){
    $gModel = $this 
