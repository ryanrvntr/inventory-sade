<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_Pelanggan extends CI_Model
{
    protected $_table = 'pelanggan';
    public function getAllPelanggan()
    {
        $this->db->select('pelanggan.nama,company.nama as company,type.nama as type , no_tlp, alamat');
        $this->db->from($this->_table);
        $this->db->join('company', 'company.id = pelanggan.id_company');
        $this->db->join('type', 'type.id = pelanggan.id_type');

        $query = $this->db->get();
        return $query->result();
    }

    public function insert($data)
    {
        return $this->db->insert('pelanggan', $data);
    }
}

/* End of file M_Pelanggan.php */
