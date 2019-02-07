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

/*--- Surak Keteragan ---*/
/*--- Surak Keteragan ---*/
/*--- Surak Keteragan ---*/

/*--- UMUM ---*/
	public function sku(){
			$this->load->view('surat_ket/sku/sku');
	}

	public function update_sku(){
			$this->load->view('surat_ket/sku/update');
	}

	public function update_sku_sukses(){
		$this->load->view('surat_ket/sku/sukses');
	}
	public function print_sku(){
		$this->load->view('surat_ket/sku/print');
	}

	/*--- Tidak Mampu ---*/
		public function sktm(){
				$this->load->view('surat_ket/sktm/sktm');
		}

		public function update_sktm(){
				$this->load->view('surat_ket/sktm/update');
		}

		public function update_sktm_sukses(){
			$this->load->view('surat_ket/sktm/sukses');
		}
		public function print_sktm(){
			$this->load->view('surat_ket/sktm/print');
		}

		/*--- SK Usaha  ---*/
			public function skusaha(){
					$this->load->view('surat_ket/skusaha/skusaha');
			}

			public function update_skusaha(){
					$this->load->view('surat_ket/skusaha/update');
			}

			public function update_skusaha_sukses(){
				$this->load->view('surat_ket/skusaha/sukses');
			}
			public function print_skusaha(){
				$this->load->view('surat_ket/skusaha/print');
			}

			/*---SK Domisili Usaha ---*/
				public function skdu(){
						$this->load->view('surat_ket/skdu/skdu');
				}

				public function update_skdu(){
						$this->load->view('surat_ket/skdu/update');
				}

				public function update_skdu_sukses(){
					$this->load->view('surat_ket/skdu/sukses');
				}
				public function print_skdu(){
					$this->load->view('surat_ket/skdu/print');
				}

				/*--- Surat Keterangan Domisili Tempat Tinggal ---*/
					public function skdtt(){
							$this->load->view('surat_ket/skdtt/skdtt');
					}

					public function update_skdtt(){
							$this->load->view('surat_ket/skdtt/update');
					}

					public function update_skdtt_sukses(){
						$this->load->view('surat_ket/skdtt/sukses');
					}

					public function print_skdtt(){
						$this->load->view('surat_ket/skdtt/print');
					}

					/*--- Surat Pengantar Umum ---*/
						public function spu(){
								$this->load->view('surat_pengantar/spu/spu');
						}

						public function update_spu(){
								$this->load->view('surat_pengantar/spu/update');
						}

						public function update_spu_sukses(){
							$this->load->view('surat_pengantar/spu/sukses');
						}

						public function print_spu(){
							$this->load->view('surat_pengantar/spu/print');
						}

						/*--- Surat Pengantar Catatan Kepolisian ---*/
							public function skck(){
									$this->load->view('surat_pengantar/skck/skck');
							}

							public function update_skck(){
									$this->load->view('surat_pengantar/skck/update');
							}

							public function update_skck_sukses(){
								$this->load->view('surat_pengantar/skck/sukses');
							}

							public function print_skck(){
								$this->load->view('surat_pengantar/skck/print');
							}

							/*--- Surat Pengantar izin Keramaian ---*/
								public function spk(){
										$this->load->view('surat_pengantar/spk/spk');
								}

								public function update_spk(){
										$this->load->view('surat_pengantar/spk/update');
								}

								public function update_spk_sukses(){
									$this->load->view('surat_pengantar/spk/sukses');
								}

								public function print_spk(){
									$this->load->view('surat_pengantar/spk/print');
								}

								/*--- Surat Pernyataan Umum ---*/
									public function spu_pernyataan(){
											$this->load->view('surat_pernyataan/spu/spu');
									}

									public function update_spu_pernyataan(){
											$this->load->view('surat_pernyataan/spu/update');
									}

									public function update_spu_pernyataan_sukses(){
										$this->load->view('surat_pernyataan/spu/sukses');
									}

									public function print_spu_pernyataan(){
										$this->load->view('surat_pernyataan/spu/print');
									}
}
