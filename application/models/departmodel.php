<?php
class departmodel extends CI_Model {

    public function fetch_depart()
    {
            $query = $this->db->get('department');
            return $query->result_array();
    }






}