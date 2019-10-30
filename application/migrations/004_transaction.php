<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Transaction extends CI_Migration {

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
                        'payment_id' => array(
                                'type' => 'INT',
                                'constraint' => 50
                        ),
                        'order_id' => array(
                                'type' => 'varchar',
                                'constraint' => 50
                        ),
                        'transaction_id' => array(
                                'type' => 'varchar',
                                'constraint' => 50
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
                $this->dbforge->create_table('transaction');
        }

        public function down() 
        {
                $this->dbforge->drop_table('transaction');
        }
}