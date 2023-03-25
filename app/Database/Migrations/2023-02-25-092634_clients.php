<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Clients extends Migration
{
    public function up()
    {

        // Uncomment below if want config
        $this->forge->addField([
            'id'                  => [
                'type'           => 'INT',
                'unsigned'       => TRUE,
                'auto_increment' => TRUE
            ],
            'name'               => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'lastname'               => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'phone'               => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'email'               => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'created_at'               => [
                'type'           => 'TIMESTAMP',
            ],
            'updated_at'               => [
                'type'           => 'TIMESTAMP',
                'null'     => true,
            ],
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('clients');
    }

    public function down()
    {
        $this->forge->dropTable('clients');
    }
}
