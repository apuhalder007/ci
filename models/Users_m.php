<?php
/**
* 
*/
class Users_m extends CI_Model
{
	private $tbl;
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->tbl = 'users';
	}

	function getAll($user_id = null, $limit = null, $offset = null){
		$this->db->select('id,fname,lname,username,email,image');
		if($user_id){
			$this->db->where(array('id'=>$user_id));
		}else{
			$this->db->limit($limit, $offset);
		}
		$result= $this->db->get($this->tbl)->result_array();

		return $result;
	}

	function num_rows(){
		$this->db->select('id,fname,lname,username,email,image');
		$result= $this->db->get($this->tbl)->num_rows();

		return $result;
	}

	function update_user($id, $data){
		return $this->db->where(array('id'=>$id))
					->update($this->tbl, $data);

	}

	function create_user($data){
		return $this->db->insert($this->tbl, $data);
	}

	function delete_user($id){
		return $this->db->where(array('id'=>$id))
					->delete($this->tbl);

	}
}
?>