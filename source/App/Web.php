<?php


namespace Source\App;

use Source\Models\Library;
use Source\Models\Users;
use Source\Core\Controller;

class Web extends Controller
{
    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../" . CONF_VIEW_THEME . "/");
    }

  public  function home(): void
  {
      echo $this->view->render("home", [
          "title"=>"Calculo de Idade",
          "library"=>(new Library())->all(),
          "users"=>(new Users())->all()
      ]);
  }

  public function post(array $data):void
  {
      $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);
      $postBook = $data['book'];
      $postUser = $data['user'];
      echo $this->view->render("post", [
          "title"=>$data['book'],

          "book"=>(new Library())->find($postBook),
          "user"=>(new Users())->find($postUser)
      ]);
  }
}