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
      $dbun="ym3l0kmj01";
      $dbp="z5h5mikk011i1wmymy402zhzk05wijy2l0hx1m52";
      $dbn="app_doorblog1";
      $dbport="3307";

/*      $dbadd="localhost:3306";
      $dbun="root";
      $dbp="root"; 
      $dbn="pechina";*/

/*      
      用户名　 :  SAE_MYSQL_USER
密　　码 :  SAE_MYSQL_PASS
主库域名 :  SAE_MYSQL_HOST_M
从库域名 :  SAE_MYSQL_HOST_S
端　　口 :  SAE_MYSQL_PORT
数据库名 :  SAE_MYSQL_DB*/
			/*$conn = @mysql_connect($dbadd,$dbun,$dbp);*/
      $conn = mysql_connect($dbadd.':'.$dbport,$dbun,$dbp);
			if (!$conn){
               die("连接数据库失败：" . mysql_error());
            }
      if ($conn){
               echo "连接数据库成功";
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
