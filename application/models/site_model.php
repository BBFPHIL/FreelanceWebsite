<?php


class Site_model extends CI_Model{

	//Get all records
	function getAll(){
		$q = $this->db->get('test');
		//Filter through each row and save each row
		if($q->num_rows() > 0){
			foreach($q->result() as $row){
				$data[] = $row;
			
			}
		
		return $data;
		}
	}

	//receive a specific function
	function get_records(){
	
		//autoloading database table here
		$query = $this->db->get('data');
		return $query->result();
	}
	
	//add a record to database
	function add_record($data){
	
		//store variables
		$title = $data['title'];
		$contents = $data['contents'];
		$author = $data['author'];
		
		$this->db->query("INSERT INTO data (title, contents, author) VALUES ('$title', '$contents', '$author')");
		
		return;
		
	}

	//update a current database record
	function update_record($data){
		$this->db->where('id', 2);
		$this->db->update('data', $data);
	}
	
	
	//delete a record row
	function delete_record($data){
		
		//create var for sql
		$id = $data['id'];
		
		//Executing delete -- now it should be gone after this
		$this->db->query("DELETE FROM data WHERE id='$id'");
		
	}

}

