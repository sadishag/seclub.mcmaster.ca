<?php
class Cusec_model extends CI_Model
	{
		public function __construct ()
		{
			$this->load->database();
		}
        
     	
        public function getQandA()
		{
				$query = $this->db->query('SELECT * FROM quesAns');
				return $query->result_array();
		}
           
     }
		
		
		?>