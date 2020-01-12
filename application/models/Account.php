<?php
namespace application\models;

use application\core\Model;

class Account extends Model

{


    public function getRegistr($vars=[])
    {
        $params = [
            'login'=>$vars['log'],
            'password'=>$vars['pas'],
            'name'=>$vars['nam'],
            
        ]; 
        
        $log=$vars['log'];
        $pas=$vars['pas'];
        $nam=$vars['nam'];

        //$this->db->row("INSERT INTO users (login,pass,name) VALUES (:log,:pas,:nam)",$params);
         $this->db->queryExecute("INSERT INTO autorization (login,pass,name) VALUES ($log,$pas,$nam)");

        
   
    }



}
 ?>