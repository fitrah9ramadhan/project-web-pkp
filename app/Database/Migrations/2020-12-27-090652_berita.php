<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Berita extends Migration
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
                        'sampul'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => 255,
                        ],
                        'judul_berita' => [
                                'type'           => 'TEXT',
                                'constraint'     => 100
                        ],
                        'penulis_berita' => [
                        	'type' => 'TEXT',
                        	'constraint'  => 1000,
                        ],
                        'isi_berita' => [
                                'type'           => 'TEXT',
                                'constraint'     => 5000
                        ],
                        'tanggal_berita' => [
                                'type'           => 'DATETIME',
                                'null'     => true
                        ]
                ]);
                $this->forge->addKey('id', true);
                $this->forge->createTable('berita');
        }

        public function down()
        {
                $this->forge->dropTable('berita');
        }
}
