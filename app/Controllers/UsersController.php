<?php

namespace App\Controllers;

use MVC\Controller;

class UsersController extends Controller
{
  public function index()
  {
    $this->render();
  }

  public function create()
  {
    return 'Pagina de cadastro de usuários';
  }
}