<?php
include "include/init.php";

$exists_user = new User();
$exists_user->schoolid = $_GET['schoolid'];
if ($exists_user->count()){
	header('LOCATION:/?resid');
} else {
	if ($visitor->id)
	  {header("LOCATION:/?regged");}
	elseif ($_GET['s'] != md5($_GET['schoolid'] . 'check'))
	  {header("LOCATION:/?regwrong");}
	else 
	  {include 'view/base/header.php';$schoolname = urldecode($_GET['schoolname']);}
}
?>
    <div class="container" style="margin:30px auto 20px auto">

      <div class="row">
      <div class="span11 shadow" > 
      <div id="title" style="padding:20px;">
      	<span style="color: #2C2C2C; font-size: 18px; font-weight: bold;">加入我们</span><br />
      	<span style="color: #7F7F7F; font-weight: bold;">欢迎来到<?=$sitename?>！</span>
		<div class="hr2"></div>
	  </div>
      <!-- 编辑区域--> 
	  <div class="span6" style="margin-left:0;padding:0 0 0 20px;"> 
      

      <form class="form-horizontal" id="reg" action="ajax/add_user.php" method="POST">
      <input type="hidden" value="<?=$_GET['s']?>" />
			<div class="control-group">
					<label class="control-label2" for="input01">学号 </label>
					<div class="controls2">
                        <input class="input-xlarge" id="schoolid" name="schoolid" type="text" readonly value="<?=$_GET['schoolid']?>" />
					</div>
				</div>
                <div class="control-group">
					<label class="control-label2" for="input01">姓名 </label>
					<div class="controls2">
                        <input class="input-xlarge" id="schoolname" name="schoolname" type="text" readonly value="<?=$schoolname?>" />
					</div>
				</div>
				<div class="control-group" id="namegroup">
					<label class="control-label2" for="name">昵称 </label>
					<div class="controls2">
						<input type="text" class="input-xlarge" id="name" name="name" placeholder="好名字是好生活的开始~">
                         <span class="help-inline" id="nameInfo"></span>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label2" for="input01">Email </label>
					<div class="controls2">
                        <input class="input-xlarge" id="email" name="email" type="text" placeholder="留一个常用的电子邮件哟" />
					</div>
				</div>
				<div class="control-group" id="pass1group">
					<label class="control-label2" for="pass1">密码 </label>
					<div class="controls2">
						<input class="input-xlarge" type="password" id="pass1" name="pass1" />
                        <span class="help-inline" id="pass1Info"></span>
					</div>
				</div>
				<div class="control-group" id="pass2group">
					<label class="control-label2" for="pass2">重复 </label>
					<div class="controls2">
						<input class="input-xlarge" type="password" id="pass2" name='pass2' />
                        <span class="help-inline" id="pass2Info"></span>
					</div>
				</div>
               
      <div id="title" style=" padding-bottom:20px;">
      	<span style="color: #7F7F7F; font-weight: bold;">选填内容：</span>
		<div class="hr2"></div>
	  </div>
                <div class="control-group">
					<label class="control-label2" for="input01">电子邮件 </label>
					<div class="controls2">
                        <input class="input-xlarge" id="exteremail" name="exteremail" type="text" placeholder="　　　　　　　　　@　　　　　.com" />
					</div>
				</div>
               <div class="control-group">
					<label class="control-label2" for="input01">新浪微博 </label>
					<div class="controls2">
                        <input class="input-xlarge" id="exterweibo" name="exterweibo" type="text" placeholder="http://weibo.com/　<-- 记得填写这个" />
					</div>
				</div>
                <div class="control-group">
					<label class="control-label2" for="input01">网站博客 </label>
					<div class="controls2">
                        <input class="input-xlarge" id="exterblog" name="exterblog" type="text" placeholder="http://　　　　　　　<-- 记得填写这个" />
					</div>
				</div>
                
				<div style="margin:10px 0 0 60px;">
					<input id="send" name="send" type="submit" class="btn btn-red" value="恩，就这样吧！" />
					
				</div>
		</form>
		</div>
		<!-- /编辑区域-->
        <!--右侧预览区 -->
                <div class="span3 shadow" style="height:140px;padding:10px; margin:-5px 0 0 100px">
                <P><strong>特别提示</strong></P>
                将来登陆的时候<br />
                学号将作为用户名<br />
                但密码将独立保存<br />
                不再与教务在线同步
                
        		</div>
                
                <div class="span3 shadow" style="height:165px;padding:10px; margin:165px 0 0 100px">
                <P><strong>特别提示</strong></P>
                如果你填写了其中的信息，将来你就可以选择是否在视频展示界面显示这些信息<br />
                这样对你感兴趣的企业或者个人就能联系到你 你懂得~<br />
                
        		</div>
      
		<!--右侧预览区 -->
      </div>
      
      </div>
    </div> <!-- /上方 -->
    <script src="include/validation/reg.js"></script>
	<?php
include 'view/base/footer.php';
?>
