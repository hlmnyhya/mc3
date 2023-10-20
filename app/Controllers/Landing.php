<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Landing extends BaseController
{
 public function index()
    {
        $data['title'] = 'Welcome | MC Tech'; 
        echo view('_partials/header.php',$data);
        echo view('_partials/navbar.php');
        echo view('landing');
        echo view('_partials/footer.php');
    }

    public function about()
    {
        $data['title'] = 'About | MC Tech'; 
        echo view('_partials/header.php',$data);
        echo view('_partials/navbar.php');
        echo view('about');
        echo view('_partials/footer.php');
    }

    public function services()
    {
        $data['title'] = 'Services | MC Tech';         
        echo view('_partials/header.php',$data);
        echo view('_partials/navbar.php');
        echo view('services');
        echo view('_partials/footer.php');
    }

    public function contact()
    {
        $data['title'] = 'Contact | MC Tech';         
        echo view('_partials/header.php',$data);
        echo view('_partials/navbar.php');
        echo view('contact');
        echo view('_partials/footer.php');
    }
}
