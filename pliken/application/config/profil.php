<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	function __construct(){
		parent::__construct();
	}
	public function profildesa()
	{
		$this->load->view('profil');
	}
}
