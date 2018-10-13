'use strict';

var app = angular.module('App', ['ngRoute', 'ngCookies']);

app.config(['$routeProvider', '$locationProvider', function($routeProvider, $locationProvider){
		$routeProvider
			.when('/main', {
				templateUrl : function($routeParams){ return './views/main.html'; },
				controller : 'LeaderBoardController'
			})
			.when('/:type', {
				templateUrl : function($routeParams){ return './views/partial/' + $routeParams.type + '.html'; },
				controller : 'LeaderBoardController'
			})
			.otherwise({
				redirectTo:'/top100'
			})
}]);
