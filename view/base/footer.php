
      <div id="footer" style="text-align: center; font-size: 12px; color:#C0C0C0">
        <p>&copy; <a href="http://cucanima.com/" target="_blank">中传动院作品库</a> & <a href="http://animetaste.org/" target="_blank">ANIMETASTE</a> | BOOTSTRAP | <a href="/about" target="_blank">ABOUT US</a> |  <a href="http://e.weibo.com/cucanima" class="sina">新浪微博</a> | <a href="http://www.miibeian.gov.cn" target="_blank">京ICP备12008886号</a><br />
        本站采用<a href="http://creativecommons.org/licenses/by-nc-sa/3.0/cn/" target="_blank" rel="license">知识共享署名-非商业性使用-相同方式共享 3.0 中国大陆许可协议</a>进行许可。</p>
<a href="http://creativecommons.org/licenses/by-nc-sa/3.0/cn/" target="_blank" rel="license"><img alt="知识共享许可协议" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-sa/3.0/cn/80x15.png" /></a>
        <p>&nbsp;</p>
</div>

    </div> <!-- /下方 -->
    <a id="issue" href="/page/issue/">   
  <span>用户<br />反馈</span> 
</a>

    <!-- javascript
    ================================================== -->
    <script src="/media/js/bootstrap.js"></script>
    <script src="/media/js/anihere.js"></script>
    <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=652974" ></script>
	<script type="text/javascript" id="bdshell_js"></script>
	<script type="text/javascript">
	var bds_config = {'wbUid':2784574391,'snsKey':{'tsina':'3342429457'}};
	document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
	</script>
<?php if (!$visitor->id) { ?>
<div id="reg" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" style="color: #FFFFFF" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">注册</h3>
  </div>
    <div class="modal-body">
    <form action="/ajax/school.php" method="POST">
        <div class="modal-body">
            教务在线学号&nbsp;&nbsp;<input type="text" name="username" /> <br />
            教务在线密码&nbsp;&nbsp;<input type="password" name="password" /> <br />
            <input type="submit" value="下一步" class="btn btn-red"/>
        </div>
    </form>
    </div>
</div>
<? } ?>
<div id="login" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" style="color: #FFFFFF" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">登录</h3>
  </div>
    <div class="modal-body">
    <form action="/login.php" method="POST">
        <div class="modal-body">
			学号&nbsp;&nbsp;<input type="text" name="schoolid" /> <br />
			密码&nbsp;&nbsp;<input type="password" name="password" /> <br />
            <input type="submit" value="登录" class="btn btn-red"/>
        </div>
    </form>
    </div>
</div>
<div id="share" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" style="color: #FFFFFF" aria-hidden="true" data-dismiss="modal">×</button>
    <h3 id="ModalLabel">分享动画</h3>
  </div>    <div class="modal-body">
    <form action="/ajax/post.php" id="post" method="POST" >
        <div class="modal-body">
                <div class="control-group" id="urlgroup">
            <input type="text" name="url" id="url" class="input-block-level share-video" placeholder="请输入你想要分享的视频页面地址"/>
            <span class="help-inline" id="urlInfo"></span>
			<div style="font-size: 14px; color: #919191; margin: 10px 0 20px 0;"><strong>支持优酷，土豆，56，新浪博客等视频网站<br /><?=$sitename?>的氛围和你息息相关，希望你能给我们带来更多精彩的分享</strong></div>
        		</div>
 			 <input id="send" type="submit" value="发布" class="btn btn-red"/>

        </div>
    </form>
    <script src="/include/validation/post.js"></script>
</div></div>  


</body>
</html>