<?php
define("APP_ROOT_DIR", dirname(__DIR__) . "/");

require_once APP_ROOT_DIR . "includes/function.php";
require_once APP_ROOT_DIR . "includes/data.php";

$dataPage = $data['got'];

getHeader();
getPage($dataPage);
getFooter();