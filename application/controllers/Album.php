<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Album extends CI_Controller {

	function __construct(){
		parent::__construct();

	}

	public function albumdesapliken(){
			$this->load->view('album');
	}

	public function selfiedeck(){
			$this->load->view('selfiedeck');
	}

	public function taman(){
			$this->load->view('taman');
	}

	public function sentra_gurame(){
			$this->load->view('gurame');
	}

	public function sentra_batu_bata(){
			$this->load->view('batubata');
	}

	public function sentra_tempe(){
			$this->load->view('tempe');
	}


}
