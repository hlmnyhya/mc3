<?php

namespace App\Controllers;

class Home extends BaseController
{

     public function index()
    {
        $data = [
            'title' => 'Media Computer',
        ];

        return view('header')
            . view('menu')
            . view('content', $data)
            . view('footer');
    } 
    
    public function index()
        {
            $this->load->view('_partials/header.php');
            $this->load->view('_partials/navbar.php');
            $this->load->view('landing');
            $this->load->view('_partials/footer.php');
        }
        public function about()
        {
            $this->load->view('_partials/header.php');
            $this->load->view('_partials/navbar.php');
            $this->load->view('about');
            $this->load->view('_partials/footer.php');
        }
        public function services()
        {
            $this->load->view('_partials/header.php');
            $this->load->view('_partials/navbar.php');
            $this->load->view('services');
            $this->load->view('_partials/footer.php');
        }
        public function contact()
        {
            $this->load->view('_partials/header.php');
            $this->load->view('_partials/navbar.php');
            $this->load->view('contact');
            $this->load->view('_partials/footer.php');
        }


}
