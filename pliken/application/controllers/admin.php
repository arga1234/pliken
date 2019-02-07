<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index(){
			$this->load->view('index-admin');
	}

  public function tulisartikel(){
			$this->load->view('form-wysiwig');
	}


	public function input(){
			$this->load->view('inputartikel');
	}

	public function sku(){
			$this->load->view('surat_ket/sku');
	}

	public function update_sku(){
			$this->load->view('surat_ket/sku_update');
	}

	public function update_sku_sukses(){
		$this->load->view('surat_ket/sku_sukses');
	}
	public function print_sku(){
		$this->load->view('surat_ket/sku_print');
	}
}
