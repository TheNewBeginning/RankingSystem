function initCssStyle(currUrl){
	$('div.wrap').removeClass('top100 top3 sub leaderboard character search search_list search_detail');
	
	if(currUrl.indexOf('index.php/RankingGuild') > 0) $('div.wrap').addClass('top3');
	else if(currUrl.indexOf('RankingGuild/#/top100') > 0) $('div.wrap').addClass('sub leaderboard top100');
	else if(currUrl.indexOf('leaderboard/#/top3') > 0) $('div.wrap').addClass('sub leaderboard top3');
	else if(currUrl.indexOf('leaderboard') > 0) $('div.wrap').addClass('sub leaderboard');
	else if(currUrl.indexOf('characterRank') > 0) $('div.wrap').addClass('sub character');
	else if(currUrl.indexOf('guildRank') > 0) $('div.wrap').addClass('sub guild');
	else if(currUrl.indexOf('search') > 0 && currUrl.indexOf('list') > 0) $('div.wrap').addClass('sub search search_list');
	else if(currUrl.indexOf('search') > 0) $('div.wrap').addClass('search search_detail');
	
	if(currUrl.indexOf('characterRank') > 0 && currUrl.indexOf('missionWar') > 0)	$('.section.content').addClass('mission_war');
	else if(currUrl.indexOf('search') > 0 && currUrl.indexOf('list') < 0)	$('.section.content').addClass('details');
	
	headerEvent();
	selectCustom();
	searchMenu();
	//mainScroll();
	//missionList();
}

function initLBTCssStyle(currIndex){
	$('.gnb .hover').find('.depth2.on').find('li').removeClass('on');
    $('.gnb .hover').find('.depth2').removeClass('on');
    $('.gnb li').removeClass('hover');

	$('.gnb > li:eq(0)').addClass('hover');
	$('.gnb .hover').find('.depth2').addClass('on');
    $('.gnb .hover').find('.depth2.on').find('li:eq(' + currIndex + ')').addClass('on');
}

function initLBNCssStyle(currIndex){
	$('.slide1').find('li').removeClass('on');	
   	$('.slide1').find('li:eq(' + currIndex + ')').addClass('on');

  	headerEvent();
  	selectCustom();

	if($(".slide_list .list_wrap").width()){sl.init();}
}

function initCRTCssStyle(currIndex){
	$('.gnb .hover').find('.depth2.on').find('li').removeClass('on');
    $('.gnb .hover').find('.depth2').removeClass('on');
    $('.gnb li').removeClass('hover');

	$('.gnb > li:eq(1)').addClass('hover');
	$('.gnb .hover').find('.depth2').addClass('on');
	$('.gnb .hover').find('.depth2.on').find('li:eq(' + currIndex + ')').addClass('on');
}

function initGRTCssStyle(currIndex){
	$('.gnb .hover').find('.depth2.on').find('li').removeClass('on');
    $('.gnb .hover').find('.depth2').removeClass('on');
    $('.gnb li').removeClass('hover');

	$('.gnb > li:eq(2)').addClass('hover');
	$('.gnb .hover').find('.depth2').addClass('on');
	$('.gnb .hover').find('.depth2.on').find('li:eq(' + currIndex + ')').addClass('on');
}

function initSMTCssStyle(currUrl){
	$('.gnb .hover').find('.depth2.on').find('li').removeClass('on');
    $('.gnb .hover').find('.depth2').removeClass('on');
    $('.gnb li').removeClass('hover');

	$('.gnb > li:eq(3)').addClass('hover').find('.depth2').addClass('on');
	
	if($(".slide_list .list_wrap").width()
			&& $(".slide_list .list_wrap ul").find(".on").length > 0){sl.init();}
}
