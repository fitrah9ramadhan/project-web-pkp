<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PetunjukLayanan extends Migration
{
        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'INT',
                                'constraint'     => 100,
                                'unsigned'       => true,
                                'auto_increment' => true,
                        ],
                        'nama_layanan'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '255',
                        ],
                        'link' => [
                                'type'           => 'VARCHAR',
                                'constraint'     => 255,
                        ],
                        'created_at' => [
                        	'type' => 'DATETIME',
                        	'null' => true,
                        ],
                        'updated_at' => [
                        	'type' => 'DATETIME',
                        	'null' => true,
                        ]
                ]);
                $this->forge->addKey('id', true);
                $this->forge->createTable('layanan_kecamatan');
        }

        public function down()
        {
                $this->forge->dropTable('layanan_kecamatan');
        }
}
