<?php
include '../include/init.php';
$video = new Video($_POST['id']);

if ($video->pre_tag) {
	$old_tag = new Tag($video->pre_tag);
	if ($old_tag->count > 0)  $old_tag->count --;
	$old_tag->save();
}

$new_tag = new Tag($_POST['pre_tag']);
$new_tag->count ++;
$new_tag->save();

$video->title = $_POST['title'];
$video->pre_tag = $_POST['pre_tag'];
$video->tags = $_POST['tags'];
$video->description = $_POST['description'];

if($_POST['extre'] == 1){
$video->extre = 1;
} else {
$video->extre = 0;}

$video->save();
header('LOCATION:../detail.php?id=' . $video->id);
?>
