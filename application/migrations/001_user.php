<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_User extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'email' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '50',
                        ),
                        'password' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                                'null' => TRUE
                        ),
                        'fname' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '30',
                                'null' => TRUE
                        ),
                        'country' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '15',
                                'null' => TRUE
                        ),
                        'mobile' => array(  
                                'type' => 'VARCHAR',
                                'constraint' => '20',
                                'null' => TRUE
                        ),
                        'token' => array(  
                                'type' => 'VARCHAR',
                                'constraint' => '50',
                                'null' => TRUE
                        ),
                        'role' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '20',
                                'null' => FALSE
                        ),
                        'created' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '20'
                        ),
                        'updated' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '20'
                        ),
                        'status' => array(
                                'type' => 'INT',
                                'constraint' => '15'
                        ),
                ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('user');
        }

        public function down()
        {
                $this->dbforge->drop_table('user');
        }
}