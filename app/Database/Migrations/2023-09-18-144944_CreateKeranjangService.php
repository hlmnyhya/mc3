<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateKeranjangService extends Migration
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

            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'jumlah' => [
                'type' => 'INT',
                'constraint' => 5,
            ],
        ]);
        $this->forge->addKey('id', true);
        // $this->forge->addForeignKey('pelanggan_id', 'pelanggan', 'id');
        $this->forge->createTable('keranjang_service');
    }

    public function down()
    {
        $this->forge->dropTable('keranjang_service');
    }
}
