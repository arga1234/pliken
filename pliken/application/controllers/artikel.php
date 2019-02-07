<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	function __construct(){
		parent::__construct();

	}

	public function artikellkp(){
			$this->load->view('artikellengkap');
	}

	public function form(){
			$this->load->view('formulir');
	}

}
