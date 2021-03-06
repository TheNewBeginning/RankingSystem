<?php
require_once 'Menu.class.php';
$teste = new Menu();
?>

<!DOCTYPE html>
<html lang="pt">
<head>
	<style type="text/css">
	@charset "UTF-8";

	[
	ng\:cloak
	]
	,
	[
	ng-cloak
	]
	,
	[
	data-ng-cloak
	]
	,
	[
	x-ng-cloak
	]
	,
	.ng-cloak
	,
	.x-ng-cloak
	,
	.ng-hide


	:not



	(
		.ng-hide-animate



		){
		display


		:



		none



		!
		important


		;
	}
	ng\:form {
		display: block;
	}

	.ng-animate-shim {
		visibility: hidden;
	}

	.ng-anchor {
		position: absolute;
	}
</style>

<meta charset="UTF-8">
<meta http-equiv="X-UA-compatible" content="IE=edge">
<title><?php echo $titulo;?></title>
<link rel="stylesheet" href="<?=base_url('assets/resources/css/ranking.css')?>">
<link rel="icon" href="http://image.cabal.co.kr/favicon/favicon.ico"
type="image/x-icon">
<script
src="<?=base_url('assets/resources/js/ranking/jquery-1.9.1.min.js')?>"></script>
<script
src="<?=base_url('assets/resources/js/ranking/jquery.mCustomScrollbar.min.js')?>"></script>
<script
src="http://image.cabal.co.kr/cabal/js/jquery-mousewheel.3.1.12.min.js"></script>
<script src="<?=base_url('assets/resources/js/ranking.js')?>"></script>
<script src="<?=base_url('assets/resources/js/ranking/glb.init.js')?>"></script>

<script
src="<?=base_url('assets/resources/js/lib/angular/angular.js')?>"></script>
<script
src="<?=base_url('assets/resources/js/lib/angular-route/angular-route.js')?>"></script>
<script
src="<?=base_url('assets/resources/js/lib/angular-cookies/angular-cookies.js')?>"></script>
<script src="<?=base_url('assets/resources/js/ranking/d3.min.js')?>"></script>
<script src="<?=base_url('assets/resources/js/ranking/missionChart.js')?>"></script>

<script src="<?=base_url('assets/js/app.js')?>"></script>
<script src="<?=base_url('assets/js/service.js')?>"></script>
<script src="<?=base_url('assets/js/controller.js')?>"></script>
<script src="<?=base_url('assets/js/directive.js')?>"></script>

<script src="<?=base_url('assets/initial/js/locale.js')?>"></script>
<script src="<?=base_url('assets/initial/js/service.js')?>"></script>
<script src="<?=base_url('assets/initial/js/constant.js')?>"></script>
<script src="<?=base_url('assets/initial/js/directive.js')?>"></script>
<script src="<?=base_url('assets/initial/js/controller.js')?>"></script>


<!-- IE10 viewport hack para Surface/desktop Windows 8 -->
<script
src="<?=base_url('assets/js/plugins/ie10-viewport-bug-workaround.js')?>"></script>

<!-- jQuery -->
<script src="<?=base_url('assets/js/jquery/1.12.2.min.js')?>"></script>

<!-- Bootstrap -->
<script src="<?=base_url('assets/js/bootstrap/bootstrap.min.js')?>"></script>

<!-- Script -->
<script src="<?=base_url('assets/js/scripts.js')?>"></script>

<!--<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script type="text/javascript" src="<?=base_url('assets/js/menu.js')?>"></script> -->

</head>
<body>
	<a href="#content" class="skip">Skip To Main Contents</a>
	<div class="wrap sub leaderboard top100">
		<!--header-->
		<div class="section header">
			<div class="header_content">
				<div class="container">
					<h1>
						<a href="<?php echo base_url(); ?>">
							<span class="blind">CABAL</span>
						</a>
					</h1>
					<div class="menu_wrap">
						<h2 class="blind">Menu</h2>
						<ul class="gnb" id="test">
							<li class="link hover">
								<a href="<?php echo base_url(); ?>" class="depth1 ng-binding">Inicio</a>
							</li>
							<li class="link">
								<a href="<?php echo base_url('CharacterRanking')?>" class="depth1 ng-binding" name="menuCharacter">Character Ranking</a>

							</li>
							<li class="link"><a href="/guildRank" class="depth1">?? ??</a>
								<div class="depth2">
									<div>
										<ul>
											<li class="d2_gsc">
												<a href="/guildRank/#/score"><span class="mcon"></span>
													<span class="text ">?? ??</span>
												</a>
											</li>
											<li class="d2_wex">
												<a href="/guildRank/#/wexp"><span class="mcon"></span>
													<span class="text">WEXP</span>
												</a>
											</li>
											<li class="d2_ach">
												<a href="/guildRank/#/achievement">
													<span class="mcon"></span>
													<span class="text">??</span>
												</a>
											</li>
											<li class="d2_hp">
												<a href="/guildRank/#/honor"><span class="mcon"></span>
													<span class="text">?? ??</span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</li>
							<li class="sch">
								<a href="javascript:return false;" class="depth1">??</a>
								<div class="depth2">
									<div class="search_con">
										<!-- ngIf: getNationCode() != 'jp' -->
										<div class="search_input sch_char">
											<div class="input_search">
												<label for="searchChar">??? ??</label>
												<form>
													<input type="text" autocomplete="off" class="search_text"
													id="searchChar" value=""> <input type="submit"
													class="search_btn" value="search">
												</form>
											</div>
										</div>
										<!-- end ngIf: getNationCode() != 'jp' -->
										<div class="search_input sch_guild">
											<div class="input_search">
												<label for="searchGuild">?? ??</label>
												<form>
													<input type="text" autocomplete="off" class="search_text"
													id="searchGuild" value=""> <input type="submit"
													class="search_btn" value="search">
												</form>
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
						<div class="lang">
							<div class="select swhite">
								<a href="" class="default depth1"><span>??</span></a>
								<div class="option">
									<ul>
										<li>
											<span>EU</span>
											<ul>
												<li><a href="">English</a></li>
												<li><a href="">Deutsch</a></li>
												<li><a href="">T�rk�e</a></li>
											</ul>
										</li>
										<li><span>NA</span>
											<ul>
												<li><a href="">English</a></li>
												<li><a href="">Espa�ol</a></li>
											</ul>
										</li>
										<li>
											<span>KR</span>
											<ul>
												<li><a href="">English</a></li>
												<li><a href="">???</a></li>
											</ul>
										</li>
										<li>
											<a href="">Brazil</a>
										</li>
										<li>
											<a href="">??</a>
										</li>
										<li>
											<a href="">??</a>
										</li>

										<li>
											<a href="">??</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--content-->
		<!-- ngView:  -->
		<div class="section content ng-scope" id="content" ng-view="">
			<div class="container ng-scope">
				<h2 class="blind">Leader Board</h2>
				<div class="content_wrap">
					<!--<script type="text/javascript">
						$(function(){
							$('div ul li.d2_gsc').click(function(){
								$('li').removeClass('d2_gsc');
								$(this).addClass('d2_gsc on');
							});
						});
					</script>-->