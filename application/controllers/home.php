<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
	
	public function index($type = null) {
		if (isset($_GET['code']))
		{
			$response = $this->facebook_ion_auth->login();
			if (!$response)
			{
			   header('Location:'.base_url().'auth/?alert=facebooklogin');
			   exit();
			}
			header('Location:'.base_url().'auth/');
		}
	}

}
