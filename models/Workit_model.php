<?php
class Workit_model extends CI_Model{
function __construct() {
parent::__construct();
}
			function getall(){
				//$count = $this->db->count_all('document');
				$sql = "SELECT *
						FROM work_order
						JOIN work_order_status on work_order.work_status = work_order_status.id 
						";//$query = $this->db->get('document');
				$query = $this->db->query($sql);
				$query_result = $query->result_array();
				return $query_result;
			}

			function getdata($data){
				//$count = $this->db->count_all('document');
				$sql ="SELECT * 
						FROM work_order 
						JOIN work_order_status on work_order.work_status = work_order_status.id 
						WHERE assign_by = '$data' ";
						;
				$query = $this->db->query($sql);
				$query_result = $query->result_array();
				return $query_result;

			}

			function getwork($data){
				//$count = $this->db->count_all('document');
				$sql ="SELECT * 
						FROM work_order 
						JOIN work_order_status on work_order.work_status = work_order_status.id
						WHERE worker = '$data' 
						";
				$query = $this->db->query($sql);
				$query_result = $query->result_array();
				return $query_result;

			}
			
			function get($data){
				//$count = $this->db->count_all('document');
				$sql ="SELECT * 
						FROM work_order
						JOIN work_order_status on work_order.work_status = work_order_status.id 
						WHERE doc_no = '$data' ";
				$query = $this->db->query($sql);
				$query_result = $query->result_array();
				return $query_result;

			}
			function get_ref($ID){
				//$count = $this->db->count_all('document');
				$sql ="SELECT * 
						FROM work_order 
						WHERE assign_by = '$ID' or Worker = '$ID' ";
						;
				$query = $this->db->query($sql);
				$query_result = $query->result_array();
				return $query_result;

			}

			function update_work($work_event,$work_status,$work_note,$now,$file){
				//$count = $this->db->count_all('document');
				$sql ="UPDATE work_order
						SET work_status = '$work_status', work_note = '$work_note', time_stamp = '$now' , job_at = '$file'
						WHERE work_event = '$work_event' " ;
				$query = $this->db->query($sql);
//echo $work_event,$work_status,$work_note,$now ;
			}
			function complete_work($work_event,$work_status,$work_note,$now){
				//$count = $this->db->count_all('document');
				$sql ="UPDATE work_order
						SET work_status = '$work_status', work_note = '$work_note', time_stamp = '$now'
						WHERE work_event = '$work_event' " ;
				$query = $this->db->query($sql);
//echo $work_event,$work_status,$work_note,$now ;
			}
			function upload($work_event,$file,$now){
				//$count = $this->db->count_all('document');
				$sql ="UPDATE work_order
						SET job_at = '$file', time_stamp = '$now'
						WHERE doc_no = '$work_event' " ;
				$query = $this->db->query($sql);
//echo $work_event,$work_status,$work_note,$now ;
			}

			function input_work($data){
				//$count = $this->db->count_all('document');
				$this->db->insert('work_order', $data);
				//print_r($data);
			}

			function update_command($work_event,$work_status,$work_command,$date_end){
				//$count = $this->db->count_all('document');
				$sql ="UPDATE work_order
						SET work_status = '$work_status', work_detail = '$work_command', date_end = '$date_end'
						WHERE work_event = '$work_event' " ;
				$query = $this->db->query($sql);
//echo $work_event,$work_status,$work_note,$now ;
			}

			function comment($work_event,$comment,$work_status){
				//$count = $this->db->count_all('document');
				$sql ="UPDATE work_order
						SET work_status = '$work_status', comment = '$comment'
						WHERE work_event = '$work_event' " ;
				$query = $this->db->query($sql);
//echo $work_event,$work_status,$work_note,$now ;
			}
			function after_check($doc_no,$work_status){
				//$count = $this->db->count_all('document');
				$sql ="UPDATE work_order
						SET work_status = '$work_status'
						WHERE doc_no = '$doc_no' " ;
				$query = $this->db->query($sql);
//echo $work_event,$work_status,$work_note,$now ;
			}

			function cancle_job($doc_no){
				//$count = $this->db->count_all('document');
				$this->db->delete('work_order', $doc_no);
//echo $work_event,$work_status,$work_note,$now ;
			}
  


		}
?>