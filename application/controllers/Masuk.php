<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk extends CI_Controller {

    public function index()
    {
        $this->load->view('masuk/login');
    }

    public function register()
    {
        $this->load->view('masuk/register');
    }

}
