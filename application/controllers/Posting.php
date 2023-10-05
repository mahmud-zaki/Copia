<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Posting extends CI_Controller
{

    public function index()
    {
        $data['produk'] = $this->db->get('produk')->result_array();

        $this->form_validation->set_rules('link', 'Link Produk', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('partials/header');
            $this->load->view('posting', $data);
        } else {
            $data = [
                'produk_id' => $this->input->post('id_produk'),
                'link_prod' => $this->input->post('link')
            ];

            $upload_image = $_FILES['gambar']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']      = '5000';
                $config['upload_path'] = './assets/img/produk/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->db->insert('produk', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Produk baru ditambahkan !
            </div>');
            redirect('posting');
        }
    }
}
