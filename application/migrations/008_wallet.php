<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Wallet extends CI_Migration {

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
                        'currency_id' => array(
                                'type' => 'INT',
                                'constraint' => 11
                        ),
                        'amount' => array(
                                'type' => 'VARCHAR',
                                'constraint' => 50
                        ),
                        'address' => array(
                                'type' => 'VARCHAR',
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
                $this->dbforge->create_table('wallet');
        }

        public function down() 
        {
                $this->dbforge->drop_table('wallet');
        }
}