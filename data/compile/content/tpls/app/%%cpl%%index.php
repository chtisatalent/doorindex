<?php $this->_compileInclude('header'); ?>
<body>
<?php $this->_compileInclude('nav'); ?>

<!-- banner -->
<div class="header-slider">
		<div class="slider">
			<div class="callbacks_container">
			  <ul class="rslides" id="slider">
				<li>
				    <img src="app/core/styles/css/img/new/banner.jpg" alt="">
				    <div class="caption">
					<h3></h3>
					<p></p>
				    </div>
				</li>
				<li>
				    <img src="app/core/styles/css/img/new/banner2.jpg" alt="">
					  <div class="caption">
					  <h3></h3>
					  <p></p>
				      </div>
				</li>
			</ul>
		  </div>
	  </div>
</div>
<!-- banner -->
<!-- news -->
	<div class="news">
		<div class="container">
			<div class="news-text">
			    <h5> &nbsp </h5>
				<h3>&nbsp 相关链接：请使用chorme内核浏览器，不要使用IE浏览器</h3>
			</div>
			<div class="news-grids">
			    <?php $hid = 0;
 foreach($this->tpl_var['basics']['new']['data'] as $key => $new){ 
 $hid++; ?>
				<div class="col-md-3 news-grid wow fadeInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
				  <a href="index.php?exam-app-index-setCurrentBasic&basicid=<?php echo $new['basicid']; ?>" title="<?php echo $new['basic']; ?>">
				    <img alt="1200x800" src="<?php echo $new['basicthumb']; ?>"/>
				    <h4><strong><?php echo $new['basic']; ?></strong></h4>
				  </a>
				</div>
			   <?php } ?>
				<div class="col-md-3 news-grid wow fadeInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
				  <a href="detailedrules.html"> 
					<img src="app/core/styles/css/img/new/img1.jpg" alt="" />
					<h4><strong>赛事规则</strong></h4>
				  </a>
				</div>
				<div class="col-md-3 news-grid wow fadeInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
				  <a href="rank.php">
				    <img src="app/core/styles/css/img/new/img2.jpg" alt="" />
					<h4><strong>排行榜</strong></h4>
				  </a>
			</div>
						<div class="news-text">
			    <h5> &nbsp </h5>
				<h3>&nbsp 组委会</h3>
			</div>
				<div class="col-md-3 news-grid wow fadeInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
				  <a href="http://10.llixinyu.applinzi.com/index.html">
				    <img src="app/core/styles/css/img/new/img3.jpg" alt="" />
					<h4><strong>李新羽</strong></h4>
				  </a>
				</div>
				<div class="col-md-3 news-grid wow fadeInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
				  <a href="https://jessicaht.github.io">
				    <img src="app/core/styles/css/img/new/img4.jpg" alt="" />
				    <h4><strong>黄婷</strong></h4>
				  </a>
				</div>
				<div class="col-md-3 news-grid wow fadeInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
				  <a href="http://blogofcht.applinzi.com/">
				    <img src="app/core/styles/css/img/new/img5.jpg" alt="" />
					<h4><strong>陈豪庭</strong></h4>
				  </a>
			    </div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //news -->
<?php $this->_compileInclude('foot'); ?>
<script>
$(function() {
    $('.banner').unslider({dots: true});
});
</script>
</body>
</html>