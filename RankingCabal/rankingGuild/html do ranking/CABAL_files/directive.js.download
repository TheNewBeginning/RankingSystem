'use strict';

app.directive('topMenu' , ['$compile', '$cookies', '$location', '$http', 'PartialService', 'Constant', 'LocaleConstant', function($compile, $cookies, $location, $http, PartialService, Constant, LocaleConstant) {
	return {
	    transclude: true,
	    templateUrl: function(elem, attr){ return '/initial/views/top.html'; },
	    replace: true,
	    restrict: 'E',
	    link : function(scope, element, attrs, controller){
	    	var initSelected = $.map(Constant.LeaderBoards, function(obj) { if(obj.name == $location.$$path.replace('/', '')) return obj; else return; });
	    	
	    	if(initSelected.length > 0){
	    		scope.currIndex = initSelected[0].index;
	    		initLBTCssStyle(scope.currIndex);
	    	}
	    	
	        scope.call = function(cssClass){
	        	scope.currIndex = $.map(Constant.LeaderBoards, function(obj) { if(obj.name == $location.$$path.replace('/', '')) return obj; else return; });
	    		initLBTCssStyle(scope.currIndex);
	    	};

	    	scope.searchCharacter = function($event){
	    		$event.preventDefault();
	    		window.location.href = '/search/#/character-list?characterName=' + $('#searchChar').val()
	    	}

	    	scope.searchGuild = function($event){
	    		$event.preventDefault();
	    		window.location.href = '/search/#/guild-list?guildName=' + $('#searchGuild').val()
	    	}
	    	
	    	scope.setNationCode = function(nCode, lCode){
	    		$cookies.put('cncode', nCode, {path : '/'});
	    		$cookies.put('lccode', lCode, {path : '/'});
	    		
	    		window.location.reload();
	    	};

	    	scope.applyLocale = function(key){
	    		return LocaleConstant[$cookies.get('lccode')][key];
	    	}

	    	scope.getNationCode = function(){
	    		return $cookies.get('cncode');
	    	}
	    }
	  };
}]);

app.directive('naviFooter', ['$compile', '$cookies', '$location', '$http', 'PartialService', 'Constant', function($compile, $cookies, $location, $http, PartialService, Constant) {
	return {
	    transclude: true,
	    templateUrl: function(elem, attr){
	    	return '/initial/views/footer-navi.html';
	    },
	    replace: true,
	    restrict: 'E',
	    link : function(scope, element, attrs, controller){
	    	scope.currIndex = $.map(Constant.LeaderBoards, function(obj) { if(obj.name == $location.$$path.replace('/', '')) return obj; else return; })[0].index;
	    	
	    	initLBNCssStyle(scope.currIndex);
	    	/*
	    	lbSlide($(".header .gnb .depth2.on a." + $.map(Constant.LeaderBoards, function(obj) { if(obj.name == $location.$$path.replace('/', '')) return obj; else return; })[0].cssClass).parent().index(), 
            		function(){
                });
	    	
	    	scope.callTable = function(cssClass){
	    		var target = $('.slide1').find('a.' + cssClass);

	    		if(!$(target).parent().hasClass("on") && !$(target).parents(".list_wrap ul").is(":animated")){
	                lbSlide($(".header .gnb .depth2.on a." + $(target).attr("class")).parent().index(), 
                		function(){
		                	scope.currIndex = $.map(Constant.LeaderBoards, function(obj) { if(obj.cssClass == cssClass) return obj; else return; })[0].index;
		    	    		
		    	    		PartialService.getPartial(
	                				{url : 'leaderboard/' + Constant.LeaderBoards[scope.currIndex].name},
	                				function(response){
	    		    	    			$('.table_now').html($(response.data).find('.table_now').html());
	    		    	    			$compile($('.table_now'))(scope);
	    		    	    		},
	    		    	    		function(response){
	    		    	    			console.log(response);
	    		    	    		}
                			);
	                });
	            }
	    	};

	    	scope.next = function(){
	            if(!$(".leaderboard .slide_list .list_wrap ul").is(":animated")){
	                var slideIdx = $(".header .gnb .hover li.on").length > 0? $(".header .gnb .hover li.on").index() : 0;
	                
                    slideIdx++;
                    
	                lbSlide(slideIdx, function(){ 
	                	scope.currIndex = (scope.currIndex + 1) % 6;
	                	
	    	    		PartialService.getPartial(
                				{url : 'leaderboard/' + Constant.LeaderBoards[scope.currIndex].name},
                				function(response){
    		    	    			$('.table_now').html($(response.data).find('.table_now').html());
    		    	    			$compile($('.table_now'))(scope);
    		    	    		},
    		    	    		function(response){
    		    	    			console.log(response);
    		    	    		}
                			);
	                });
	            }
	    	};

	    	scope.prev = function(){
	            if(!$(".leaderboard .slide_list .list_wrap ul").is(":animated")){
	                var slideIdx = $(".header .gnb .hover li.on").length > 0? $(".header .gnb .hover li.on").index() : 0;
	                
                    slideIdx--;
                    
	                lbSlide(slideIdx, function(){
	                	scope.currIndex = Math.abs(scope.currIndex > 0?scope.currIndex - 1 : 5) % 6;

	    	    		PartialService.getPartial(
                				{url : 'leaderboard/' + Constant.LeaderBoards[scope.currIndex].name},
                				function(response){
    		    	    			$('.table_now').html($(response.data).find('.table_now').html());
    		    	    			$compile($('.table_now'))(scope);
    		    	    		},
    		    	    		function(response){
    		    	    			console.log(response);
    		    	    		}
                			);
	                });
	            }
	    	};
	    	*/
	    }
	  };
}]);

app.directive('pageFooter' , ['$compile', '$cookies', '$location', '$http', 'RankService', 'PartialService', 'Constant', function($compile, $cookies, $location, $http, RankService, PartialService, Constant) {
	return {
	    transclude: true,
	    templateUrl: function(elem, attr){ return '/initial/views/footer-paging.html'; },
	    replace: true,
	    restrict: 'E',
	    link : function(scope, element, attrs, controller){
	    	
	    	scope.$on('success', function(value, pageLimit){
	    		var currPageIndex = value.currentScope.pagination.pageIndex;
	    		var totalCount = value.currentScope.pagination.totalCount;
	    		var pagingSize = value.currentScope.pagination.pagingSize;
	    		var itemCount = value.currentScope.pagination.itemCount;
	    		
	    		var html = '';

	    		var startPageIndex = parseInt((currPageIndex -1) / pagingSize) * pagingSize + 1;
	    		var endPageIndex = startPageIndex + (pagingSize - 1);
	    		var firstPageIndex = 1;
	    		var lastPageIndex = parseInt(totalCount / itemCount) + 1;
	    		var prevPageIndex = startPageIndex - 1;
	    		var nextPageIndex = endPageIndex + 1;

	    		if(pageLimit) {
	    			endPageIndex = pageLimit;
	    			lastPageIndex = pageLimit;
	    		}
	    		
	    		if(endPageIndex > 10) {
	    			html+='<a href="" class="move first" ng-click="move(' + firstPageIndex + ')"><span class="blind">First</span></a>';
	    			html+='<a href="" class="move prev" ng-click="move(' + prevPageIndex + ')"><span class="blind">Prev</span></a>';
	    		}
	    		
	    		html+='<span class="num">';
	    		
	    		for(var i = startPageIndex;i <= endPageIndex;i++){
	    			if(i > lastPageIndex) break;
	    			
	    			html+='<a href="" ng-click="move(' + i + ')"' + (i == currPageIndex?' class="on"' : '') + '>' + i + '</a>';
	    		}
	    		
	    		html+='</span>';
	    		
	    		if(endPageIndex < lastPageIndex){
	    			html+='<a href="" class="move next" ng-click="move(' + nextPageIndex + ')"><span class="blind">Next</span></a>';
		    		html+='<a href="" class="move last" ng-click="move(' + lastPageIndex + ')"><span class="blind">Last</span></a>';	
	    		}
	    		
	    		$('.table_pager').html(html);
	    		
	    		$compile($('.table_pager'))(scope);
	    	})
	    	
	    }
	  };
}]);

app.directive('battleClassSelector' , ['$compile', '$cookies', '$location', '$http', 'RankService', 'PartialService', 'Constant', 'LocaleConstant', function($compile, $cookies, $location, $http, RankService, PartialService, Constant, LocaleConstant) {
	return {
	    transclude: true,
	    templateUrl: function(elem, attr){ return '/initial/views/battle-class-selector.html'; },
	    replace: true,
	    restrict: 'E',
	    link : function(scope, element, attrs, controller){
	    	selectCustomById('.battleClassSelector');

	  	  	scope.battleClassUpdate = function(index){
scope.selectedBattleClassNo = (index == 0)? 8 : index;

	  	  		$('.battleClassSelector').removeClass('show');
	  	  		
	  	  		scope.move(1);
	  	  	};
	  	  	
	    	scope.applyLocale = function(key){
	    		return LocaleConstant[$cookies.get('lccode')][key];
	    	}
	    }
	  };
}]);
