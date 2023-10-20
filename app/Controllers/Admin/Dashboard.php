<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $data['title'] = 'Dashboard';
        echo view('_partials_admin/header.php', $data);
        echo view('_partials_admin/sidebar.php');
        echo view('admin/dashboard');
        echo view('_partials_admin/footer.php');
    }
}
