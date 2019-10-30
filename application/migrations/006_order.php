<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Order extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'currency_id' => array(
                                'type' => 'INT',
                                'constraint' => 11 
                        ),
                        'amount' => array(
                                'type' => 'BIGINT'
                        ),
                        'method' => array(
                                'type' => 'varchar',
                                'constraint' => 20
                        ),
                        'amount' => array(
                                'type' => 'BIGINT'
                        ),
                        'user_id' => array(
                                'type' => 'INT',
                                'constraint' => 11
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
                $this->dbforge->create_table('order');
        }

        public function down() 
        {
                $this->dbforge->drop_table('order');
        }
}