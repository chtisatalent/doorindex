<?php
define('DOMAINTYPE','off');
define('CH','exam_');
define('CDO','');
define('CP','/');
define('CRT',180);
define('CS','xn9dylsl012002');
define('HE','utf-8');
define('PN',10);
define('TIME',time());
if(dirname($_SERVER['SCRIPT_NAME']))
define('WP','http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['SCRIPT_NAME']).'/');
else
define('WP','http://'.$_SERVER['SERVER_NAME']);

/*define('DB','pechina');//MYSQL数据库名
define('DH','localhost');//MYSQL主机名，不用改
define('DU','root');//MYSQL数据库用户名
define('DP','root');//MYSQL数据库用户密码
define('DTH','x2_');//系统表前缀，不用改*/

define('DB','app_doorblog');//MYSQL数据库名
define('DH','w.rdc.sae.sina.com.cn:3307');//MYSQL主机名，不用改
define('DU','ym3l0kmj01');//MYSQL数据库用户名
define('DP','z5h5mikk011i1wmymy402zhzk05wijy2l0hx1m52');//MYSQL数据库用户密码
define('DTH','x2_');//系统表前缀，不用改
define('PORT','3307');//系统表前缀，不用改

/*      $dbadd="w.rdc.sae.sina.com.cn";
      $dbun="yxm4o00yzk";
      $dbp="j0j130h24l022w3iy0zlk420x04xyjx0lz5043wy";
      $dbn="app_indexblog";
      $SAE_MYSQL_PORT = "3307";*/
?>
