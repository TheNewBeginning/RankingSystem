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
		$titulo['titulo'] = 'Cabal Private';
		$this->load->view("template/head",$titulo);
		$this->load->view("rankingGuildView/RankingGuildView",$dados);
		$this->load->view("template/footer");
		
	}
	
	public function top3 () {
		$titulo['titulo'] = 'Cabal Private - Top3';
		$this->load->view("template/head",$titulo);
		$this->load->view("rankingGuildView/Top3",$titulo);
		$this->load->view("template/footerSemPagina");
		
	}
	
	public function Titulos () {
		$titulo['titulo'] = 'Cabal Private - Top3';
		$this->load->view("template/head",$titulo);
		$this->load->view("rankingGuildView/Titulos",$titulo);
		$this->load->view("template/footerSemPagina");
		
	}
	
	public function Honra () {
		$titulo['titulo'] = 'Cabal Private - Top3';
		$this->load->view("template/head",$titulo);
		$this->load->view("rankingGuildView/Honra",$titulo);
		$this->load->view("template/footerSemPagina");
		
	}
	
	public function PVP () {
		$titulo['titulo'] = 'Cabal Private - Top3';
		$this->load->view("template/head",$titulo);
		$this->load->view("rankingGuildView/PVP",$titulo);
		$this->load->view("template/footerSemPagina");
		
	}
	
	public function MissionWar () {
		$titulo['titulo'] = 'Cabal Private - Top3';
		$this->load->view("template/head",$titulo);
		$this->load->view("rankingGuildView/MissionWar",$titulo);
		$this->load->view("template/footerSemPagina");
		
	}
}