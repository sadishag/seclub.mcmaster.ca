<?php
class Upcoming_model extends CI_Model
	{
		public function __construct ()
		{
			$this->load->database();
		}
        
     	
        public function getEvents()
		{
				$query = $this->db->query('SELECT * FROM upcoming ORDER BY eventTime DESC');
				return $query->result_array();
		}
           
     }
		
		
		?>