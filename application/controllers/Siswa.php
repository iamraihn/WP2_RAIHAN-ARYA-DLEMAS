<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url'); // Memuat helper URL
    }

    public function index()
    {
        $this->load->view('input_siswa');
    }

    public function process()
    {
        // Validasi input
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nis', 'NIS', 'required');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('agama', 'Agama', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, kembali ke halaman input dengan pesan kesalahan
            $this->load->view('input_siswa');
        } else {
            // Jika validasi berhasil, tampilkan hasil input
            $data = array(
                'nama' => $this->input->post('nama'),
                'nis' => $this->input->post('nis'),
                'kelas' => $this->input->post('kelas'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'alamat' => $this->input->post('alamat'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'agama' => $this->input->post('agama')
            );

            $this->load->view('hasil_input', $data);
        }
    }
}
