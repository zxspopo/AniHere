<?php

$pagename = "index" ;
$sitename = "AniHere!" ;
$sitedesc = "AniHere! 中传动院日常作品库" ;
session_start();
function __autoload($class) {
	$class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
	require_once __DIR__ . '/../lib/' . $class . '.php';
}
$visitor = Visitor::user();
define('HTDOCS_DIR', __DIR__ . '/..');
define('BASE_PATH',$_SERVER['DOCUMENT_ROOT']);