<!DOCTYPE html>
<html lang="en">
  <head>
  <meta http-equiv="refresh" content="30">
    <meta charset="utf8">
    <title>排行榜</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Admin panel developed with the Bootstrap from Twitter.">
    <meta name="author" content="travis">
    <link href="app/core/styles/css/new/bootstrap.css" rel="stylesheet">
  <link href="app/core/styles/css/new/site.css" rel="stylesheet">
    <link href="app/core/styles/css/new/bootstrap-responsive.css" rel="stylesheet">
  <link href="app/core/styles/css/new/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="app/core/styles/css/new/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<meta name="keywords" content="Muster Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="app/core/styles/js/new/jquery.min.js"></script>
<script src="app/core/styles/js/new/jquery-1.8.3.min.js"></script>
<script src="app/core/styles/js/new/responsiveslides.min.js"></script>
<script src="app/core/styles/js/new/bootstrap.js"></script>
<link rel="stylesheet" href="app/core/styles/css/new/flexslider.css" type="text/css" media="screen" />  
<style type="text/css">
body{
  padding-top: 60px;
  font-family : 微软雅黑;
 
}
.rank_table{
  height: 500px;
}
</style>  

   <script src="app/core/styles/js/new/jquery.js"></script>
  <script src="app/core/styles/js/new/bootstrap.min.js"></script>
  <script>
  $(document).ready(function() {
    $('.dropdown-menu li a').hover(
    function() {
      $(this).children('i').addClass('icon-white');
    },
    function() {
      $(this).children('i').removeClass('icon-white');
    });
    
    if($(window).width() > 760)
    {
      $('tr.list-users td div ul').addClass('pull-right');
    }
  });
  </script>
   
  </head>
  <body>
            <meta http-equiv="Content-Type" content="text/html; charset=utf8">
                  <?php
                      $conn = @mysql_connect("10.109.35.214","root","1qaZ@wsx)p;/");
                      if (!$conn){
                        die("连接数据库失败：" . mysql_error());
                      }
                      mysql_select_db("pechina", $conn);
                      //字符转换，读库
                      mysql_query("set character set 'utf8'");
                      //写库
                      mysql_query("set names 'utf8'");
                      $result = mysql_query("SELECT * from x2_examhistory where ehbasicid=1");
                      while($arr = mysql_fetch_assoc($result)){
                          $result_arr[] = $arr;
                          $result_arr1[] = $arr;
                          $result_arr2[] = $arr;


                      }
                      function compare($x, $y){
                           if ($x['ehscore'] == $y['ehscore']){
                                  if ($x['ehtime'] == $y['ehtime']){
                            return 0;
                                  }else if ($x['ehtime'] < $y['ehtime']){
                            return -1;
                                 }else{
                                    return 1;
                                    }
                            
                            return 0;
                         }
                         else if ($x['ehscore'] < $y['ehscore']){
                            return 1;
                         }else{
                            return -1;
                         }
                        }
                        usort($result_arr, 'compare');
                        usort($result_arr1, 'compare');
                        usort($result_arr2, 'compare'); 
                 ?>
<!-- header -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="header">
      <div class="container2">
          <div class="logo">
            <a href="index.php"><img src="app/core/styles/css/img/new/logo.png" class="img-responsive" alt=""></a>
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
          
          <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //header -->
  <div class="container-fluid">
    <div class="row-fluid">
        <div class="span9">
      <div class="row-fluid">
      <div class="rank_table">
      <div class="page-header">
        <h1>初赛排行榜 <small>所有参赛者</small></h1>
      </div>
      <table class="table table-striped table-bordered table-condensed">
        <thead>
          <tr>
           <th width="20%">排名</th>
            <th width="20%">用户名</th>
            <th width="20%">得分</th>
            <th width="20%">用时</th>
            <th width="20%">单位</th>
          </tr>
        </thead>
        <tbody>
        <?php 
           $num=0; 
           $numcont=sizeof($result_arr);
        if($numcont>20){
        if($numcont>30)
          $numcont=30;
          for ($row = 20; $row < $numcont; $row++){
                      reset($result_arr[$row]);
                      reset($result_arr1[$row]);
                      reset($result_arr2[$row]);              
        ?>

        <tr class="list-users">
          <td>
          <?php
                      $rank = $row+1;
                      echo "$rank"; 
          ?>
          </td>
          
          <td>
          <?php

              while (list($key, $value ) = each( $result_arr[$row]) ){
                  if ($key == "ehusername") {
                    $user_c=$value;
                    echo "$value";
                  }
              }
          ?>
          </td>
          
           <td>
           <?php
              while(list($key, $value ) = each( $result_arr1[$row]) ){
                  if($key == "ehscore"){
                  echo "$value";
                  }
              }
          ?>
          </td>
           
           <td>
          <?php
              while(list($key, $value ) = each( $result_arr2[$row]) ){
                  if($key == "ehtime"){
                      
                      if($value>=60){
                        if($value>=3600){
                          if($value%3600){
                            $usetime_h= intval($value/3600);
                            echo "$usetime_h"."小时";
                            $usetime_m=($value-(3600*$usetime_h));
                            if($usetime_m%60)
                            echo intval($usetime_m/60)+1;
                            else
                              echo intval($usetime_m/60);
                            echo "分钟";
                          }
                          else{
                            echo intval($value/3600);
                            echo "小时";
                          }
                        }
                        else{
                            if($value%60)
                              echo intval($value/60)+1;
                            else
                              echo intval($value/60);
                              echo "分钟";

                          }
                      }
                          else
                            echo "$value"."秒";

                  }
             
              }
          ?>
          </td>
            <td>
            <?php
              $get_result = mysql_query("SELECT usercompany from x2_user where username='$user_c' ");
              $user_company = mysql_fetch_row($get_result);
              echo "$user_company[0]";
            ?>
          </td>
          </tr>
          <?php }
          } ?>          
        </tbody>
      </table>
      </div>
      <div class="blog-pagenat">
              <ul>
               
                <li><a href="rank.php">1</a></li>
                <li><a href="rank_list1.php">2</a></li>
                <li><a href="rank_list2.php">3</a></li>
                <li><a href="rank_list3.php">4</a></li>
                <li><a href="rank_list4.php">5</a></li>
              
                <div class="clearfix"> </div>
              </ul>
            </div>
      </br><br><br><br>
      </div>
        </div>
    </div>

      </div>
<!-- footer-bottom -->
  <div class="footer-bottom">
    <div class="container">
      <p align="center">Copyright &copy; <a target="_blank" href="http://www.cecgw.com.cn/">中电长城网际系统应用有限公司</a></p>
    </div>
  </div>
<!-- footer-bottom -->
  </body>
</html>



