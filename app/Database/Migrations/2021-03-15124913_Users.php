<?php namespace App\Database\Migrations;

class AddUsers extends \CodeIgniter\Database\Migration {

        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'INT',
                                'constraint'     => 5,
                                'unsigned'       => TRUE,
                                'auto_increment' => TRUE
                        ],
                        'name'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '100',
                        ],
                        'password' => [
                                'type'           => 'TEXT',
                                'null'           => TRUE,
                        ],
                        'email'         => [
                            'type'           => 'VARCHAR',
                            'constraint'     => '255',
                        ],
                        'created_at'  => [
                            'type'	      => 'DATETIME',
                            'null'	      => true,
                        ],
                        'updated_at' 	=> [
                                'type'	     => 'DATETIME',
                                'null'	     => true,
                        ],
                        'deleted_at' 	=> [
                                'type'	     => 'DATETIME',
                                'null'	     => true,
                        ],
                ]);
                $this->forge->addKey('id', TRUE);
                $this->forge->createTable('users');
        }

        public function down()
        {
                $this->forge->dropTable('users');
        }
}