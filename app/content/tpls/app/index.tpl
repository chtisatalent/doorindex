{x2;include:header}
<body>
{x2;include:nav}

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
				  <a href="rankinglist.html">
				    <img src="app/core/styles/css/img/new/banner2.jpg" alt="">
					  <div class="caption">
					  <h3></h3>
					  <p></p>
				      </div>
				  </a>
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
				<h3>&nbsp 竞赛题型</h3>
			</div>
			<div class="news-grids">
			    {x2;tree:$basics['new']['data'],new,hid}
				<div class="col-md-3 news-grid wow fadeInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
				  <a href="index.php?exam-app-index-setCurrentBasic&basicid={x2;v:new['basicid']}" title="{x2;v:new['basic']}">
				    <img alt="1200x800" src="{x2;v:new['basicthumb']}"/>
				    <h4>{x2;v:new['basic']}</h4>
				  </a>
				</div>
			   {x2;endtree}
				<div class="col-md-3 news-grid wow fadeInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
				  <a href="index.php"> 
					<img src="app/core/styles/css/img/new/img1.jpg" alt="" />
					<h4>MISC</h4>
				  </a>
				</div>
				<div class="col-md-3 news-grid wow fadeInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
				  <a href="index.php">
				    <img src="app/core/styles/css/img/new/img2.jpg" alt="" />
					<h4>PPC</h4>
				  </a>
				</div>
				<div class="col-md-3 news-grid wow fadeInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
				  <a href="index.php">
				    <img src="app/core/styles/css/img/new/img3.jpg" alt="" />
					<h4>CRYPTO</h4>
				  </a>
				</div>
				<div class="col-md-3 news-grid wow fadeInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
				  <a href="index.php">
				    <img src="app/core/styles/css/img/new/img4.jpg" alt="" />
				    <h4>PWN</h4>
				  </a>
				</div>
				<div class="col-md-3 news-grid wow fadeInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
				  <a href="index.php">
				    <img src="app/core/styles/css/img/new/img5.jpg" alt="" />
					<h4>REVERSE</h4>
				  </a>
			    </div>
				<div class="col-md-3 news-grid wow fadeInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
				  <a href="index.php">
				    <img src="app/core/styles/css/img/new/img7.jpg" alt="" />
					<h4>STEGA</h4>
				  </a>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //news -->
{x2;include:foot}
<script>
$(function() {
    $('.banner').unslider({dots: true});
});
</script>
</body>
</html>