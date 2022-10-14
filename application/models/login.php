<?php
class Login extends CI_Model {
    
    public function getuser($data=null)
    {
        // $this->db->get('user',$data);
        // $this->db->where('id'=);
        $query = $this->db->get_where('user', $data);
        return ($query->num_rows());


    }
    public function getfacdetails($data=null)
{
        // $data= array('id' => $id);
        $query=$this->db->get_where('faculty',$data);
        return( $query->row_array());


}


}