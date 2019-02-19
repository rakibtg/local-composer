<?php

  require_once './vendor/autoload.php';

  (new ZincPHP\Core\Zinc())->something();
  echo "\n";

  (new Cli\Core\ZincCli())->something();
  echo "\n";