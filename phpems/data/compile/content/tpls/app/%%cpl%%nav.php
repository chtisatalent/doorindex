<!--
<div class="row-fluid topLine">
	<div class="container-fluid">
		<div class="span4"></div>
		<div class="span8">
			<span class="pull-right">
			<?php if($this->tpl_var['_user']['userid']){ ?>
			您好（<?php echo $this->tpl_var['_user']['username']; ?>）&nbsp;&nbsp;<a href="index.php?user-center"><em class="icon-user"></em> 用户中心</a><?php if($this->tpl_var['_user']['teacher_subjects']){ ?>&nbsp;&nbsp;<em class="icon-edit"></em> <a href="index.php?exam-teach">教师管理</a><?php } elseif($this->tpl_var['_user']['groupid'] == 1){ ?>&nbsp;&nbsp;<em class="icon-edit"></em> <a href="index.php?core-master">后台管理</a><?php } ?>&nbsp;&nbsp;<a href="index.php?user-app-logout" class="ajax"><em class="icon-lock"></em> 退出</a>
			<?php } else { ?>
			<a href="javascript:;" onclick="javascript:$.loginbox.show();"><em class="icon-lock"></em> 登录</a>&nbsp;&nbsp;<a href="index.php?user-center"><em class="icon-user"></em> 注册</a>
			<?php } ?>
			&nbsp;&nbsp;&nbsp;&nbsp;
			</span>
		</div>
	</div>
</div>
<div class="row-fluid top">
	<div class="container-fluid">
		<div class="span4"><a name="top"></a><h2><img src="app/user/styles/img/theme/logo.png" /></h2></div>
		<div class="span8">
			<div class="navbar" id="menuNav">
				<div class="">
					<div class="nav-collapse">
						<ul class="nav pull-right">
							<li class="active mainmenu">
								<a href="index.php">主页</a>
							</li>
							<li class="mainmenu">
								<a href="index.php?exam">在线考试</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
-->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="header">
	    <div class="container2">
				  <div class="logo">
						<a href="http://www.cecgw.com.cn/"><img src="app/core/styles/css/img/new/logo.png" class="img-responsive" alt=""></a>
				  </div>
				  <div class="head-nav">
						<span class="menu"> </span>
							<ul class="cl-effect-3">
							    <li class="active"><a href="index.php">首页</a></li>
								<li><a href="index.php?user-app-register">我要参赛</a></li>
								<li><a href=" organization.html">赛事组织</a></li>
                                <li class="dropdown">
                                <a href="##" class="dropdown-toggle" data-toggle="dropdown">赛事规则<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="intro.html">赛事简介</a></li>
                                        <li><a href="schedule.html">赛事日程</a></li>
                                        <li><a href="detailedrules.html">详细规则</a></li>
                                    </ul>
                                </li>				
								<li><a href=" notice.html">赛事公告</a></li>
								<li><a href=" teams.html">我的战队</a></li>
								<li><a href=" rank.php">排行榜</a></li>
									<div class="clearfix"> </div>
							</ul>
							<!-- script-for-nav -->
							<script>
								$( "span.menu" ).click(function() {
								  $( ".head-nav ul" ).slideToggle(300, function() {
									// Animation complete.
								  });
								});
							</script>
						    <!-- script-for-nav --> 
				  </div>
				  <div class="header-right1">
				        <?php if($this->tpl_var['_user']['userid']){ ?>
			            您好（<?php echo $this->tpl_var['_user']['username']; ?>）&nbsp;&nbsp;<a href="index.php?user-center"><em class="icon-user"></em> 用户中心</a><?php if($this->tpl_var['_user']['teacher_subjects']){ ?>&nbsp;&nbsp;<em class="icon-edit"></em> <a href="index.php?exam-teach">教师管理</a><?php } elseif($this->tpl_var['_user']['groupid'] == 1){ ?>&nbsp;&nbsp;<em class="icon-edit"></em> <a href="index.php?core-master">后台管理</a><?php } ?>&nbsp;&nbsp;<a href="index.php?user-app-logout" class="ajax"><em class="icon-lock"></em> 退出</a>
			            <?php } else { ?>
			            <a href="index.php?user-app-login"><em class="icon-lock"></em> 登录</a>&nbsp;&nbsp;<a href="index.php?user-app-register"><em class="icon-user"></em> 注册</a>
			            <?php } ?>
						<!--
						<li><a href="index.php?user-app-login">登录</a></li>
						<li><a href="index.php?user-center">注册</a></li>
						-->
				  </div>
				  <div class="clearfix"> </div>
        </div>
    </div>
</div>