<?php
class submodel extends CI_Model {

    public function fetch_sub()
    {
            $query = $this->db->get('subjects');
            return $query->result_array();
    }
    public function fetch_assig_sub()
    {
            $query = $this->db->get('assigsub');
            return $query->result_array();
    }
    public function up_assig_sub($data)
    {
            print_r($data);
            //exit;
            if(!is_array($data))
            {
                echo "not array";
                // $this->db->get('subjects');
                $query = $this->db->get_where('assigsub', array('assigid' => $data));
                return $query->result_array();
            }
            else{
                $this->db->replace('assigsub',$data);
                $this->db->where('assigid',$data['assigid']);
            }
    
    }
    public function join_sub_fac(Type $var = null)
    {

        $this->db->select('a.assigid,b.sname,c.fname,c.lname,a.date_assigned,a.status');
        $this->db->from('assigsub AS a'); 
        $this->db->join('subjects AS b', 'b.sub_id=a.sub_id');
        $this->db->join('faculty AS c', 'c.fac_id=a.fac_id');
        // $this->db->where('c.album_id',$id);
        // $this->db->order_by('c.track_title','asc');         
        $query = $this->db->get(); 
        if($query->num_rows() != 0)
        {
            return $query->result_array();
        }
        else
        {
            return false;
        }

    }
    



}