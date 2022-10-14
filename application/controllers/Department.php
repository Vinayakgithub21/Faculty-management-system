<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department extends CI_Controller {
	public function __construct()
	{
		


			parent::__construct();
			$this->load->helper(array('form', 'url'));
			$this->load->database();
			if(!$this->session->userdata('loggedin'))
			{
				// echo "You are not Logged in kindly login ";
				$this->load->view('admin');
			}
	} 
    public function departmentInsert()
	{
		// $this->load->view('departmentform');
		$data['main']='departmentform';
    $this->load->view('layout/main_layout',$data);
		
		if($this->input->post('btnsubmit')){
			$data=array(
				'depart_name'=>$this->input->post('txtdepartmentname'),
			 'description'=>$this->input->post('txtdescription'),
			//  'status'=>$this->input->post('txtstatus'),
			 
				 
		 );
		 $this->db->insert('department', $data);	
		
		 echo "Data Inserted Successfully";
		//  redirect('/welcome/departmentInsert','refresh');

		}
		
	}
    public function fetch_depart()
	 {

		$this->load->model('departmodel');
		$data['results'] = $this->departmodel->fetch_depart();
		// $this->load->view('depart_fetch',$data);
		$data['main']='depart_fetch';
    $this->load->view('layout/main_layout',$data);
	 }




}