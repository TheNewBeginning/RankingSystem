<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RankingGuild extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model("RankingGuildModel","guild");
		$this->load->helper('url');
	}

	public function index () {
		$dados['ranking'] = $this->guild->buscaDados();
		$titulo['titulo'] = 'Cabal Private';
		$this->load->view("template/head",$titulo);
		$this->load->view("rankingGuildView/RankingGuildView",$dados);
		$this->load->view("template/footer");
	}


	public function top3 () {
		//$dados['top3'] = $this->guild->buscaCharacterTop3();
		$titulo['titulo'] = 'Cabal Private - Top3';
		$this->load->view("template/head", $titulo);
		$this->load->view("rankingGuildView/Top3", $titulo);
		$this->load->view("template/footerSemPagina");
		
	}
	
	public function Titulos () {
		
		$titulo['titulo'] = 'Cabal Private - Top3';
		$this->load->view("template/head", $titulo);
		$this->load->view("rankingGuildView/Titulos", $titulo);
		$this->load->view("template/footerSemPagina");
		
	}
	
	public function Honra () {
		$dados['honra'] = $this->guild->buscaCharacterHonor();
		$titulo['titulo'] = 'Cabal Private - Honra';
		$this->load->view("template/head", $titulo);
		$this->load->view("rankingGuildView/Honra", $dados);
		$this->load->view("template/footerSemPagina");
	}
	
	public function PVP () {
		
		$titulo['titulo'] = 'Cabal Private - Top3';
		$this->load->view("template/head", $titulo);
		$this->load->view("rankingGuildView/PVP", $titulo);
		$this->load->view("template/footerSemPagina");
		
	}
	
	public function MissionWar () {
		
		$titulo['titulo'] = 'Cabal Private - Top3';
		$this->load->view("template/head", $titulo);
		$this->load->view("rankingGuildView/MissionWar", $titulo);
		$this->load->view("template/footerSemPagina");
		
	}

	public function CharacterRanking () {
		$dados['Character'] = $this->guild->searchCharacterTOP50();
		$titulo['titulo'] = 'Cabal Private - Character Ranking';
		$this->load->view("template/head", $titulo);
		$this->load->view("rankingGuildView/Character/CharacterRanking", $dados);
		$this->load->view("template/footerSemPagina");
		
	}
	/*
	public function index () {
		
		$this->load->library('pagination');
		
		$titulo['titulo'] = 'Cabal Private';
		
		/*
		$config = array(
						"base_url" => base_url('usuarios/p'),
						"per_page" => 3,
						"num_links" => 3,
						"uri_segment" => 3,
						"total_rows" => $this->guild->CountAll(),
						"full_tag_open" => "<span class ='num'><ul class='pagination' id='ajaxPagination'>",
						"full_tag_close" => "</ul></span>",
						"first_link" => FALSE,
						"last_link" => FALSE,
						"first_tag_open" => "<li>",
						"first_tag_close" => "</li>",
						"prev_link" => "Anterior",
						"prev_tag_open" => "<li class='prev'>",
						"prev_tag_close" => "</li>",
						"next_link" => "Próxima",
						"next_tag_open" => "<li class='next'>",
						"next_tag_close" => "</li>",
						"last_tag_open" => "<li>",
						"last_tag_close" => "</li>",
						"cur_tag_open" => "<li class='active'><a href='#'>",
						"cur_tag_close" => "</a></li>",
						"num_tag_open" => "<li>",
						"num_tag_close" => "</li>"
		);
		
		$this->pagination->initialize($config);
		
		$dados['pagination'] = $this->pagination->create_links();
		
		$offset = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		
		$dados['guild'] = $this->guild->buscaDados($config['per_page'],$offset);
		
		$this->load->view("template/head", $titulo);
		
		//if (!$this->input->is_ajax_request()) {
			
			$this->load->view("rankingGuildView/RankingGuildView", $dados);
		//}else{
			$this->load->view('rankingGuildView/RankingGuildViewPagination', $dados);
			
		//}

		//$this->load->view("rankingGuildView/RankingGuildView", $dados);	
		$this->load->view("template/footer");
		
	}*/	
}