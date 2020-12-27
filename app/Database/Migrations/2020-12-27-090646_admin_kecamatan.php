<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AdminKecamatan extends Migration
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
                        'nama'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => 255,
                        ],
                        'username' => [
                                'type'           => 'VARCHAR',
                                'constraint'     => 255,
                        ],
                        'password' => [
                        	'type' => 'VARCHAR',
                        	'constraint'     => 255
                        ]
                ]);
                $this->forge->addKey('id', true);
                $this->forge->createTable('admin_kecamatan');
        }
public function down()
        {
                $this->forge->dropTable('admin_kecamatan');
        }
}
