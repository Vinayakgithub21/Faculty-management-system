<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
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
	

	
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function departmentInsert()
	{
		$this->load->view('departmentform');
		if($this->input->post('btnsubmit')){
			$data=array(
				'depart_name'=>$this->input->post('txtdepartmentname'),
			 'description'=>$this->input->post('txtdescription'),
			//  'status'=>$this->input->post('txtstatus'),
			 
				 
		 );
		 $this->db->insert('department', $data);	
		
		 echo "Data Inserted Successfully";
		 redirect('/welcome/departmentInsert','refresh');

		}
		
	}
	public function facultyInsert()
	{
		
		 $data['departments']=($this->db->get('department'))->result_array();
		// print_r($data);
		$this->load->view('facultyform',$data);


 
		
		if($this->input->post('btnsubmit')){

			$config['upload_path']          = './faculty/facpic/';
			$config['allowed_types']        = 'jpg|jpeg|png';
			$newfilename= date('dmYHis').str_replace(" ", "", basename($this->input->post('userfile')));
		   	$config['file_name'] = $newfilename;
		   	$this->load->library('upload', $config);
		   	$res = $this->upload->do_upload('userfile');
		  // echo "vinay".$res. " res";
		   	$data = array('upload_data' => $this->upload->data());
		  	echo "</br>";
			print_r($data);
		   	$temp = explode(".",$this->input->post('userfile') ??'');
		//    print_r($temp);
		   	sizeof($temp);
		   	$filename= $temp[0];
		   	$extension = $temp[sizeof($temp)-1];
		   	$newfilename1= $data['upload_data']['file_name'];
           	echo $filename. ' '.$extension;
		  // ..................................................
		   	$config2['upload_path']          = './faculty/facresume/';
			$config2['allowed_types']        = 'pdf|doc';
			$config2['encrypt_name'] = 'TRUE';
			$newdocname= 'v'.date('dmYHis').str_replace(" ", "",$this->input->post('userdoc'));
			$config2['file_name'] = $newdocname;
			$this->upload->initialize($config2);

			//$this->load->library('upload', $config2);
			// echo $_FILES["file"]["name"];
			//$newdocname= date('dmYHis').str_replace(" ", "", basename($this->input->post('userdoc')));
			
			// echo $newdocname."filenNAMEEJE";
			//$config2['file_name'] = $newdocname;
			//print_r($config2);
			
			$res = $this->upload->do_upload('userdoc');
			// echo "vinay".$res. " res";
			$data = array('upload_data' => $this->upload->data());
			
			
			print_r($data);
			
			echo "</br>";
			echo "</br>";
			echo "</br>";
			echo $this->input->post('userdoc')." two";
			$temp2 = explode(".",$this->input->post('userdoc') ?? '');
			sizeof($temp2);
			$docname= $temp2[0];
			$docextension = $temp2[sizeof($temp2)-1];

			$newdocname1 = $data['upload_data']['file_name'];
			print_r($temp2);
			$data=array(
				'fname'=>$this->input->post('txtfname'),
			 'lname'=>$this->input->post('txtlname'),
              'address'=>$this->input->post('txtaddress'),
			 'mobile'=>$this->input->post('intmobileno'),
			 'depart_id'=>$this->input->post('did'),
			 'profile_photo'=>$newfilename1,
			 'username'=>$this->input->post('txtusername'),
				'password'=>$this->input->post('txtpassword'),
				'type'=>$this->input->post('txttype'),		
			 'resume'=>$newdocname1,
			//  'department_id'=>$this->input->post('intdepartmentid'),
			// 'userfile'=>;
			// 'userdoc'=>;
			
			 
			//  'status'=>$this->input->post('txtstatus'),
			 
				 
		 );
		 print_r($data);
		 
		 $this->db->insert('faculty', $data);	
		 
		
		 echo "Data Inserted Successfully";

		 redirect('/welcome/facultyInsert','refresh');

 
	}
}
	public function subjectinsert()
	{
		$this->load->view('subjectform');

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

		 redirect('/welcome/subjectinsert','refresh');
	}
}

	public function assigningSubjects()
	   
	{
		// $this->load->view('assigning_subjects');
		
		$data['subjects']=($this->db->get('subjects'))->result_array();
		$data['facultys']=($this->db->get('faculty'))->result_array();
		// print_r($data);
		$this->load->view('assigning_subjects',$data);
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

	}

}
public function ind()
{
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required',
				array('required' => 'You must provide a %s.')
		);
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');

		if ($this->form_validation->run() == FALSE)
		{
				$this->load->view('new');
		}
		else
		{
				$this->load->view('new2');
		}
}



}