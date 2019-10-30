<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Currencies extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'currency_symbol' => array(
                                'type' => 'VARCHAR',
                                'constraint' => 30 
                        ),
                        'currency_name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => 30
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
                $this->dbforge->create_table('currencies');
        }

        public function down() 
        {
                $this->dbforge->drop_table('currencies');
        }
}