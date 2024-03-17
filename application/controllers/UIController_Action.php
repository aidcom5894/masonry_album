<?php 

defined('BASEPATH') OR exit ('No Direct Script access allowed');

/**
 * 
 */
class UIController_Action extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function contactme()
	{
		$this->load->view('connect_with_me');
	}

	public function loadPicUpload()
	{
		$this->load->view('uploadfiles');
	}

}


?>