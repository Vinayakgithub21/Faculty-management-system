<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct() {
        parent::__construct();
        // session_destroy();
        if(!$this->session->userdata('loggedin'))
        {
            $this->load->view('admin');
        }
    }
//     public function fetch_fac_list()
//     {
  

//    $this->load->model('facmodel');
//    $data['results'] = $this->facmodel->fetch_fac();

//    $data['main']='fetch_fac_list';
//    $this->load->view('layout/main_layoutfac',$data);


//     }
    public function fetch_sub_list( $var = null)
    {
       $this->load->model('submodel');
       $data['results'] = $this->submodel->fetch_sub();
	   $data['main']='fetch_sub_list';
		$this->load->view('layout/main_layoutfac',$data);
    ////////////////    $this->load->view('fetch_sub',$data);
    }

    public function fetch_fac_dep_list( $var = null)
    {
        $this->load->model('facmodel');
        $data['results']=$this->facmodel->join_fac_dep();
        $data['main']='fetch_fac_list';
		$this->load->view('layout/main_layoutfac',$data);
        // $this->load->view('fetch_fac_list',$data);
        // echo"<pre>";
        // print_r($data);
    }

}