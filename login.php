<?
include "include/init.php";
ob_start();
$schoolid = $_POST['schoolid'];
$password = $_POST['password'];
if (Visitor::login($schoolid, $password)) {
	echo "<script>window.location = '" . ($_SERVER['HTTP_REFERER'] ?: '/') . "?welcome'</script>";
} else {
	echo "<script>window.location = '" . ($_SERVER['HTTP_REFERER'] ?: '/') . "?err'</script>";
}