<?php
class facmodel extends CI_Model {

    public function fetch_fac()
    {
        // echo "hehehehehehehehehe";
            $query = $this->db->get('faculty');
            return $query->result_array();
    }
    public function fetch_fac_details($id)
{
        $data= array('fac_id' => $id);
        $query=$this->db->get_where('faculty',$data);
        return $query->row_array();


}
public function update_fac($data)
{
        $this->db->replace('faculty',$data);
        $this->db->where('fac_id',$data['fac_id']);

}

public function join_fac_dep( $var = null)
{

    $this->db->select('b.fac_id,b.fname,b.lname,b.mobile,a.depart_name');
    $this->db->from('department AS a'); 
    $this->db->join('faculty AS b', 'b.depart_id=a.depart_id');
//     $this->db->join('faculty AS c', 'c.fac_id=a.fac_id');
         
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

public function updatestatus($status,$data)
{
        
//         $this->db->set('status',$status);
// $this->db->where('faculty');


$this->db->set('status', 'inactive');
$this->db->where('fac_id', $data['fac_id']);
$this->db->update('faculty'); // gives UPDATE `mytable` SET `field` = 'field+1' WHERE `id` = 2
}









}