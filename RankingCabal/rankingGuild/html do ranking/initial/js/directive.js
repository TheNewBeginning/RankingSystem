'use strict';

app.directive('serverSelector', ['$compile', '$cookies', 'ConfigService', 'Constant', 'LocaleConstant', function($compile, $cookies, ConfigService, Constant, LocaleConstant) {
	return {
	    transclude: true,
	    template: '<div class="select swhite server">'+
	    			'<a href="" class="default"><span>{{serverCode.serverName}}</span></a>'+
	    				'<div class="option">'+
	    					'<ul>'+
	    						'<li ng-repeat="row in serverCodes"><a href="" ng-click="serverUpdate(row.serverNo, row.serverName)" ng-if="row.isUse == \'y\'">{{row.serverName}}</a></li>'+
	    					'</ul>'+
	    				'</div>'+
	    			'</div>',
	    replace: true,
	    restrict: 'E',
	    link : function(scope, element, attrs, controller){
	    	if(!scope.serverCodes) {
	    		ConfigService.getServers($cookies.get('cncode'), function(data, status, header, config){
		    		scope.serverCodes = data;
		    		scope.serverCode = {serverNo : -1, serverName : 'ALL'};
			    	
			  	  	$cookies.put('cscode', scope.serverCode? -1 : scope.serverCode.serverNo, {path : '/'});
	    		}, function(data, status, header, config){
	    			console.log('data receive error!')
	    		});
	    	}

	  	  	scope.serverUpdate = function(index, name){
	  	  		$cookies.put('cscode', index, {path : '/'});
	  	  		
	  	  		scope.move(1);
	  	  		
	  	  		$('.select.server .default span').text(name);
	  	  		$('.select.server').removeClass('show');
	  	  	};

	  		scope.applyLocale = function(key){
	  			return LocaleConstant[$cookies.get('lccode')][key];
	  		}
	    }
	  };
}]);

app.directive('dateTermSelector', ['$compile', '$cookies', 'Constant', 'LocaleConstant', function($compile, $cookies, Constant, LocaleConstant) {
	return {
	    transclude: true,
	    template: '<div class="select swhite terms">'+
	    			'<a href="" class="default"><span>{{applyLocale(dateTerm.name)}}</span></a>'+
	    				'<div class="option">'+
	    					'<ul>'+
	    						'<li ng-repeat="row in dateTerms"><a href="" ng-click="dateTermUpdate(row.index, row.name)">{{applyLocale(row.name)}}</a></li>'+
	    					'</ul>'+
	    				'</div>'+
	    			'</div>',
	    replace: true,
	    restrict: 'E',
	    link : function(scope, element, attrs, controller){
	    	if(!scope.dateTerms) {
	    		scope.dateTerms = [{index:0, name:'Weekly'}, {index:1, name:'All'}];
	    		scope.dateTerm = scope.dateTerms.filter(function(item){return item.index == (0); })[0];	//$cookies.get('cscode')? $cookies.get('cscode') : -1
	    	}
	    	
	  	  	$cookies.put('dtcode', scope.dateTerm.index, {path : '/'});

	  	  	scope.dateTermUpdate = function(index, name){
	  	  		$cookies.put('dtcode', index, {path : '/'});
	  	  		
	  	  		scope.move(1);
	  	  		
	  	  		$('.select.terms .default span').text(scope.applyLocale(name));
	  	  		$('.select.terms').removeClass('show');
	  	  	};

	  		scope.applyLocale = function(key){
	  			return LocaleConstant[$cookies.get('lccode')][key];
	  		}
	    }
	  };
}]);

//scope.serverCodes = $.map(Constant.Servers, function(obj) { if(obj.cnCode == $cookies.get('cncode')? $cookies.get('cncode') : 'kr') return obj; else return; })[0].server;
//scope.serverCode = scope.serverCodes.filter(function(item){return item.index == (-1); })[0];	//$cookies.get('cscode')? $cookies.get('cscode') : -1