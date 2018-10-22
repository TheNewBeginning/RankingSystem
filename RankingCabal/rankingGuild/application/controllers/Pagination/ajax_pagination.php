<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ajax_pagination extends CI_Controller {
	
	function index()
	{
		$this->load->view("ajax_pagination");
	}
}