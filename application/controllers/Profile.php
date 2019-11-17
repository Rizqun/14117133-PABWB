<?php

class Profile extends CI_Controller {
    public function index() {
        $this->load->view('templates/header');
        $this->load->view('Profile');
        $this->load->view('templates/footer');
    }
}