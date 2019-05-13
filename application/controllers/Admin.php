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
