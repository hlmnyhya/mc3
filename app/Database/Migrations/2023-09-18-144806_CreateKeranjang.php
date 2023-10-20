<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateKeranjang extends Migration
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
                   'pelanggan_id' => [
    'type' => 'INT',
    'constraint' => 5,
    'unsigned' => true,
],
                  'produk_id' => [
    'type' => 'INT',
    'constraint' => 5,
    'unsigned' => true,
],
            'jumlah' => [
                'type' => 'INT',
                'constraint' => 5,
            ],
        ]);
        $this->forge->addKey('id', true);
        // $this->forge->addForeignKey('pelanggan_id', 'pelanggan', 'id');
        // $this->forge->addForeignKey('produk_id', 'produk', 'id');
        $this->forge->createTable('keranjang');
    }

    public function down()
    {
        $this->forge->dropTable('keranjang');
    }
}
