<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Clientes extends Migration
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
			'Nombre'       => [
					'type'           => 'TEXT',
					'constraint'     => '30',
			],
            'Calle'       => [
                'type'           => 'TEXT',
                'constraint'     => '30',
        ],
        'Cruzamientos'       => [
            'type'           => 'TEXT',
            'constraint'     => '30',
    ],
	'Numero'       => [
        'type'           => 'TEXT',
        'constraint'     => '30',
    ],
    'Telefono'       => [
    'type'           => 'TEXT',
    'constraint'     => '30',
    ],
	]);
	$this->forge->addKey('ID', TRUE);
	$this->forge->createTable('Clientes');
    }

    public function down()
    {
       $this->forge->dropTable('Clientes');
    }
}
