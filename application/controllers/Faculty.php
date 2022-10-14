<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faculty extends CI_Controller {
	public function __construct()
	{
			parent::__construct();
			$this->load->helper(array('form', 'url'));
			$this->load->database();
				// session_destroy();
				if(!$this->session->userdata('loggedin'))
				{
					$this->load->view('admin');
				}
	} 


	public function facultyInsert()
	{
		
		 $data['departments']=($this->db->get('department'))->result_array();
		// print_r($data);
		$data['main']='facultyform';
		$this->load->view('layout/main_layout',$data);
		// $this->load->view('facultyform',$data);
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
		 exit;
		
		 echo "Data Inserted Successfully";

		 redirect('/welcome/facultyInsert','refresh');

 
	}
}

public function fetch_fac()
{
   $this->load->model('facmodel');
   $data['results'] = $this->facmodel->fetch_fac();

   $data['main']='fetch_fac';
		$this->load->view('layout/main_layout',$data);
//    $this->load->view('fetch_fac',$data);
}




public function update($id=null)
{ 	
	

	if($this->input->post('btnupdate')&& $id==null)


		{
		 	$config['upload_path']          = './faculty/facresume/';
	$config['allowed_types']        = 'gif|jpg|png|pdf|doc';
	$config['encrypt_name'] = TRUE;

	
	$this->load->library('upload', $config);
	
	 $this->upload->do_upload('new_resume');
	
	$data = array('upload_data' => $this->upload->data());
	
	echo "<pre>";
	print_r($data);


	$newfilename1= $data['upload_data']['file_name'];
	$oldfilename=$this->input->post('old_resume');

	print_r($oldfilename);
	print_r($newfilename1);
	// unlink();
	if(file_exists("faculty/facresume/".$oldfilename))
	{
		unlink("faculty/facresume/".$oldfilename);
	}
			
	
			// print_r( $old_res);
			
			// echo "HEhe";
			$data= array(
				'fac_id'=>$this->input->post('id'),
				'fname'=>$this->input->post('txtfname'),
				'lname'=>$this->input->post('txtlname'),
			    'address'=>$this->input->post('txtaddress'),
				'mobile'=>$this->input->post('intmobileno'),
				'depart_id'=>$this->input->post('did'),
				'profile_photo'=>$this->input->post('userfile'),
				
				'resume'=>$newfilename1,
				
			);
			// print_r ($data);
			$this->load->model('facmodel');
			$this->facmodel->update_fac($data);

			
			// redirect('/faculty/fetch_fac','refresh');

			
			
		}
		else if($id !=null) {
			// print_r($this->input->post());
			// echo "HEhe";   
			
			// print_r( $old_res);
		
			$this->load->model('facmodel');
			$data['fac_detail']=$this->facmodel->fetch_fac_details($id);

			// $this->load->view('edit_fac',$data);
			$data['main']='edit_fac';
			$this->load->view('layout/main_layout',$data);
			
	
	
		}
		


		// $this->load->view('updated_furniture',$data);
		
	}
	public function delete($id=null)
	{
		echo "hehe";
		
		$this->load->model('facmodel');
		$data=$this->facmodel->fetch_fac_details($id);
		// print_r ($data);
		// exit;
		 
		   $status='inactive';
		   $this->facmodel->updatestatus($status,$data);
		//    redirect();



	

	}
	
	

}