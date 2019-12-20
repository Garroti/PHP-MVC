<?php

namespace MVC;

class Controller 
{
  protected function render(array $data = [], string $view = null)
  {
    extract($data);
    require __DIR__ . '/../templates/' . $view . '.tpl.php';
  }
}