<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Produk extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'Produk 1',
                'merk' => 'Asus',
                'jenis' => 'Jenis 1',
                'qty' => 10,
                'supplier' => 'Supplier A',
                'gambar' => '',
            ],
            [
                'nama' => 'Produk 2',
                'merk' => 'Asus',
                'jenis' => 'Jenis 2',
                'qty' => 20,
                'supplier' => 'Supplier B',
                'gambar' => '',
            ],
            [
                'nama' => 'Produk 3',
                'merk' => 'Asus',
                'jenis' => 'Jenis 3',
                'qty' => 15,
                'supplier' => 'Supplier C',
                'gambar' => '',
            ],
            // Tambahkan data lainnya sesuai kebutuhan Anda
        ];

        // Insert data ke tabel 'produk'
        $this->db->table('produk')->insertBatch($data);
    }
}
