<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Email extends Migration
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
			'Email'       => [
					'type'           => 'TEXT',
					'constraint'     => '30',
			],
            'Codigo'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '30',
        ],
	
	]);
	$this->forge->addKey('ID', TRUE);
	$this->forge->createTable('Email');
    }

    public function down()
    {
       $this->forge->dropTable('Email');
    }
}
