<?php

namespace application\controllers;

use application\core\Controller;


class AccountController extends Controller
{

  public  function loginAction()
  {

    $this->view->render('Вход');


  }

  public  function registerAction()
  {
    $this->view->render('Регистрация');
  }


  public function checkAction()
  {

  //  $enter = $_POST['login'];
  //  $vars = ['result' =>$enter];
  // $this->view->render('Регистрация',$vars);


  $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
  $name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
  $pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);


  if(mb_strlen($login)<3 || mb_strlen($login) > 90){
    echo "Недопустимая длина логина";
    exit();
  } else if(mb_strlen($name)< 3 || mb_strlen($name)>50){
    echo "Недопустимая длина имени ";
    exit();
  } else if(mb_strlen($pass)< 3 || mb_strlen($pass)>30){
    echo "Недопустимая длина пароля ( от 2 до 30 символов) ";
    exit();}
    else{
      $pass = md5($pass."sadsd23k");
      $vars = ['log' =>$login, 'nam'=>$name,'pas'=>$pass];
      $this->model->getRegistr($vars);
    }

  }
  public function autorizationAction(){
    $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);


    $pass = md5($pass."sadsd23k");
      $vars = ['log' =>$login,'pas'=>$pass];
      $this->model->getAutorization($vars);

  }

  public function exitAction(){
    setcookie('result',$result[0]['name'],time() - 3600, "/");
    header('Location: /');
  }
}


?>
