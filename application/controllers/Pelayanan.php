<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelayanan extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function menu(){
			$this->load->view('menulayanan');
	}


		public function cetak(){
				$this->load->view('formulir');
		}




}
