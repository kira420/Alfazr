<?php
class Migration_Create_room_backup extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
            ),
            'room_type' => array(
                'type' => 'VARCHAR',
                'constraint' => '100'
            ),
            'about' => array(
                'type' => 'TEXT'
            ),
            'per_night_price' => array(
				'type' => 'DECIMAL',
				'constraint' => '11,5',
				'unsigned' => TRUE
            ),
            'offer_agent' => array(
                'type' => 'DECIMAL',
                'constraint' => '11,5'
            ),
            'offer_local_cus' => array(
                'type' => 'DECIMAL',
                'constraint' => '11,5'
            ),
            'available_rooms' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE
			),
            'hotel_id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE
            ),
            'created_date_time' => array(
                'type' => 'timestamp not null default current_timestamp'
            )
		));
        $this->dbforge->add_key('id');
        $this->dbforge->add_field('CONSTRAINT FOREIGN KEY (hotel_id) REFERENCES backup_hotels(id) ON DELETE CASCADE ON UPDATE CASCADE');
		$this->dbforge->create_table('backup_rooms');
	}

	public function down()
	{
		$this->dbforge->drop_table('backup_rooms');
	}
}