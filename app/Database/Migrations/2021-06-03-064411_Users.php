<?php

namespace App\Database\Migrations;
 
use CodeIgniter\Database\Migration;
 
class Users extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'email'          => [
				'type'           => 'email',
				'constraint'     => '100',
			],
			'full_name'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'username'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'password' => [
				'type'           => 'password',
				'null'       	 => '100',
			],
			'confirm_password' => [
				'type'           => 'password',
				'null'       	 => 'true'
			]
 
		]);
		$this->forge->addPrimaryKey('username', true);
		$this->forge->createTable('users');
	}
 
	//--------------------------------------------------------------------
 
	public function down()
	{
		$this->forge->dropTable('users');
	}
}