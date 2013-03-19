<?php

class My_Model extends CI_Model
{
	
}

class My_Db_Model extends My_Model
{
	
	protected $_table;
	
	//$get($id) or $get(array('your_field' => 'value'))
	public function get()
	{
		$args = func_get_args();
		if(count($args)>1 || is_array($args[0])):
			$this->db->where($args[0]);
		else:
			$this->db->where('id', $args[0]);
		endif;
			
		return $this->db->get($this->_table)->row();
	}
	
	public function get_all()
	{
		return $this->db->get($this->_table)->result();
	}
	
	public function insert($data)
	{
		$data['created_at'] = $data['updated_at'] = date('Y-m-d H:i:s');
			
		$success = $this->db->insert($this->_table, $data); 
		if($success):
			return $this->db->insert_id();
		else:
			return FALSE;
		endif;
	}
	
	public function update()
	{
		$args = func_get_args();
		if(is_array($args[0])):
			$this->db->where($args[0]);
		else:
			$this->db->where('id', $args[0]);
		endif;

		return $this->db->update($this->_table, $args[1]);
	}
	
	public function delete()
	{
		$args = func_get_args();
		if(count($args)>1 || is_array($args[0])):
			$this->db->where($args[0]);
		else:
			$this->db->where('id', $args[0]);
		endif;
		
		return $this->db->delete($this->_table);
	}
	
}
