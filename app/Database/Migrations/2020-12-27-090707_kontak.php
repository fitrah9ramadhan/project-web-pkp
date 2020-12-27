<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kontak extends Migration
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
                        'telefon'       => [
                                'type'           => 'TEXT',
                                'constraint'     => 5000,
                        ],
                        'whatsapp' => [
                                'type'           => 'TEXT',
                                'constraint'     => 5000
                        ],
                        'facebook' => [
                        	'type' => 'TEXT',
                        	'constraint'  => 5000,
                        ],
                        'instagram' => [
                                'type'           => 'TEXT',
                                'constraint'     => 5000
                        ],
                        'twitter' => [
                                'type'           => 'TEXT',
                                'constraint'     => 5000
                        ]
                ]);
                $this->forge->addKey('id', true);
                $this->forge->createTable('kontak');
        }

        public function down()
        {
                $this->forge->dropTable('kontak');
        }
}
