<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        		$this->forge->addField([
			'ID'          => [
					'type'           => 'INT',
					'constraint'     => 11,
					'unsigned'       => TRUE,
					'auto_increment' => TRUE
			],
			'usuario'       => [
					'type'           => 'TEXT',
					'constraint'     => '30',
			],
            'password'       => [
                'type'           => 'TEXT',
                'constraint'     => '30',
            ],
            'firstName'       => [
                'type'           => 'TEXT',
                'constraint'     => '30',
            ],
            'lastName'       => [
                'type'           => 'TEXT',
                'constraint'     => '30',
            ],
            'ID_ROL'       => [
                'type'           => 'INT',
                'constraint'     => '11',
        ],
        'email'       => [
            'type'           => 'TEXT',
            'constraint'     => '30',
        ],
        'nombreimg'       => [
            'type'           => 'TEXT',
            'constraint'     => '30',
        ],
        'profilepicture'       => [
            'type'           => 'LONGBLOB',
            'constraint'     => '30',
    ],

	]);
	$this->forge->addKey('ID', TRUE);
	$this->forge->createTable('users');
    }

    public function down()
    {
       $this->forge->dropTable('users');
    }
}
