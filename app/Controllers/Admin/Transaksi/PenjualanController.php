<?php

namespace App\Controllers\Admin\Transaksi;

use App\Controllers\BaseController;
use App\Models\Penjualan;
use App\Models\Produk;

class PenjualanController extends BaseController
{
    public function index()
    {
        $model = new Produk();
        $data['produk'] = $model->findAll();
        $data['title'] = 'Penjualan';


        echo view('_partials_admin/header.php', $data);
        echo view('_partials_admin/sidebar.php');
        echo view('admin/transaksi/penjualan/penjualan', $data);
        echo view('admin/transaksi/penjualan/_partials_transaksi/footer.php');
    }

//     public function add_product()
//     {
//         $data['title'] = 'Tambah Produk';

//         echo view('_partials_admin/header.php', $data);
//         echo view('_partials_admin/sidebar.php');
//         echo view('admin/master/produk/add_produk');
//         echo view('admin/master/produk/_partials_produk/footer.php');
//     }

// public function edit_product($id)
// {
//     $data['title'] = 'Edit Produk';

//     // Buat instance model Produk
//     $model = new Produk();

//     // Ambil data produk dari database berdasarkan ID
//     $data['produk'] = $model->find($id);

//     if (!$data['produk']) {
//         // Produk tidak ditemukan, atur pesan kesalahan atau tindakan yang sesuai
//         // Misalnya, Anda dapat mengarahkan pengguna kembali ke daftar produk
//         return redirect()->to(base_url('admin/master/produk/produk'))->with('error', 'Produk tidak ditemukan.');
//     }

//     echo view('_partials_admin/header.php', $data);
//     echo view('_partials_admin/sidebar.php');
//     echo view('admin/master/produk/edit_produk', $data);
//     echo view('admin/master/produk/_partials_produk/footer.php');
// }

// public function detail_product($id)
// {
//     $data['title'] = 'detail Produk';

//     // Buat instance model Produk
//     $model = new Produk();

//     // Ambil data produk dari database berdasarkan ID
//     $data['produk'] = $model->find($id);

//     if (!$data['produk']) {
//         // Produk tidak ditemukan, atur pesan kesalahan atau tindakan yang sesuai
//         // Misalnya, Anda dapat mengarahkan pengguna kembali ke daftar produk
//         return redirect()->to(base_url('admin/master/produk/produk'))->with('error', 'Produk tidak ditemukan.');
//     }

//     echo view('_partials_admin/header.php', $data);
//     echo view('_partials_admin/sidebar.php');
//     echo view('admin/master/produk/detail_produk', $data);
//     echo view('admin/master/produk/_partials_produk/footer.php');
// }


//     public function create()
//     {
//         $data['title'] = 'Tambah Produk';
//         $model = new Produk();
        
//         if ($this->request->getMethod() === 'post') {
//             // Validasi input
//             $validationRules = [
//                 'nama' => 'required',
//                 'merk' => 'required',
//                 'jenis' => 'required',
//                 'qty' => 'required|numeric',
//                 'supplier' => 'required',
//                 'gambar' => 'uploaded[gambar]|max_size[gambar,4096]|is_image[gambar]',
//             ];
            
//             if ($this->validate($validationRules)) {
//                 $gambar = $this->request->getFile('gambar');
                
//                 if ($gambar->isValid() && !$gambar->hasMoved()) {
//                     // Tentukan direktori tujuan untuk menyimpan gambar
//                     $gambar->move(ROOTPATH . 'public/uploads/produk');
                    
//                     // Simpan nama file gambar ke dalam database
//                     $gambarName = $gambar->getName();
//                 }
                
//                 // Siapkan data untuk disimpan ke database
//                 $dataToAdd = [
//                     'nama' => $this->request->getPost('nama'),
//                     'merk' => $this->request->getPost('merk'),
//                     'jenis' => $this->request->getPost('jenis'),
//                     'qty' => $this->request->getPost('qty'),
//                     'supplier' => $this->request->getPost('supplier'),
//                     'gambar' => $gambarName, // Simpan nama file gambar
//                 ];
                
//                 // Simpan data ke tabel 'produk'
//                 $model->insert($dataToAdd);
                
//                 // Redirect ke halaman daftar produk atau halaman lain yang sesuai
//                 return redirect()->to(base_url('admin/master/produk/produk'))->with('success', 'Produk berhasil ditambahkan');
//             }
//         }
        
//         // Tampilkan view dengan data
//         echo view('_partials_admin/header.php', $data);
//         echo view('_partials_admin/sidebar.php');
//         echo view('admin/master/produk/add_produk', $data); // Buat halaman create produk
//         echo view('admin/master/produk/_partials_produk/footer.php');
//     }

//     public function update($id)
//     {
//         $data['title'] = 'Edit Produk';
//         $model = new Produk();
        
//         // Ambil data produk yang akan diupdate
//         $produk = $model->find($id);
        
//         if (!$produk) {
//             return redirect()->to(base_url('admin/master/produk/produk'))->with('error', 'Produk tidak ditemukan');
//         }
        
//         if ($this->request->getMethod() === 'post') {
//             // Validasi input
//             $validationRules = [
//                 'nama' => 'required',
//                 'merk' => 'required',
//                 'jenis' => 'required',
//                 'qty' => 'required|numeric',
//                 'supplier' => 'required',
//             ];
            
//             // Jika ada gambar yang diupload, tambahkan validasi untuk gambar
//             if ($gambar = $this->request->getFile('gambar')) {
//                 $validationRules['gambar'] = 'uploaded[gambar]|max_size[gambar,4096]|is_image[gambar]';
//             }
            
//             if ($this->validate($validationRules)) {
//                 if ($gambar && $gambar->isValid() && !$gambar->hasMoved()) {
//                     // Tentukan direktori tujuan untuk menyimpan gambar
//                     $gambar->move(ROOTPATH . 'public/uploads/produk');
                    
//                     // Simpan nama file gambar ke dalam database
//                     $gambarName = $gambar->getName();
//                     $produk['gambar'] = $gambarName; // Update nama file gambar
//                 }
                
//                 // Update data produk
//                 $produk['nama'] = $this->request->getPost('nama');
//                 $produk['merk'] = $this->request->getPost('merk');
//                 $produk['jenis'] = $this->request->getPost('jenis');
//                 $produk['qty'] = $this->request->getPost('qty');
//                 $produk['supplier'] = $this->request->getPost('supplier');
                
//                 $model->update($id, $produk);
                
//                 // Redirect ke halaman daftar produk atau halaman lain yang sesuai
//                 return redirect()->to(base_url('admin/master/produk/produk'))->with('success', 'Produk berhasil diupdate');
//             }
//         }
        
//         // Tampilkan view dengan data produk yang akan diupdate
//         $data['produk'] = $produk;
//         echo view('_partials_admin/header.php', $data);
//         echo view('_partials_admin/sidebar.php');
//         echo view('admin/master/produk/edit_produk', $data); // Buat halaman update produk
//         echo view('admin/master/produk/_partials_produk/footer.php');
//     }
    
    
}
