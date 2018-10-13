'use strict';

app.factory('RankService', ['$http', 'Constant', function($http, Constant) {
	var st = {};
	  
	st.searchCharacter = function(params, successCallback, errorCallback) {
	  $http({
		  method:'get',
		  url : Constant.AppLink.serverUrl + '/leaderboard/characters/' + 
		  			params.category + 
			  		'?nationCode=' +
			  		params.nationCode + 
			  		(params.serverNo? '&serverNo='+params.serverNo : '') + 
			  		'&orderBy='+params.order+ 
			  		(params.dateTerm? '&dateTerm='+params.dateTerm : '') +
			  		'&searchCount=' +
			  		params.lmt + 
			  		(params.page? '&page='+params.page : '') +
			  		(params.dungeonIndex? '&dungeonIndex='+params.dungeonIndex : '') + 
			  		(params.levelType? '&levelType='+params.levelType : '') + 
(params.battleClass > 0? '&battleClass='+params.battleClass : '') +
			  		(params.characterIdx? '&characterIdx='+params.characterIdx : '') + 
			  		(params.guildNo? '&guildNo='+params.guildNo : '')
	  }).success(successCallback).error(errorCallback);
	};
	
	st.searchGuild = function(params, successCallback, errorCallback) {
	  $http({
		  method:'get',
		  url : Constant.AppLink.serverUrl + '/leaderboard/guilds/' + 
		  			params.category + 
		  			'?nationCode=' +
		  			params.nationCode +
		  			(params.serverNo? '&serverNo='+params.serverNo : '') + 
		  			'&orderBy=' + params.order +
		  			(params.dateTerm? '&dateTerm='+params.dateTerm : '') +
		  			'&searchCount=' +
		  			params.lmt + 
		  			(params.page? '&page='+params.page : '')
	  }).success(successCallback).error(errorCallback);
	};
	
	return st;
}]);

app.factory('PartialService', ['$rootScope', '$http', function($rootScope, $http) {
	var st = {};
	
	st.getPartial = function(params, successCallback, errorCallback) {
	  $http({
		  method:'get', 
		  url:'/partial/' + params.url
	  }).then(successCallback, errorCallback);
	};
	
	return st;
}]);

app.factory('SearchService', ['$http', 'Constant', function($http, Constant) {
	var st = {};
	  
	st.searchCharacter = function(params, successCallback, errorCallback) {
	  $http({
			  method:'get',
			  url : Constant.AppLink.serverUrl + '/search/character/search?nationCode=' + params.nationCode + '&characterName=' + encodeURIComponent(params.characterName)
	  }).success(successCallback).error(errorCallback);
	};
	
	st.getCharacter = function(params, successCallback, errorCallback) {
	  $http({
			  method:'get',
			  url : Constant.AppLink.serverUrl + '/search/character/get?nationCode=' + params.nationCode + '&languageCode=' + params.languageCode + '&serverNo=' + params.serverNo + '&characterIndex=' + params.characterIndex
	  }).success(successCallback).error(errorCallback);
	};

	st.getCharacterMerit = function(params, successCallback, errorCallback) {
	  $http({
			  method:'get',
			  url : Constant.AppLink.serverUrl + '/search/character/merit/get?nationCode=' + params.nationCode + '&languageCode=' + params.languageCode + '&serverNo=' + params.serverNo + '&characterIndex=' + params.characterIndex
	  }).success(successCallback).error(errorCallback);
	};

	st.searchGuild = function(params, successCallback, errorCallback) {
	  $http({
			  method:'get',
			  url : Constant.AppLink.serverUrl + '/search/guild/search?nationCode=' + params.nationCode + '&guildName=' + encodeURIComponent(params.guildName)
	  }).success(successCallback).error(errorCallback);
	};

	st.getGuild = function(params, successCallback, errorCallback) {
	  $http({
			  method:'get',
			  url : Constant.AppLink.serverUrl + '/search/guild/get?nationCode=' + params.nationCode + '&serverNo=' + params.serverNo + '&guildNo=' + params.guildNo
	  }).success(successCallback).error(errorCallback);
	};

	return st;
}]);

app.factory('ConfigService', ['$http', 'Constant', function($http, Constant) {
	var st = {};
	  
	st.getServers = function(nationCode, successCallback, errorCallback) {
	  $http({
		  method:'get',
		  url : Constant.AppLink.serverUrl + '/etc/server/all?nationCode=' + nationCode
	  }).success(successCallback).error(errorCallback);
	};
	
	st.getConfig = function(nationCode, successCallback, errorCallback) {
		  $http({
			  method:'get',
			  url : Constant.AppLink.serverUrl + '/etc/config/' + nationCode
		  }).success(successCallback).error(errorCallback);
		};
		
	return st;
}]);

app.factory('LogService', ['$http', 'Constant', function($http, Constant) {
	var st = {};
	
	st.addVisitLog = function(nationCode, type, index, successCallback, errorCallback) {
	  $http({
		  method:'get',
		  url : Constant.AppLink.serverUrl + '/search/visit/add?nationCode=' + nationCode + '&type=' + type + '&infoIndex=' + index
	  }).success(successCallback).error(errorCallback);
	};
	
	st.getVisitCount = function(nationCode, type, bound, index, successCallback, errorCallback) {
		  $http({
			  method:'get',
			  url : Constant.AppLink.serverUrl + '/search/visit/getCount/' + bound + '?nationCode=' + nationCode + '&type=' + type + '&infoIndex=' + index
		  }).success(successCallback).error(errorCallback);
		};
		
	return st;
}]);
