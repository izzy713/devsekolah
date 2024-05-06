<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mains extends CI_Controller {
    public function index(){
        $data = array(
            'title' => "Profile Sekolah"
        );
        $this->load->view('index', $data);
    }

    public function login(){
        // $data = array(
        //     'title' => "Login"
        // );
        // $this->load->view('login', $data);
        echo "ABC";
    }
}