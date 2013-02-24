      <? if (!$visitor->id) { ?>
      <!-- 登录前模块-->
        <div class="span3 shadow" style="padding:10px; margin-bottom:20px;">
        <div id="card-button">
        <a href="#login" role="button" class="btn btn-block btn-red" data-toggle="modal"><img style="float:left; padding:4px 0 0 10px;" src="../images/plus.png" /><span style=" margin-left: -15px;">分享前请登录</span></a></div>
        <div class="hr1" style="margin-top:10px;"></div>
        <div id="welcome" style="margin-top:5px;">
        <p>欢迎来到<?=$sitename?> 动院孩纸们的家，你可以在这里尽享大家分享的精彩内容，留言讨论。</p>
        <p>目前只支持动院的学生发布作品，点击<a href="#reg" data-toggle="modal">这里</a>使用学号登陆！</p>
        </div>
        </div>

        <!-- /登录前模块--> 
			<? } else { ?>
        <!-- 登录后模块-->
        <div class="span3 shadow" style="padding:10px; margin-bottom:20px;">
        <div id="card-button">
        <a href="#share" role="button" class="btn btn-block btn-red" data-toggle="modal"><img style="float:left; padding:4px 0 0 10px;" src="../images/plus.png" /><span style=" margin-left: -15px;">我也要分享</span></a></div>
        <div class="hr1" style="margin-top:10px;"></div>
        <div id="welcome" style="margin-top:5px;">
          <p>
		  <a href="/" role="button" class="btn btn-mini" style=" width:60px;margin:0 10px 5px 15px">全部分类</span></a>
		  <? foreach ($tags as $each_tag) { ?>
                <a href="/tag/?id=<?=$each_tag->id?>" role="button" class="btn btn-mini" style=" width:60px;margin:0 10px 5px 15px"><?=$each_tag->name?></span></a>
				<? } ?>
          </p>
        </div>
        </div>
			 <? } ?>