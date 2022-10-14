<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {
    //
    public function __construct() {
        parent::__construct();
        // session_destroy();
        if(!$this->session->userdata('loggedin'))
        {
            $this->load->view('admin');
        }
     
//    { 
//     //   redirect('facLogin');
//       echo "Vinayak";
//    }
//    else
//    {
//     echo "yadav";
//    }
      }

// public function index()
// {
//     $data['main']='mypage';
//     $userdata=array(
//         'id'=>'vinayak12@g.com',
//         'type'=>'admin',
//         'loggedin'=>true
//     );
//     $this->session->set_userdata($userdata);
//     $this->load->view('layout/main_layout',$data);
// }
public function facLogin()
{
    // $data['main']='adminlog';
    $this->load->view('faclog');
    


}

public function Login()
{
   
    if($this->input->post('btnsignin'))
    
    {
                      if($this->input->post('usertype')=='faculty')
                                {  
                                    $sessiondata=array(
                                        'username'=>$this->input->post('txtusername'),
                                        'type'=>$this->input->post('usertype'),
                                        'loggedin'=>true

                                    );
                                    $this->session->set_userdata($sessiondata);
                                    $this->load->model('facmodel');
                                    $userdata=array(
                                        'username'=>$this->input->post('txtusername'),
                                        'password'=>$this->input->post('txtpassword'),
                                        'type'=>$this->input->post('usertype')

                                    );
                                        

                                    $this->load->model('login');
                                    $facultydata['fac_detail']=$this->login->getfacdetails($userdata);
                                    // $this->load->view('facdashboard',$facultydata);
                                    $facultydata['main']='facdashboard';
                                        $this->load->view('layout/main_layoutfac',$facultydata);
                                        // echo "<pre>";

                                        // print_r ($facultydata);
                                        // print_r($sessiondata);
                                        // exit;
                                  }                                 

                         elseif($this->input->post('usertype')=='admin')
                         {
                                $userdata=array(
                                    'username'=>$this->input->post('txtusername'),
                                    'password'=>$this->input->post('txtpassword'),
                                    'type'=>$this->input->post('usertype')

                                );

                                $this->load->model('login');
                                $mydata=$this->login->getuser($userdata);
                                        if($mydata==1)
                                                            {
                                                                $sessiondata=array(
                                                                    'username'=>$this->input->post('txtusername'),
                                                                    'type'=>$this->input->post('usertype'),
                                                                    'loggedin'=>true

                                                                );
                                                                $this->session->set_userdata($sessiondata);
                                                                echo "heeh";
                                                                $data['main']='mypage';
                                                                $this->load->view('layout/main_layout',$data);}
                             }


                                               

                                    
                         else{
                            $this->load->view('admin');
                             }

        
    }
    else
    {
        $this->load->view('admin');

    }
    // print_r($this->session->userdata());
    // $this->load->view('admin');
    

}
public function facdashboard()
{
	$data['main']='facdashboard';
	$this->load->view('layout/main_layout',$data);
	// $this->load->view('facdashboard');
}

public function Logout(){
    // session_destroy();
    $this->session->sess_destroy();
    $this->load->view('admin');      

}




}