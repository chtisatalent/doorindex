<?php
	class H{
	
    public $db_size;
    public $result_arr;
    public $result_arr1;
    public $result_arr2;
    public $db_un;
    public $db_score;
    public $db_time;
    public $db_comp;
    public $user_company;
    public $comp_name;

	
    function H(){
	   
      $this->db_un="ehusername";
			$this->db_score="ehscore";
			$this->db_time="ehtime";
			$this->db_comp="user_company";
/*			$dbadd="10.109.35.214";
			$dbun="root";
			$dbp="1qaZ@wsx)p;/";
			$dbn="pechina";*/
      $dbadd="w.rdc.sae.sina.com.cn";
      $dbun="yxm4o00yzk";
      $dbp="j0j130h24l022w3iy0zlk420x04xyjx0lz5043wy";
      $dbn="app_indexblog";
      $SAE_MYSQL_PORT = "3307";
/*            $dbadd="localhost";
      $dbun="root";
      $dbp="root";
      $dbn="pechina";
      $SAE_MYSQL_PORT = "3306";*/
/*      用户名　 :  SAE_MYSQL_USER
密　　码 :  SAE_MYSQL_PASS
主库域名 :  SAE_MYSQL_HOST_M
从库域名 :  SAE_MYSQL_HOST_S
端　　口 :  SAE_MYSQL_PORT
数据库名 :  SAE_MYSQL_DB*/
			/*$conn = @mysql_connect($dbadd,$dbun,$dbp);*/
      $conn = mysql_connect($dbadd.':'.$SAE_MYSQL_PORT,$dbun,$dbp);
			if (!$conn){
               die("连接数据库失败：" . mysql_error());
            }
            mysql_select_db($dbn, $conn);
           	mysql_query("set character set 'utf8'");
           	mysql_query("set names 'utf8'");
		
          
		}
		

		public function select_t(){
			$result = mysql_query("SELECT * from x2_examhistory where ehbasicid=1");
            while($arr = mysql_fetch_assoc($result)){
                $this->result_arr[] = $arr;
                $this->result_arr1[] = $arr;
                $this->result_arr2[] = $arr;
            }
            $this->db_size=sizeof($this->result_arr);   
		}
 	
        public function getcom($user_cop){
      	$get_result = mysql_query("SELECT usercompany from x2_user where username='$user_cop' ");
        $this->user_company = mysql_fetch_row($get_result);
        $this->comp_name=$this->user_company[0];
      	}
         
}

?>
