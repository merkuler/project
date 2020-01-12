<?php
namespace application\models;

use application\core\Model;

class Main extends Model
{


  public function getDescription()
  {
     $result = $this->db->row('SELECT title, description FROM features');
     return $result;
 
  }

  public function getStructure()
  {
     $result = $this->db->row('SELECT title, description FROM structures');
     return $result;
 
  }

  public function getStructure_desc()
  {
     $result = $this->db->row('SELECT desc_struct FROM amount_struct');
     return $result;
 
  }
}
 ?>
