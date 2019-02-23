<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RankingGuildModel extends CI_Model{
	/*
	 * @Documentation
	 * Atributo: $limite-> limite de itens por Pagina
	 * Atributo: $offset-> numero da pagina que vai ter uma quantidade 
	 * */

	public function buscaDados() {
		$this->db->select("GuildName,Level,Point,GuildMaster,ExpRank,cabal_character_table.CharacterIdx,cabal_character_table.LEV,cabal_character_table.Style");
		$this->db->from("Guild");
		$this->db->join("cabal_character_table","cabal_character_table.Name = Guild.GuildMaster");
		$this->db->order_by("ExpRank","DESC");
		$resultado = $this->db->get();
		if($resultado->num_rows() > 0){
			return $resultado->result();
		}else{
			return null;
		}
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
	
	public function buscaCharacterHonor(){
		$this->db->select("TOP 10 Name,LEV,Reputation,GuildName");
		$this->db->from("cabal_character_table");
		$this->db->join("Server01.dbo.GuildMember","cabal_character_table.CharacterIdx = GuildMember.CharacterIndex","left");
		$this->db->join("server01.dbo.Guild","Server01.dbo.GuildMember.GuildNo = server01.dbo.Guild.GuildNo","left");
		$this->db->order_by("Reputation","DESC");
		
		$resultado = $this->db->get();
		
		if($resultado->num_rows() > 0){
			return $resultado->result();
		}else{
			return null;
		}
	}

	public function buscaCharacterTop3(){
		$this->db->select();
		$this->db->from();
		$this->db->join();
	}

	public function searchCharacterTOP50(){
		$this->db->select("TOP 50 Name,LEV,Reputation,GuildName");
		$this->db->from("cabal_character_table");
		$this->db->join("Server01.dbo.GuildMember","cabal_character_table.CharacterIdx = GuildMember.CharacterIndex","left");
		$this->db->join("server01.dbo.Guild","Server01.dbo.GuildMember.GuildNo = server01.dbo.Guild.GuildNo","left");
		$this->db->order_by("Reputation","DESC");
		$resultado = $this->db->get();
		
		if($resultado->num_rows() > 0){
			return $resultado->result();
		}else{
			return null;
		}
	}

	public function searchMissionWarTop10(){
		$this->db->select("TOP 10 Name,LEV,Reputation,GuildName");
		$this->db->from("cabal_character_table");
		$this->db->join("Server01.dbo.GuildMember","cabal_character_table.CharacterIdx = GuildMember.CharacterIndex","left");
		$this->db->join("server01.dbo.Guild","Server01.dbo.GuildMember.GuildNo = server01.dbo.Guild.GuildNo","left");
		$this->db->order_by("Reputation","DESC");
		$resultado = $this->db->get();
		
		if($resultado->num_rows() > 0){
			return $resultado->result();
		}else{
			return null;
		}
	}
}