<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RankingGuildModel extends CI_Model{
	/*
	 * @Documentation
	 * Atributo: $limite-> limite de itens por Pagina
	 * Atributo: $offset-> numero da pagina que vai ter uma quantidade 
	 * */
	public function buscaDados() {
		/*if($maximo){
			$this->db->limit($maximo, $inicio);
		}*/
		$this->db->select("GuildNo,GuildName,Level,Point,GuildMaster,ExpRank,cabal_character_table.CharacterIdx,cabal_character_table.LEV,cabal_character_table.Style");
		$this->db->from("Guild");
		$this->db->join("cabal_character_table","cabal_character_table.Name = Guild.GuildMaster");
		$this->db->order_by("ExpRank","DESC");
		$resultado = $this->db->get();
		
		
		if ($resultado->num_rows() > 0) {
			return $resultado->result();
		} else {
			return null;
		}
		
		//echo '<pre>';
		//var_dump($resultado);
	}
	
	public function buscaQntdGuild($guildNo){
		$this->db->select("COUNT(GuildMember.GuildNo)");
		$this->db->from("GuildMember");
		$this->db->where("GuildNo",$guildNo);
		$resultado = $this->db->get();
		if($resultado->num_rows > 0){
			return $resultado->result();
		}else{
			return null;
		}
	}
	
	function CountAll() {
		return $this->db->count_all_results("Guild");
	}
	
}