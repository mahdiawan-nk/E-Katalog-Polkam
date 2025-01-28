<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->model(array(
            'product_model' => 'product',
            'contact_model' => 'contact',
            'review_model' => 'review'
        ));
    }

    public function about()
    {
        $params['reviews'] = $this->review->get_all_reviews();

        get_header(get_store_name());
        get_template_part('pages/about', $params);
        get_footer();
    }

    public function produk()
    {
        $this->load->library('pagination');
        // $params['products'] = $this->product->get_all_products(true);


        $config['base_url'] = site_url('pages/produk');
        $config['total_rows'] = $this->product->get_total_products('product'); // Total jumlah data
        $config['per_page'] = 20; // Data per halaman
        $config['uri_segment'] = 3; // Segment URL untuk halaman

        // Styling pagination menggunakan Bootstrap 4
        $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['attributes'] = ['class' => 'page-link'];

        // Inisialisasi pagination
        $this->pagination->initialize($config);

        // Ambil data
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $params['products'] = $this->product->get_data_product($config['per_page'], $page,'product');
        $params['pagination'] = $this->pagination->create_links();
        $params['best_deal'] = $this->product->best_deal_product();
        $params['reviews'] = $this->review->get_all_reviews();
        get_header(get_store_name());
        get_template_part('pages/produk', $params);
        get_footer();
    }

    public function jasa()
    {
        $this->load->library('pagination');
        // $params['products'] = $this->product->get_all_products(true);


        $config['base_url'] = site_url('pages/produk');
        $config['total_rows'] = $this->product->get_total_products('jasa'); // Total jumlah data
        $config['per_page'] = 20; // Data per halaman
        $config['uri_segment'] = 3; // Segment URL untuk halaman

        // Styling pagination menggunakan Bootstrap 4
        $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['attributes'] = ['class' => 'page-link'];

        // Inisialisasi pagination
        $this->pagination->initialize($config);

        // Ambil data
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $params['products'] = $this->product->get_data_product($config['per_page'], $page,'jasa');
        $params['pagination'] = $this->pagination->create_links();
        $params['best_deal'] = $this->product->best_deal_product();
        $params['reviews'] = $this->review->get_all_reviews();
        get_header(get_store_name());
        get_template_part('pages/jasa', $params);
        get_footer();
    }

    public function contact()
    {
        $profile = user_data();

        $data['user'] = $profile;
        $data['flash'] = $this->session->flashdata('contact_flash');

        get_header(get_store_name());
        get_template_part('pages/contact', $data);
        get_footer();
    }

    public function send_message()
    {
        $this->form_validation->set_error_delimiters('<div class="text-danger font-weight-bold"><small>', '</small></div>');

        $this->form_validation->set_rules('name', 'Nama lengkap', 'required');
        $this->form_validation->set_rules('subject', 'Subjek pesan', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|min_length[10]');
        $this->form_validation->set_rules('message', 'Pesan', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->contact();
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $subject = $this->input->post('subject');
            $message = $this->input->post('message');

            $data = array(
                'name' => $name,
                'email' => $email,
                'subject' => $subject,
                'message' => $message,
                'contact_date' => date('Y-m-d H:i:s')
            );

            $this->contact->register_contact($data);
            $this->session->set_flashdata('contact_flash', 'Pesan berhasil dikirimkan. Kami akan membalas dalam waktu 2x24 jam');

            redirect('pages/contact');
        }
    }
}
