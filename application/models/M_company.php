<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_company extends CI_Model
{

    public function getAllCompany()
    {
        $query = $this->db->get('company');
        return $query->result();
    }
}

/* End of file M_company.php */
