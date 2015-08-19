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
				<h3>&nbsp 组委会构成</h3>
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
				  <a href="index.php"> 
					<img src="app/core/styles/css/img/new/img1.jpg" alt="" />
					<h4><strong>MISC</strong></h4>
				  </a>
				</div>
				<div class="col-md-3 news-grid wow fadeInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
				  <a href="index.php">
				    <img src="app/core/styles/css/img/new/img2.jpg" alt="" />
					<h4><strong>PPC</strong></h4>
				  </a>
				</div>
				<div class="col-md-3 news-grid wow fadeInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
				  <a href="index.php">
				    <img src="app/core/styles/css/img/new/img3.jpg" alt="" />
					<h4><strong>李新羽</strong></h4>
				  </a>
				</div>
				<div class="col-md-3 news-grid wow fadeInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
				  <a href="index.php">
				    <img src="app/core/styles/css/img/new/img4.jpg" alt="" />
				    <h4><strong>黄婷</strong></h4>
				  </a>
				</div>
				<div class="col-md-3 news-grid wow fadeInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
				  <a href="index.php">
				    <img src="app/core/styles/css/img/new/img5.jpg" alt="" />
					<h4><strong>陈豪庭</strong></h4>
				  </a>
			    </div>
				<div class="col-md-3 news-grid wow fadeInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
				  <a href="index.php">
				    <img src="app/core/styles/css/img/new/img7.jpg" alt="" />
					<h4><strong>STEGA</strong></h4>
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