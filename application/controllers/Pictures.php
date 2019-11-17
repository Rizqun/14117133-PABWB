<?php

class Pictures extends CI_Controller {
    public function index() {
        $this->load->view('templates/header');
        $this->load->view('Pictures');
        $this->load->view('templates/footer');
    }
}