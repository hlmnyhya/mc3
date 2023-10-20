<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePelanggan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'tanggal' => [ // Kolom untuk tanggal
                'type' => 'VARCHAR',
                'constraint' => '15',
            ],
            'jam' => [ // Kolom untuk jam
                'type' => 'TIME',
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'telp' => [
                'type' => 'VARCHAR',
                'constraint' => '15', // Ukuran maksimal nomor telepon
            ],
            'status' => [
                'type' => 'ENUM("DITERIMA","DIPROSES","SELESAI", "BELUM SELESAI", "DIKEMBALIKAN")',
            ],
            'alamat' => [
                'type' => 'TEXT', // Menggunakan TEXT untuk kolom alamat yang lebih panjang
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('pelanggan');
    }

    public function down()
    {
        $this->forge->dropTable('pelanggan');
    }
}
