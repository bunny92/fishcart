<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin_model');
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }

    public function index() {
        $this->load->view('admin/admin_login');
    }

    public function ajax_admin_login() {

        $email = $this->input->post('username');
        $password = $this->input->post('password');
        $login_status = $this->validate_login($email, md5($password));

        if ($login_status == 'success') {
            $this->session->set_userdata('admin_login', '1');
            $this->session->set_userdata('login_type', 'admin');
        }
        echo $login_status;
    }

    public function validate_login($email = '', $password = '') {
        $credential = array('username' => $email, 'password' => $password);
        $result = $this->admin_model->admin_authenticate($credential);
        return $result;
    }

    public function admin_logout() {
        $result = $this->session->sess_destroy();
        if ($result == null) {
            $data['status'] = 0;
            $this->admin_model->update_user_data($data);
        }
        redirect(base_url('admin'));
    }

    public function addProduct() {
        if ($this->session->userdata('admin_login') != 1) {
            redirect(base_url() . 'admin');
        } elseif ($this->session->userdata('admin_login') == 1) {
            $data['category'] = $this->admin_model->getTableData('categories');
            $this->load->view('admin/addProduct', $data);
        } else {
            echo "404 Error..!";
        }
    }

    public function add_product() {
       
        if (!empty($_FILES['product_image']['name'])) {
            $config['upload_path'] = 'product_images/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['file_name'] = $_FILES['product_image']['name'];

            //Load upload library and initialize configuration
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('product_image')) {
                $uploadData = $this->upload->data();
                $product_image = base_url("product_images/" . $uploadData['raw_name'] . $uploadData['file_ext']);
            } else {
                $product_image = NULL;
            }
        } else {
            $this->session->set_flashdata('error', "Product image not uploaded..!");
        }
        if ($product_image != NULL) {
            $data = [
                'product_name' => $this->input->post('product_name'),
                'product_description' => $this->input->post('product_description'),
                'product_price' => $this->input->post('product_price'),
                'stock' => $this->input->post('stock'),
                'seller' => $this->input->post('seller'),
                'product_image' => $product_image,
                'category_id' => $this->input->post('category_id'),
                'SKU' => date('ymd') . '-' . rand(010, 200),
                'product_cost' => $this->input->post('product_cost')
            ];
            $response = $this->admin_model->addProductModel($data);
            if ($response == TRUE) {
                $this->session->set_flashdata('success', "Product added successfully..!");
            } else {
                $this->session->set_flashdata('error', "Something went wrong..!");
            }
            redirect('admin/addProduct', 'refresh');
        } else {
            $this->session->set_flashdata('error', "Product image not uploaded..!");
        }
    }

    function showProducts() {
        $data['product'] = $this->admin_model->getTableData('product_details');
        $this->load->view('admin/showProducts', $data);
    }

    function ajax_deleteProduct(){
        $product_id  = $this->input->post('product_id');
        $response = $this->admin_model->deleteProduct($product_id);
        echo $response;
    }

    function showProductsById($id) {
        if ($this->session->userdata('admin_login') != 1) {
            redirect(base_url() . 'admin');
        } elseif ($this->session->userdata('admin_login') == 1) {
            $data['product'] = $this->admin_model->showproductsbyid_model($id);
            $this->load->view('admin/showProductsById', $data);
        } else {
            echo "404 Error..!";
        }
    }

    public function dashboard() {
        if ($this->session->userdata('admin_login') != 1) {
            redirect(base_url() . 'admin');
        } elseif ($this->session->userdata('admin_login') == 1) {
            $this->load->view('admin/admin_dashboard');
        } else {
            echo "404 Error..!";
        }
    }

}
