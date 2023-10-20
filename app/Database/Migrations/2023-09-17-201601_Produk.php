<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProdukTable extends Migration
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
            'merk' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'jenis' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'qty' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'harga' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'supplier' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'gambar' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('produk');
    }

    public function down()
    {
        $this->forge->dropTable('produk');
    }
}
