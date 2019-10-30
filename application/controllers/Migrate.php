<?php
Class Migrate extends CI_Controller{
     
     /**
      * [index description]
      * @param  [type] $version [description]
      * @return [type]          [description]
      */
	 public function index($version)
        {
                $this->load->library('migration');

                if ( ! $this->migration->version($version))
                {
                     echo "Error" . $this->migration->error_string();
                }else{
                	echo "Migration run successfully";
                }
        }
}