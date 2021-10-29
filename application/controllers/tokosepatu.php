<?php
defined('BASEPATH') or exit ('no direct script access allowed');

class tokosepatu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_data');
    }

    public function index()
    {
        $this->form_validation->set_rules('nama', 'Nama Pembeli',
        'required', [
            'required' => 'Harus Mengisi Nama'
        ]);

        $this->form_validation->set_rules('nohp', 'Nomor HP',
        'required', [
            'required' => 'Harus Mengisi Nomor Hp'
        ]);

        if ($this->form_validation->run() == false) {
            $data['merk'] = ['Nike', 'Adidas', 'Kickers', 'Eiger', 'Bucherri'];
            $this->load->view('review/input_data', $data);
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'nohp' => $this->input->post('nohp'),
                'merk' => $this->input->post('merk'),
                'ukuran' => $this->input->post('ukuran'),
                'harga' => $this->model_data->proses($this->input->post ('merk'))
            ];
            
            $this->load->view('review/output_data', $data);
        }
    }
}