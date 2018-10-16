<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <style type="text/css">
            @charset "UTF-8"; 

            [ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak,
            .x-ng-cloak, .ng-hide:not (.ng-hide-animate ){
                display: none !important;
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
        <link rel="stylesheet" href="assets/resources/css/ranking.css">
        <link rel="icon" href="http://image.cabal.co.kr/favicon/favicon.ico"
              type="image/x-icon">
        <script src="assets/resources/js/ranking/jquery-1.9.1.min.js"></script>
        <script src="assets/resources/js/ranking/jquery.mCustomScrollbar.min.js"></script>
        <script src="http://image.cabal.co.kr/cabal/js/jquery-mousewheel.3.1.12.min.js"></script>
        <script src="assets/resources/css/ranking.css"></script>
        <script src="assets/resources/js/ranking/glb.init.js"></script>

        <script src="assets/resources/js/lib/angular/angular.js"></script>
       	<script src="assets/resources/js/lib/angular-route/angular-route.js"></script>
        <script src="assets/resources/js/lib/angular-cookies/angular-cookies.js"></script>
       	<script src="assets/resources/js/ranking/d3.min.js"></script>
        <script src="assets/resources/js/ranking/missionChart.js"></script>

        <script src="assets/js/app.js"></script>
        <script src="assets/js/service.js"></script>
        <script src="assets/js/controller.js"></script>
        <script src="assets/js/directive.js"></script>

        <script src="assets/initial/js/locale.js"></script>
        <script src="assets/initial/js/service.js"></script>
        <script src="assets/initial/js/constant.js"></script>
        <script src="assets/initial/js/directive.js"></script>
        <script src="assets/initial/js/controller.js"></script>
    </head>
    <body>
        <a href="#content" class="skip">Skip To Main Contents</a>
        <div class="wrap sub leaderboard top100">
            <!--header-->
            <div class="section header">
                <div class="header_content">
                    <div class="container">
                        <h1>
                            <a href="<?php echo base_url(); ?>"><span class="blind">CABAL</span></a>
                        </h1>
                        <div class="menu_wrap">
                            <h2 class="blind">Menu</h2>
                            <ul class="gnb">
                                <li class="link hover">
                                	<a href="<?php echo base_url(); ?>" class="depth1">Inicio</a>
                                    <div class="depth2 on">
                                        <div>
                                            <ul>
                                                <li class="d2_top100 on">
                                                	<a href="<?php echo base_url()?>" class="top100"> 
                                                		<span class="mcon"></span> 
                                                		<span class="text">GLB Top100</span>
                                                    </a>
                                               	</li>
                                                <li class="d2_top3"><a href="/leaderboard/#/top3"
                                                                       class="top100" ><span
                                                            class="mcon"></span><span class="text"> Top3</span></a></li>
                                                <!-- <li class="d2_dc"><a href="/leaderboard/#/dungeonClear" class="top100" ng-click="call('lb_dc');"><span class="mcon"></span><span class="text">{{applyLocale("Dungeon Clear")}}</span></a></li> -->
                                                <li class="d2_ach"><a href="/leaderboard/#/achievement"
                                                                      class="top100" ><span
                                                            class="mcon"></span><span class="text">??</span></a></li>
                                                <li class="d2_hp"><a href="/leaderboard/#/honor"
                                                                     class="top100" ><span
                                                            class="mcon"></span><span class="text">??
                                                            ??</span></a></li>
                                                <li class="d2_ad"><a href="/leaderboard/#/combat"
                                                                     class="top100" ><span
                                                            class="mcon"></span><span class="text">?????</span></a></li>
                                                <li class="d2_mw"><a href="/leaderboard/#/missionWar"
                                                                     class="top100" ><span
                                                            class="mcon"></span><span class="text">??
                                                            ??</span></a></li>
                                                <li class="d2_gsc"><a href="/leaderboard/#/guildScore"
                                                                      class="top100"><span
                                                            class="mcon"></span><span class="text">??
                                                            ??</span></a></li>
                                            </ul>
                                        </div>
                                    </div></li>
                                <li class="link"><a href="/characterRank"
                                                    class="depth1">??? ??</a>
                                    <div class="depth2">
                                        <div>
                                            <ul>
                                                <li class="d2_ad"><a href="/characterRank/#/combat" ><span class="mcon"></span><span
                                                            class="text">?????</span></a></li>
                                                <li class="d2_wex"><a href="/characterRank/#/wexp"
                                                                     ><span class="mcon"></span><span
                                                            class="text">WEXP</span></a></li>
                                                <li class="d2_hp"><a href="/characterRank/#/honor"
                                                                     ><span class="mcon"></span><span
                                                            class="text">?? ??</span></a></li>
                                                <!-- ngIf: getNationCode() != 'tw' -->
                                                <li class="d2_dc" ><a
                                                        href="/characterRank/#/dungeonClear"
                                                       ><span class="mcon"></span><span
                                                            class="text">?? ???</span></a></li>
                                                <!-- end ngIf: getNationCode() != 'tw' -->
                                                <li class="d2_mw"><a href="/characterRank/#/missionWar"
                                                                     ><span class="mcon"></span><span
                                                            class="text">?? ??</span></a></li>
                                                <!-- ngIf: getNationCode() != 'kr' && getNationCode() != 'jp' && getNationCode() != 'na' && getNationCode() != 'br' && getNationCode() != 'eu' -->
                                                <!-- ngIf: getNationCode() != 'kr' && getNationCode() != 'jp' -->
                                            </ul>
                                        </div>
                                    </div></li>
                                <li class="link"><a href="/guildRank"
                                                    class="depth1">?? ??</a>
                                    <div class="depth2">
                                        <div>
                                            <ul>
                                                <li class="d2_gsc"><a href="/guildRank/#/score"
                                                                     ><span class="mcon"></span><span
                                                            class="text ">?? ??</span></a></li>
                                                <li class="d2_wex"><a href="/guildRank/#/wexp"
                                                                      ><span class="mcon"></span><span
                                                            class="text">WEXP</span></a></li>
                                                <li class="d2_ach"><a href="/guildRank/#/achievement"
                                                                      ><span class="mcon"></span><span
                                                            class="text">??</span></a></li>
                                                <li class="d2_hp"><a href="/guildRank/#/honor"
                                                                     ><span class="mcon"></span><span
                                                            class="text">?? ??</span></a></li>
                                            </ul>
                                        </div>
                                    </div></li>
                                <li class="sch"><a href="javascript:return false;"
                                                   class="depth1">??</a>
                                    <div class="depth2">
                                        <div class="search_con">
                                            <!-- ngIf: getNationCode() != 'jp' -->
                                            <div class="search_input sch_char"
                                                 >
                                                <div class="input_search">
                                                    <label for="searchChar"">??? ??</label>
                                                    <form>
                                                        <input type="text" autocomplete="off" class="search_text"
                                                               id="searchChar" value=""> 
                                                        <input type="submit"
                                                               class="search_btn" value="search">
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- end ngIf: getNationCode() != 'jp' -->
                                            <div class="search_input sch_guild">
                                                <div class="input_search">
                                                    <label for="searchGuild">?? ??</label>
                                                    <form >
                                                        <input type="text" autocomplete="off" class="search_text"
                                                               id="searchGuild" value=""> 
                                                        <input type="submit"
                                                               class="search_btn" value="search">
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div></li>
                            </ul>
                            <div class="lang">
                                <div class="select swhite">
                                    <a href="" class="default depth1"><span>??</span></a>
                                    <div class="option">
                                        <ul>
                                            <li><span>EU</span>
                                                <ul>
                                                    <li><a href="" >English</a></li>
                                                    <li><a href="" >Deutsch</a></li>
                                                    <li><a href="" >T�rk�e</a></li>
                                                </ul></li>
                                            <li><span>NA</span>
                                                <ul>
                                                    <li><a href="" >English</a></li>
                                                    <li><a href="" >Espa�ol</a></li>
                                                </ul></li>
                                            <li><span>KR</span>
                                                <ul>
                                                    <li><a href="" >English</a></li>
                                                    <li><a href="" >???</a></li>
                                                </ul></li>
                                            <li><a href="" >Brazil</a></li>
                                            <li><a href="" >??</a></li>
                                            <li><a href="" >??</a></li>
                                            <!-- <li><a href="" ng-click="setNationCode('th', 'th')">?????????</a></li> -->
                                            <!-- <li><a href="" ng-click="setNationCode('ph', 'eng')">Philippine</a></li> -->
                                            <li><a href="" >??</a></li>
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
                <div class="container ng-scope" data-ng-init="searchCharacterLeaderTop100('combat', 'point_ad', 20)">
                    <h2 class="blind">Leader Board</h2>
                    <div class="content_wrap">
                        <div class="content_title">
                            <h3>GLOBAL TOP100</h3>
                        </div>