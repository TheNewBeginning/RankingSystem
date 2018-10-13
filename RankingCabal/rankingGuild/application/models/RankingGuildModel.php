<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RankingGuildModel extends CI_Model{
	public function buscaDados() {
		$this->db->select("GuildName,Level,Point,GuildMaster,ExpRank,cabal_character_table.CharacterIdx,cabal_character_table.LEV,cabal_character_table.Style");
		$this->db->from("Guild");
		$this->db->join("cabal_character_table","cabal_character_table.Name = Guild.GuildMaster");
		$this->db->order_by("Point","DESC");
		$resultado = $this->db->get()->result();
		//echo '<pre>';
		//var_dump($resultado);
		return $resultado;
	}
	
	
	
}