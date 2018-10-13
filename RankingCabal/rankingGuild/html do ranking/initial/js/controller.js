'use strict';

app.controller('templateCtrl', ['$rootScope', '$scope', '$http', '$routeParams', '$cookieStore', '$cookies', '$location', 'Constant', function($rootScope, $scope, $http, $routeParams, $cookieStore, $cookies, $location, Constant) {
	$scope.lang = function(){
		var cnCode = $cookies.get('cncode');
		
		if(!cnCode)
			cnCode = 'kr';
			
		return $.map(Constant.langs, function(obj) { if(obj.cnCode == cnCode) return obj; else return; })[0].lang;
	}
}]);
