<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('tamplate/home_header');
        $this->load->view('tamplate/home_navbar');
        $this->load->view('home/index');
        $this->load->view('tamplate/home_footer');
    }

    public function about()
    {
        $this->load->view('tamplate/home_header');
        $this->load->view('tamplate/home_navbar');
        $this->load->view('home/about');
        $this->load->view('tamplate/home_footer');
    }
    public function portfolio()
    {
        $this->load->view('tamplate/home_header');
        $this->load->view('tamplate/home_navbar');
        $this->load->view('home/portfolio');
        $this->load->view('tamplate/home_footer');
    }
    public function team()
    {
        $this->load->view('tamplate/home_header');
        $this->load->view('tamplate/home_navbar');
        $this->load->view('home/team');
        $this->load->view('tamplate/home_footer');
    }
    public function myAccount()
    {
        $this->load->view('tamplate/home_header');
        $this->load->view('tamplate/home_navbar');
        $this->load->view('home/myAccount');
        $this->load->view('tamplate/home_footer');
    }
    public function logIn()
    {
        $this->load->view('tamplate/home_header');
        $this->load->view('tamplate/home_navbar');
        $this->load->view('home/logIn');
        $this->load->view('tamplate/home_footer');
    }
    public function signIn()
    {
        $this->load->view('tamplate/home_header');
        $this->load->view('tamplate/home_navbar');
        $this->load->view('home/signIn');
        $this->load->view('tamplate/home_footer');
    }
    public function blog()
    {
        $this->load->view('tamplate/home_header');
        $this->load->view('tamplate/home_navbar');
        $this->load->view('home/blog');
        $this->load->view('tamplate/home_footer');
    }
    public function contact()
    {
        $this->load->view('tamplate/home_header');
        $this->load->view('tamplate/home_navbar');
        $this->load->view('home/contact');
        $this->load->view('tamplate/home_footer');
    }
}
