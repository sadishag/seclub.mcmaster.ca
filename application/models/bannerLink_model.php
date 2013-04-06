<?php
class BannerLink_model extends CI_Model
	{
		public function __construct ()
		{
			$this->load->database();
		}
        
     	
        public function getBannerLink()
		{
				$query = $this->db->query('SELECT * FROM bannerlink ORDER BY id DESC limit 1');
				return $query->result_array();
		}
           
     }
		
		
		?>