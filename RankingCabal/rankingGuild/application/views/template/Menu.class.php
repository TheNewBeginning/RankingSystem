<?php 
class Menu{
	private $menuEscolhido = NULL;

	function __construct($menu = NULL){
		$this->menuEscolhido = $menu;
	}

	function getMenuEscolhido(){
		return $this->menuEscolhido;
	}

	function setMenuEscolhido($menuEscolhido){
		$this->menuEscolhido = $menuEscolhido;
	}

	public function displayEcho(){
		echo $this->escolheMenu($this->menuEscolhido);
	}

	private function escolheMenu($subMenu){
		switch ($subMenu) {
			case 'menuCharacter':
			echo '<div class="depth2">
			<div>
			<ul id="test2">
			<li class="d2_ad" ng-click="call(&#39;combat&#39;);">
			<a href="/characterRank/#/combat">
			<span class="mcon"></span>
			<span class="text">Ranking Personagem</span>
			</a>
			</li>
			<li class="d2_wex" ng-click="call(&#39;wexp&#39;);">
			<a href="/characterRank/#/wexp">
			<span class="mcon"></span>
			<span class="text">WEXP</span>
			</a>
			</li>
			<li class="d2_hp" ng-click="call(&#39;wexp&#39;);">
			<a href="/characterRank/#/honor">
			<span class="mcon"></span>
			<span class="text">Pontos de Honra</span>
			</a>
			</li>
			<li class="d2_dc">
			<a href="/characterRank/#/dungeonClear">
			<spanclass="mcon"></span>
			<span class="text">?? ???</span>
			</a>
			</li>
			<li class="d2_mw">
			<a href="/characterRank/#/missionWar">
			<span class="mcon"></span>
			<span class="text">?? ??</span>
			</a>
			</li>
			</ul>
			</div>
			</div>' ;
			break;
			
			default:
				# code...
			break;
		}
	}
}
?>