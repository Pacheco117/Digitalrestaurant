<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Precio extends Migration
{
    public function up()
    {
        		$this->forge->addField([
			'ID_PRECIO'          => [
					'type'           => 'INT',
					'constraint'     => 11,
					'unsigned'       => TRUE,
					'auto_increment' => TRUE
			],
			'PRECIO'       => [
					'type'           => 'TEXT',
					'constraint'     => '30',
			],
	
	]);
	$this->forge->addKey('ID_PRECIO', TRUE);
	$this->forge->createTable('PRECIO');
    }

    public function down()
    {
       $this->forge->dropTable('PRECIO');
    }
}
