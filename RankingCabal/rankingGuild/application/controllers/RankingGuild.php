<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RankingGuild extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model("RankingGuildModel","guild");
		$this->load->helper('url');
		
	}
	public function index () {
		$dados['guild'] = $this->guild->buscaDados();
		
		$this->load->view("template/head");
		$this->load->view("rankingGuildView/RankingGuildView",$dados);
		$this->load->view("template/footer");
		
	}
	
}