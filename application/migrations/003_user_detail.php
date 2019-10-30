<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_User_detail extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'user_id' => array(
                                'type' => 'INT',
                                'constraint' => 11
                        ),
                        'email_status' => array(
                                'type' => 'INT',
                                'constraint' => 11
                        ),
                        'kyc_status' => array(
                                'type' => 'INT',
                                'constraint' => 11
                        ),
                        'wallet' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100'
                        ),
                        'currencies' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100'
                        ),
                        'created' => array(
                                'type' => 'DATE'
                        ),
                        'updated' => array(
                                'type' => 'DATE'
                        ),
                        'status' => array(
                                'type' => 'INT',
                                'constraint' => '15'
                        )
                ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('user_detail');
        }

        public function down() 
        {
                $this->dbforge->drop_table('user_detail');
        }
}