<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Kkn extends CI_Controller {

	function __construct(){
		parent::__construct();

	}

	public function tim2016(){
			$this->load->view('timkkn/tim2016');
	}

	public function tim2017(){
			$this->load->view('timkkn/tim2017');
	}

	public function tim2018(){
			$this->load->view('timkkn/tim2018');
	}

}
