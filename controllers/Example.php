<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Example extends My_Public {

	public function __contruct()
	{
		parent::__contruct();
	}

	public function index()
	{
		$data['list'] = $this->Mexample->get_all();
		$data['mycontent'] = 'example';
		$data['my_header'] = $this->my_header;
		$this->load->view($this->my_template, $data);
	}
	
	public function ins()
	{
		if($_POST):
			$insert_data['name'] = $this->input->post('name');
			$insert_data['address'] = $this->input->post('address');
			$insert_data['sex'] = $this->input->post('sex');
			$result = $this->Mexample->insert($insert_data);
			if($result):
				$this->session->set_flashdata('error', 'success insert: id='.$result);
				redirect('example/index','refresh');
			else:
				$this->session->set_flashdata('error', 'Insert Fail');
				redirect('example/index','refresh');
			endif;
		endif;
	}
	
	public function del()
	{
		$id = $this->uri->segment('3');
		$this->Mexample->delete($id);
		$this->session->set_flashdata('error', 'Delete Success: id='.$id);
		redirect('example/index','refresh');
	}
	
	public function upd()
	{
		$id = $this->uri->segment('3');
		$data['mycontent'] = 'example_update';
		$data['my_header'] = $this->my_header;
		if($_POST):
			$insert_data['name'] = $this->input->post('name');
			$insert_data['address'] = $this->input->post('address');
			$insert_data['sex'] = $this->input->post('sex');
			$this->Mexample->update($id, $insert_data);
			$this->session->set_flashdata('error', 'Update Success');
			redirect('example/upd/'.$id,'refresh');
		endif;
		$data['list'] = $this->Mexample->get($id);
		$this->load->view($this->my_template, $data);
	}
}
