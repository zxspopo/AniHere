<?php
include '../include/init.php';
if ($_POST['s'] != md5($_POST['schoolid'] . 'check')) header('LOCATION:../?reg');

$exists_user = new User();
$exists_user->schoolid = $_POST['schoolid'];
if ($exists_user->count()){
	header('LOCATION:/?resid');
} else {
$user = new User();
$user->username = $_POST['name'];
$user->email = $_POST['email'];
$user->password = md5($_POST['pass1']);
$user->group = 99;
$user->createdTime = time();
$user->schoolid = $_POST['schoolid'];
$user->schoolname = $_POST['schoolname'];
$user->first = 1;
$user->exteremail = $_POST['exteremail'];
$user->exterweibo = $_POST['exterweibo'];
$user->exterblog = $_POST['exterblog'];
$user->save();

}