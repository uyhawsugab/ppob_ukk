<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

	public function index()
	{
		 $data['konten'] = 'user/v_dashboard';
		 $this->load->view('user/template', $data);
	}

}

/* End of file dashboard.php */
