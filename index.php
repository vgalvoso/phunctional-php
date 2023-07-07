<?php
  session_start();
  define('BASE_DIR',__DIR__);
  include "vendor/autoload.php";
  require_once "lib/Sql.php";
  require_once "lib/Helper.php";
  require_once "routes/api.php";
  require_once "routes/web.php";
?>