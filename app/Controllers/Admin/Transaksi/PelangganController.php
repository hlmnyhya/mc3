<?php

namespace App\Controllers\Admin\Transaksi;

use App\Controllers\BaseController;
use App\Models\Pelanggan;

class PelangganController extends BaseController
{
    public function index()
    {
        $model = new Pelanggan();
        $data['pelanggan'] = $model->findAll();
        $data['title'] = 'Pelanggan';
        
        echo view('_partials_admin/header.php', $data);
        echo view('_partials_admin/sidebar.php');
        echo view('admin/transaksi/pelanggan/pelanggan', $data);
        echo view('admin/transaksi/pelanggan/_partials_transaksi/footer.php');
    }

    public function create()
    {
        echo view('pelanggan/create');
    }

    public function store()
    {
        $model = new Pelanggan(); 
        $data = [
            'tanggal' => $this->request->getPost('tanggal'),
            'jam' => $this->request->getPost('jam'),
            'nama' => $this->request->getPost('nama'),
            'telp' => $this->request->getPost('telp'),
            'status' => $this->request->getPost('status'),
            'alamat' => $this->request->getPost('alamat'),
        ];
        $model->insert($data);
        return redirect()->to('admin/transaksi/pelanggan/pelanggan');
    }

    public function update_diproses($id)
    {
        // Proses pembaruan data dari form input
        // Misalnya, Anda dapat menggunakan model untuk memperbarui data di database
        $model = new Pelanggan(); // Gantilah 'PelangganModel()' dengan model yang sesuai
        $data = [
            'tanggal' => $this->request->getPost('tanggal'),
            'jam' => $this->request->getPost('jam'),
            'nama' => $this->request->getPost('nama'),
            'telp' => $this->request->getPost('telp'),
            'status' => 'DIPROSES',
            'alamat' => $this->request->getPost('alamat'),
        ];
       if ($model->update($id, $data)) {
    // Pembaruan berhasil
    return redirect()->to('admin/transaksi/pelanggan/pelanggan');
} else {
    // Pembaruan gagal
    echo "Pembaruan gagal"; // Tampilkan pesan kesalahan atau lakukan penanganan kesalahan lainnya
}

    }

        public function update_dikembalikan($id)
    {
        // Proses pembaruan data dari form input
        // Misalnya, Anda dapat menggunakan model untuk memperbarui data di database
        $model = new Pelanggan(); // Gantilah 'PelangganModel()' dengan model yang sesuai
        $data = [
            'tanggal' => $this->request->getPost('tanggal'),
            'jam' => $this->request->getPost('jam'),
            'nama' => $this->request->getPost('nama'),
            'telp' => $this->request->getPost('telp'),
            'status' => 'DIKEMBALIKAN',
            'alamat' => $this->request->getPost('alamat'),
        ];
        $model->update($id, $data);

        // Redirect ke halaman sukses atau halaman lain yang sesuai
        return redirect()->to('admin/transaksi/pelanggan/pelanggan');
    }

        public function update_belum_selesai($id)
    {
        // Proses pembaruan data dari form input
        // Misalnya, Anda dapat menggunakan model untuk memperbarui data di database
        $model = new Pelanggan(); // Gantilah 'PelangganModel()' dengan model yang sesuai
        $data = [
            'tanggal' => $this->request->getPost('tanggal'),
            'jam' => $this->request->getPost('jam'),
            'nama' => $this->request->getPost('nama'),
            'telp' => $this->request->getPost('telp'),
            'status' => 'BELUM SELESAI',
            'alamat' => $this->request->getPost('alamat'),
        ];
        $model->update($id, $data);

        // Redirect ke halaman sukses atau halaman lain yang sesuai
        return redirect()->to('admin/transaksi/pelanggan/pelanggan');
    }

        public function update_selesai($id)
    {
        // Proses pembaruan data dari form input
        // Misalnya, Anda dapat menggunakan model untuk memperbarui data di database
        $model = new Pelanggan(); // Gantilah 'PelangganModel()' dengan model yang sesuai
        $data = [
            'tanggal' => $this->request->getPost('tanggal'),
            'jam' => $this->request->getPost('jam'),
            'nama' => $this->request->getPost('nama'),
            'telp' => $this->request->getPost('telp'),
            'status' => 'SELESAI',
            'alamat' => $this->request->getPost('alamat'),
        ];
        $model->update($id, $data);

        // Redirect ke halaman sukses atau halaman lain yang sesuai
        return redirect()->to('admin/transaksi/pelanggan/pelanggan');
    }
}
