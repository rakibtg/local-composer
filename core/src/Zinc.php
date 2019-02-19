<?php
  namespace ZincPHP\Core;

  require_once __DIR__ . '/App/App.php';

  class Zinc {
    function something() {
      \App::init();
      echo "\n";
      echo 'hello world';
    }
  }