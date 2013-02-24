<?php
include "include/init.php";$pagename = "user" ;

$user_id = $_GET['id'];
$user = new User($user_id);
include 'view/base/header.php';
$video = new Video();
$video->userid = $user->id;
$video_count = $video->count();

$page_size = 33;
$page = isset($_GET['p']) ? intval($_GET['p']) : 1;
?>
<div style="text-align:center; width:100%; color:#AAA">哟！TA 已经分享了 <?=$video_count?> 部视频作品！</div>

<div class="container">
<div class="row"> <div class="span8 breadcrumb"> <a href="/"><?=$sitename?></a> > <a href="#">用户</a> > <a href="#"><?=$user->username?></a></div></div>

      <div class="row">
      <!--左侧个人名片 -->
        <div class="span3"> 
        	<div class="shadow" style="padding:15px;">
                <div id="card-top" style="margin-bottom:65px">
                    <div id="avatar" class="float-left"><img src="<?=$user->avatar()->link(50)?>" width="50" height="50" /></div>
                    <div id="detailed" class="float-left" style="margin-left:10px">
                        <div id="name"><?=$user->username?></div>
                        <? $days = abs(time() - $user->createdTime)/86400;?>
                        <div id="birday" style="color: #ABABAB; font-size: 12px">已入住<?=floor($days)?>天</div>
                    </div>    
                </div>
        		<div id="card-button">
                <?php if (!$visitor->id){?>
        <a href="#login" role="button" data-toggle="modal" class="btn btn-red btn-block" >登录后可关注 TA</a>
        <?php }?>
                <?php if ($visitor->id){
		if (Action::isLiked($visitor, $user)) {?>
        <a href="/ajax/like.php?id=<?=$user->id?>&cancel=1" role="button" class="btn btn-inverse btn-block" >取消收藏</a>
		<? } else { ?>
        <a href="/ajax/like.php?id=<?=$user->id?>" role="button" class="btn btn-red btn-block" >关注 TA</a>
		<?php }}?>
      		</div>	

        </div></div>
      
      <!--左侧个人名片 -->
              <div class="span9"> 
     	<?
		$video = new Video();
		$video->userid = $user_id;
		$videos = $video->find(array('order' => 'id desc', 'limit' => ($page-1) * $page_size . ', ' . $page_size));
		foreach ($videos as $video) {
			$user = new User($video->userid);
	?>
      <!-- 作品-->
		<?php include HTDOCS_DIR . "/view/base/post.php"; ?>
      <!-- /作品--> 
	<?
		}
	?>

			  </div>
      </div>
        
		<div class="row">
            <div class="pagination pagination-small pagination-centered">
                <?php require_once HTDOCS_DIR . "/include/page.php";;
                    $subPagess=new SubPages($page_size,$video_count,$page,10,"/user.php?id=".$user->id."&p=",2);
                ?>
            </div>
 		</div>
        
    </div> <!-- /上方 -->
<?php
include 'view/base/footer.php';
?>
