<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Payment extends CI_Migration {

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
                        'order_id' => array(
                                'type' => 'INT',
                                'constraint' => 11
                        ),
                        'method' => array(
                                'type' => 'varchar',
                                'constraint' => 20
                        ),
                        'amount' => array(
                                'type' => 'BIGINT'
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
                $this->dbforge->create_table('payment');
        }

        public function down() 
        {
                $this->dbforge->drop_table('payment');
        }
}