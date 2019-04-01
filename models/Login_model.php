<?php 

class Login_Model extends CI_Model{
    function __construct() {
parent::__construct();
}
	public $user;
	public $key;
	function login ($user,$key){
                

                $sql ="SELECT * 
                        FROM user
                        JOIN Level ON user.level = Level.Level_ID
                        JOIN Department ON user.department = Department.Dept_id
                        WHERE ID = '$user' ";
                $query = $this->db->query($sql);
                $query_result = $query->result_array();
                $data = $query_result;
                //return $query_result;
                //print_r($data);

                if($data[0]["password"] != $key ){echo "<script>alert(\"Authentication failed\");
                    window.location=\"/it/job/\";
                  </script>";}

                else{
  
         
         $arr = array(   'ID' => ($data[0]["ID"]), 
                         'full_name' => $data[0]["display_name"], 
                         'email_addr' => $data[0]["Email"], 
                         'department' => $data[0]["Dept_name"], 
                         'job' => $data[0]["Level_name"],
                         'level' => $data[0]["Level_ID"],
                         'dept' => $data[0]["Dept_id"],


                        );
         $this->session->set_userdata('logged_in',$arr);
         //print_r($arr);
         ; }
        


    }
    function get_assign ($level){
        $sql ="SELECT * 
                        FROM user
                        JOIN Level ON user.level = Level.Level_ID
                        JOIN Department ON user.department = Department.Dept_id
                        WHERE level = '$level'+'1' ";
                $query = $this->db->query($sql);
                $query_result = $query->result_array();
                //$data = $query_result;
                return $query_result;
                //print_r($data);


    }

    function get_worker ($level,$dept){
        $sql ="SELECT * 
                        FROM user
                        JOIN Level ON user.level = Level.Level_ID
                        JOIN Department ON user.department = Department.Dept_id
                        WHERE level = '$level'+'1' AND Department = '$dept' ";
                $query = $this->db->query($sql);
                $query_result = $query->result_array();
                //$data = $query_result;
                return $query_result;
                //print_r($data);


    }

    function get_mail ($id){
        $sql ="SELECT * 
                        FROM user
                        WHERE ID = '$id' ";
                $query = $this->db->query($sql);
                $query_result = $query->result_array();
                //$data = $query_result;
                return $query_result;
                //print_r($data);


    }















} ?>