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

       // $this->db->row("INSERT INTO users (login,pass,name) VALUES (:log,:pas,:nam)",$params);
        $this->db->queryRegisterExecute("INSERT INTO users (login,pass,name) VALUES ('$log','$pas','$nam')");



    }

    public function getAutorization($vars=[])
    {
        $params = [
            'login'=>$vars['log'],
            'password'=>$vars['pas'],
        ];

           $log=$vars['log'];
           $pas=$vars['pas'];


       // $this->db->row("INSERT INTO users (login,pass,name) VALUES (:log,:pas,:nam)",$params);
        // $this->db->queryRegisterExecute("INSERT INTO users (login,pass,name) VALUES ('$log','$pas','$nam')");
      //$result= $this->db->queryAutorizationExecute("SELECT * FROM users WHERE login='$log' and pass ='$pas'");
         if($result= $this->db->queryAutorizationExecute("SELECT * FROM users WHERE login='$log' and pass ='$pas'"))  {
         echo "есть такой";
         setcookie('result',$result[0]['name'],time() + 3600, "/");
         echo "<br>привет, такой";
         header('Location: /');
         }
         else
         echo "пользователя нет";


    }



}
 ?>
