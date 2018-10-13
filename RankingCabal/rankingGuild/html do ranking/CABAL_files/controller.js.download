'use strict';

app.controller('LeaderBoardController', ['$rootScope', '$scope', '$http', '$routeParams', '$cookieStore', '$cookies', '$location', 'RankService', 'Constant', 'LocaleConstant','ConfigService', 'SearchService', function($rootScope, $scope, $http, $routeParams, $cookieStore, $cookies, $location, RankService, Constant, LocaleConstant, ConfigService, SearchService) {
	$scope.constant = Constant;
	
	$scope.rankingSuccessCallback = function(data, status, header, config){
		$scope.datas = data;

		$scope.pagination.totalCount = data.count;
		
		$scope.$broadcast('success', 5);
	};
	
	$scope.errorCallback = function(data, status, header, config){
		console.log('data receive error!')
	};

	initCssStyle($location.absUrl());

	if(!$cookies.get('cncode'))
		$cookies.put('cncode', Constant.nationList[4].cnCode, {path : '/'});
	
	if(!$cookies.get('lccode'))
		$cookies.put('lccode', Constant.nationList[4].lcCode, {path : '/'});
	
	var lbLocation = $.map(Constant.LeaderBoards, function(obj) { if(obj.name == $location.$$path.replace('/', '')) return obj; else return; });
	
	if(lbLocation.length > 0)
		initLBTCssStyle(lbLocation[0].index);
	
	$rootScope.top3Datas = {};

	$scope.pagination = {};
	$scope.pagination.pageIndex = 1;
	$scope.pagination.totalCount = 1;
	$scope.pagination.itemCount = 20;
	$scope.pagination.pagingSize = 10;	//10쪽씩
	
	$scope.top3CombatParam = {nationCode : $cookies.get('cncode'), category : 'combat', order : 'point_ad', lmt : 3};
	$scope.top3GuildParam = {nationCode : $cookies.get('cncode'), category : 'score', order : 'point', lmt : 3};
	$scope.top3MissionWarParam = {nationCode : $cookies.get('cncode'), category : 'missionWarScore', order : 'score', lmt : 3};

	$scope.searchTopLeader = function(){
		RankService.searchCharacter($scope.top3CombatParam, function(data, status, header, config){
			$rootScope.top3Datas.characterCombat = data;
		}, $scope.errorCallback);
		
		RankService.searchGuild($scope.top3GuildParam, function(data, status, header, config){
			$rootScope.top3Datas.guildScore = data;
		}, $scope.errorCallback);
		
		RankService.searchCharacter($scope.top3MissionWarParam, function(data, status, header, config){
			$rootScope.top3Datas.characterMissionWar = data;
		}, $scope.errorCallback);
	};
	
	$scope.searchCharacterLeader = function(category, order, lmt){
		$scope.category = category;
		$scope.order = order;
		
		RankService.searchCharacter({
			nationCode : $cookies.get('cncode'),
			category : category,
			dateTerm : "0",
			order : order,
			dungeonIndex : category == 'dungeonClear'? 4283 : null,
			lmt : lmt? lmt : 10
		}, $scope.rankingSuccessCallback, $scope.errorCallback);
	};

	$scope.searchCharacterLeaderTop100 = function(category, order, lmt){
		$scope.category = category;
		$scope.order = order;
		
		RankService.searchCharacter({
			nationCode : 'all',
			category : category,
			order : order,
			lmt : lmt? lmt : 10
		}, $scope.rankingSuccessCallback, $scope.errorCallback);
	};
	
	$scope.searchGuildLeader = function(category, order, lmt){
		RankService.searchGuild({
			nationCode : $cookies.get('cncode'),
			category : category,
			dateTerm : "0",
			order : order,
			lmt : lmt? lmt : 10
		}, $scope.rankingSuccessCallback, $scope.errorCallback);
	};

	$scope.applyLocale = function(key){
		return LocaleConstant[$cookies.get('lccode')][key];
	}

	$scope.getRank = function(index){
		return (($scope.pagination.pageIndex - 1) * $scope.pagination.itemCount) + index + 1;
	}

	$scope.getRankScore = function(weekValue, allValue){
		if($cookies.get('dtcode') == 0)
			return weekValue;
		else
			return allValue;
	}

	$scope.getVariation = function(index, row, dateTermFixed){
		if(!row)
			return 1;
		
		var serverNo = $cookies.get('cscode');
		var dateTerm = $cookies.get('dtcode');
		
		if(!dateTermFixed)
			dateTerm = dateTermFixed;
		
		var rank = $scope.getRank(index);
		var rankCssClass='';
		var rankValue = -1;
		
		if(serverNo == -1){	//전체 서버
			if(dateTerm == 0){	//주간
				if(row.rank_accum_week_last > 0){
					rankCssClass = (rank == row.rank_accum_week_last? 'nochange' : rank < row.rank_accum_week_last? 'increase' : 'decrease');
					rankValue = Math.abs(rank - row.rank_accum_week_last);
				} else {
					rankCssClass = 'new';
					rankValue = 'NEW';//$scope.pagination.totalCount - (rank - 1); 
				}
			}
			else{	//전체
				if(row.rank_accum_all_last > 0){
					rankCssClass = (rank == row.rank_accum_all_last? 'nochange' : rank < row.rank_accum_all_last? 'increase' : 'decrease');
					rankValue = Math.abs(rank - row.rank_accum_all_last);	
				} else {
					rankCssClass = 'new';
					rankValue = 'NEW';//$scope.pagination.totalCount - (rank - 1); 
				}
			}
		} else {	//특정 서버
			if(dateTerm == 0){	//주간
				if(row.rank_accum_week_svr_last > 0){
					rankCssClass = (rank == row.rank_accum_week_svr_last? 'nochange' : rank < row.rank_accum_week_svr_last? 'increase' : 'decrease');
					rankValue = Math.abs(rank - row.rank_accum_week_svr_last);	
				} else {
					rankCssClass = 'new';
					rankValue = 'NEW';//$scope.pagination.totalCount - (rank - 1); 
				}
			}
			else{	//전체
				if(row.rank_accum_all_svr_last > 0){
					rankCssClass = (rank == row.rank_accum_all_svr_last? 'nochange' : rank < row.rank_accum_all_svr_last? 'increase' : 'decrease');
					rankValue = Math.abs(rank - row.rank_accum_all_svr_last);	
				} else {
					rankCssClass = 'new';
					rankValue = 'NEW';//$scope.pagination.totalCount - (rank - 1); 
				}
			}
		}
		
		return {'rankCssClass' : rankCssClass, 'rankValue' : rankValue};
	}
	
	$scope.getVariationTop3Combat = function(index, row){
		if(!row)
			return 1;
		
		var rank = index;
		
		var rankCssClass='';
		var rankValue = -1;
		
		if(row.rank_accum_week_last > 0){
			rankCssClass = (rank == row.rank_accum_week_last? 'nochange' : rank < row.rank_accum_week_last? 'increase' : 'decrease');
			rankValue = Math.abs(rank - row.rank_accum_week_last);
		} else {
			rankCssClass = 'new';
			rankValue = 'NEW';	//$rootScope.top3Datas.characterCombat.count - (rank - 1); 
		}
		
		return {'rankCssClass' : rankCssClass, 'rankValue' : rankValue};
	}

	$scope.getVariationTop3GuildScore = function(index, row){
		if(!row)
			return 1;
		
		var rank = index;
		
		var rankCssClass='';
		var rankValue = -1;
		
		if(row.rank_accum_week_last > 0){
			rankCssClass = (rank == row.rank_accum_week_last? 'nochange' : rank < row.rank_accum_week_last? 'increase' : 'decrease');
			rankValue = Math.abs(rank - row.rank_accum_week_last);
		} else {
			rankCssClass = 'new';
			rankValue = 'NEW';	//$rootScope.top3Datas.guildScore.count - (rank - 1); 
		}
		
		return {'rankCssClass' : rankCssClass, 'rankValue' : rankValue};
	}

	$scope.getVariationTop3MissionWar = function(index, row){
		if(!row)
			return 1;
		
		var rank = index;
		
		var rankCssClass='';
		var rankValue = -1;
		
		if(row.rank_accum_week_last > 0){
			rankCssClass = (rank == row.rank_accum_week_last? 'nochange' : rank < row.rank_accum_week_last? 'increase' : 'decrease');
			rankValue = Math.abs(rank - row.rank_accum_week_last);
		} else {
			rankCssClass = 'new';
			rankValue = 'NEW';	//$rootScope.top3Datas.characterMissionWar.count - (rank - 1);
		}
		
		return {'rankCssClass' : rankCssClass, 'rankValue' : rankValue};
	}
	
	ConfigService.getConfig($cookies.get('cncode'), function(data, status, header, config){
		$scope.appAttrs = data;
	}, $scope.errorCallback);

	$scope.getConfig = function(key){
		if(!$scope.appAttrs)
			return "-";
		
		return $.map($scope.appAttrs, function(obj) { if(obj.key == key) return obj; else return; })[0].value;
	}
	
	$scope.getNationName = function(){
		var cnCode = $cookies.get('cncode');
		
		return $.map(Constant.nationList, function(obj) { if(obj.cnCode == cnCode) return obj; else return; })[0].cnName;
	}

	$scope.move = function(pageIndex){
		$scope.pagination.pageIndex = pageIndex;
		
		RankService.searchCharacter({
			nationCode : location.href.indexOf('top100') > -1? 'all' : $cookies.get('cncode'),
			serverNo : $cookies.get('cscode'),
			page : pageIndex,
			category : $scope.category,
			dateTerm : location.href.indexOf('top100') > -1? null : $cookies.get('dtcode'),
			lmt : $scope.pagination.itemCount,
			dungeonIndex : $scope.category == 'dungeonClear'? $cookies.get('dgindex') : null,
			levelType : $scope.selectedLevelType? $scope.selectedLevelType : null,
battleClass : $scope.selectedBattleClassNo > 0? $scope.selectedBattleClassNo : null,
			order : $scope.order? $scope.order : null
		}, $scope.rankingSuccessCallback, $scope.errorCallback);
	}
	
	$scope.selectCharacter = function(serverNo, characterName, nationCode){
		$scope.selectedServerNo = serverNo;
		$scope.selectedCharacterName = characterName;
		$scope.selectedNationCode = null;
			
		if(nationCode){
			$scope.selectedNationCode = nationCode.toLowerCase();	
			
			switch(nationCode.toLowerCase()){
				case 'eu':
				case 'na':
				case 'ph':
					$cookies.put('lccode', 'eng', {path : '/'});	
					break;
				default:
					$cookies.put('lccode', nationCode.toLowerCase(), {path : '/'});
					break;
			}
			
			$cookies.put('cncode', nationCode.toLowerCase(), {path : '/'});
		}
		if($cookies.get('cncode') != 'jp'){
			SearchService.searchCharacter({
				nationCode : $cookies.get('cncode'),
				characterName : characterName
			}, $scope.successSearchCharacterCallback, $scope.errorCallback);	
		}
	}

	$scope.selectGuild = function(serverNo, guildName){
		$scope.selectedServerNo = serverNo;
		$scope.selectedGuildName = guildName;
		
		SearchService.searchGuild({
			nationCode : $cookies.get('cncode'),
			guildName : guildName
		}, $scope.successSearchGuildCallback, $scope.errorCallback);
	}

	$scope.successSearchCharacterCallback = function(data, status, header, config){
		$scope.characters = data;
		
		$(data).each(function(){
			if(this.serverNo == $scope.selectedServerNo
				 && this.Name == $scope.selectedCharacterName) {
				$scope.characterInfo = this;
				$cookies.put('characterInfo', JSON.stringify(this), {path : '/'});
				window.location.href = '/search/#/character';
			}
		});
	};
	
	$scope.successSearchGuildCallback = function(data, status, header, config){
		$scope.guilds = data;
		
		$(data).each(function(){
			if(this.serverNo == $scope.selectedServerNo
				 && this.GuildName == $scope.selectedGuildName) {
				$scope.guildInfo = this;
				$cookies.put('guildInfo', JSON.stringify(this), {path : '/'});
				window.location.href = '/search/#/guild';
			}
		});
	};
	
	$scope.getTimeForString = function(sec){
		var h = parseInt(sec / 3600);
		var m = parseInt(sec / 60);
		var s = sec % 60;
		
		h = h < 10? '0' + h : h;
		m = m < 10? '0' + m : m;
		s = s < 10? '0' + s : s;
		
		return h + ':' + m + ':' + s;
	};
}]);

