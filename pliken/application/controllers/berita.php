<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	function __construct(){
		parent::__construct();

	}

	public function beritapliken(){
			$this->load->view('berita');
	}

}
