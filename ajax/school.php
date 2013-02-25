<?php

$username = $_POST['username'];
$password = $_POST['password'];
$link="http://shangkela.sinaapp.com/server/index.php/User/login?ajax=1&school_id=1&username=".$username."&password=".$password ;
$retval = file_get_contents($link);
$json = json_decode($retval);

$status = $json->{'status'};


if ($status == 0) {
	echo "<script>window.location = '" . ($_SERVER['HTTP_REFERER'] ?: '/') . "?serr'</script>";
} else {
	$name = $json->{'data'};
	header('LOCATION:/reg.php?schoolid='.$_POST['username'].'&s='.md5($_POST['username'] . 'check').'&schoolname='.urldecode($name));
};




