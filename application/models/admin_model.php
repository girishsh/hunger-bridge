<?php
class Admin_model extends CI_Model {

     public function __construct() {
        parent::__construct();
        $this->load->database();
    }

	public function validate() {
		//$this->load->helper('url');
		$data['username']=$this->input->post('username');
		$data['password']=md5($this->input->post('password')); //converts password into sha1
		//log_message('info', var_dump($data));
		$query = $this->db->query('select * from admin where username = ? and password = ?', $data);
		if ($query->num_rows() == 1) {
			foreach ($query->result() as $row) {
				$admindata['id'] = $row->id;
				$admindata['name'] = $row->username;
			}
			//log_message('info', var_dump($admindata));
			return $admindata;
		} else {
			return false;
		}
	}
}

// EOF ../application/controllers/login_model.php
