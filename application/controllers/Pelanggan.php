<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pelanggan');
        $this->load->model('M_company');
        $this->load->model('M_type');

        $this->load->library('form_validation');
    }


    public function index()
    {
        $data['title'] = 'Pelanggan';
        $data['pelanggan'] = $this->M_pelanggan->getAllPelanggan();
        $data['no'] = 1;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('pelanggan/pelanggan', $data, FALSE);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('no_tlp', 'No Telepon', 'trim|required|numeric');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Tambah Pelanggan';
            $data['company'] = $this->M_company->getAllCompany();
            $data['type'] = $this->M_type->getAllType();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('pelanggan/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'id_company' => $this->input->post('company'),
                'id_type' => $this->input->post('type'),
                'no_tlp' => $this->input->post('no_tlp'),
                'alamat' => $this->input->post('alamat'),
            ];
            if ($this->M_pelanggan->insert($data)) {
                $this->session->set_flashdata('success', 'Data pelanggan <strong>Berhasil</strong> Ditambahkan!');
                redirect('pelanggan');
            } else {
                $this->session->set_flashdata('error', 'Data pelanggan <strong>Gagal</strong> Ditambahkan!');
                redirect('pelanggan');
            }
        }
    }
}

/* End of file Pelanggan.php */
