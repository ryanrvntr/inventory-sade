<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_type extends CI_Model
{

    public function getAllType()
    {
        $query = $this->db->get('type');
        return $query->result();
    }
}

/* End of file M_type.php */
