<?php

namespace application\controllers;

use application\core\Controller;


class MainController extends Controller
{

public  function indexAction()
{     
  $this->view->layout = 'general_page';

  $result = $this->model->getDescription();

  $result2 = $this->model->getStructure();
 
  $result3 = $this->model->getStructure_desc();

  $vars = ['descript' =>$result, 'descript2'=>$result2,'struction'=>$result3];

  $this->view->render('Хостос',$vars);
}

public function contactAction()
{
  $this->view->render('Страница с контактом');
}


}
?>
