<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subject extends CI_Controller {
	public function __construct()
	{
			parent::__construct();
			$this->load->helper(array('form', 'url'));
			$this->load->database();
			if(!$this->session->userdata('loggedin'))
				{
					$this->load->view('admin');
				}
	} 
	

    public function subjectinsert()
	{
		$data['main']='subjectform';
		$this->load->view('layout/main_layout',$data);
		// $this->load->view('subjectform');

		if($this->input->post('btnsubmit')){
			//$this->load->model('Mymodel');
			$config['upload_path']          = './syllabus/';
			$config['allowed_types']        = 'pdf|doc';
			// $config[encrypt_name] = 'TRUE';
		   $newfilename= date('dmYHis').str_replace(" ", "", basename($this->input->post('userfile')));
		   $config['file_name'] = $newfilename;
		   $this->load->library('upload', $config);
		   $res = $this->upload->do_upload('userfile');
		  // echo "vinay".$res. " res";
		   $data = array('upload_data' => $this->upload->data());
		   echo "</br>";
		   print_r($data);
		   $temp = explode(".",$this->input->post('userfile') ??'');
		   print_r($temp);
		   sizeof($temp);
		   $filename= $temp[0];
		   $extension = $temp[sizeof($temp)-1];
		   $newfilename1= $data['upload_data']['file_name'];
           echo $filename. ' '.$extension;
		   //print_r($temp);
			$data=array(
				'sname'=>$this->input->post('txtsubjecttname'),
			 'description'=>$this->input->post('txtdescription'),
			 'syllabus'=>$newfilename1,
			 
			//  'status'=>$this->input->post('txtstatus'),
			);
			echo "Data Inserted Successfully";
			$this->db->insert('subjects', $data);	

		 redirect('/subject/subjectinsert','refresh');
	}
}

public function assigningSubjects()
	   
	{
		// $this->load->view('assigning_subjects');
		
		$data['subjects']=($this->db->get('subjects'))->result_array();
		$data['facultys']=($this->db->get('faculty'))->result_array();
		
		
		$data['main']='assigning_subjects';
		$this->load->view('layout/main_layout',$data);
		
		// $this->load->view('assigning_subjects',$data);
		if($this->input->post('btnsubmit')){
			$data=array(
				'sub_id'=>$this->input->post('sid'),
			 'fac_id'=>$this->input->post('fid'),
			 'date_assigned'=>$this->input->post('intdate'),
			 
			//  'status'=>$this->input->post('txtstatus'),
			);
			// print_r(z0) ;
			echo "Data Inserted Successfully";
			$this->db->insert('assigsub', $data);	

	}}
    public function fetch_sub(Type $var = null)
    {
       $this->load->model('submodel');
       $data['results'] = $this->submodel->fetch_sub();
	   $data['main']='fetch_sub';
		$this->load->view('layout/main_layout',$data);
    //    $this->load->view('fetch_sub',$data);
    }
	public function fetch_assig_sub(Type $var = null)
    {
       $this->load->model('submodel');
       $data['results'] = $this->submodel->join_sub_fac();

	   $data['main']='fetch_assig_sub';
	   $this->load->view('layout/main_layout',$data);
    //    $this->load->view('fetch_assig_sub',$data);
    }

	public function up_assig_sub($id=null)
	{

		// echo "hi";
		echo $id;
		if($this->input->post('btnupdate') && $id==null)
		{
			echo "HEhe";
			$data= array(
				"assigid"=>$this->input->post('txtassig_id'),
				"sub_id"=>$this->input->post('sid'),
				"fac_id"=>$this->input->post('fid'),
				"status"=>$this->input->post('txtstatus')
				
				
			);
			print_r ($data); 
			$this->load->model('submodel');
			$this->submodel->up_assig_sub($data);
			
			//redirect('/welcome/furniturelist','refresh');

			
			
		}
		else if($id !=null) {
			// print_r($this->input->post());
			// echo "HEhe";   
			$this->load->model('submodel');
			$data['result']=$this->submodel->up_assig_sub($id);
			
			$this->db->select('sub_id, sname');
			$sub_results = $this->db->get('subjects');

			$data['subjects']=($sub_results)->result_array();
			$this->db->select('fac_id, fname,lname');
			$fac_results = $this->db->get('faculty');
			$data['facultys']=($fac_results)->result_array();
			
			//$data['main']='updated_furniture'; 
			// print_r($data);
			$data['main']='up_assig_sub';
	   $this->load->view('layout/main_layout',$data);
			//  $this->load->view('up_assig_sub',$data);
	
		}


		// $this->load->view('updated_furniture',$data);
		
	}




}