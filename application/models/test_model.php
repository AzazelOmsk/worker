<?php
class user_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

		public function get_users()
		{
	
                $query = $this->db->get('news');
                return $query->result_array();
        }

	  

		
		
       public function set_users()
{
    
    $data = array(
        'name' => $this->input->post('name'),
        'type' => $this->input->post('type'),
        'winner' => $this->input->post('winner')
    );

    return $this->db->insert('users', $data);
}
	   
	   
}	
		

