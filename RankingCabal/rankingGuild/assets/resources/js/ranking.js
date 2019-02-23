$(function(){
    //Header GNB Event
    headerEvent();
    //Select Box
    //selectCustom();
    //Search Menu
    searchMenu();
    //Slide List
    if($(".slide_list .list_wrap").width()){sl.init();}
    if($(".tscroll").length>0){
        $(".tscroll").mCustomScrollbar({
            scrollInertia:0,
            scrollButtons:{enable:true},
            mouseWheel:{scrollAmount:100}
        });
    }
    //Main Map Slide
    $(".map_img a").bind("mouseenter focusin",function(){
        if(!$(this).hasClass("on")){
            var nation = $(this).attr("class");
            var slideIdx = $(".slide_list li ."+nation).parent().index();
            $(this).addClass("on").siblings().removeClass("on");
            sl.move(slideIdx);
        }
    })
    $(".map_wrap .slide_list li a").click(function(e){
        if(!$(this).parent().hasClass("on")){
            var slideIdx = $(this).parent().index();
            var nation = $(".slide_list li:eq("+slideIdx+") a").attr("class");
            $(".map_img .map_coord a."+nation).addClass("on").siblings().removeClass("on");
            sl.move(slideIdx);
            return false;
        }
    })
    $(".map_wrap .slide_list .move a").click(function(e){
        e.preventDefault();
        var slideIdx = $(".slide_list li.on").index();
        if($(this).hasClass("prev")){
            slideIdx--;
        } else{
            slideIdx++;
        }
        var nation = $(".slide_list li:eq("+slideIdx+") a").attr("class");
        $(".map_img .map_coord a."+nation).addClass("on").siblings().removeClass("on");
        sl.move(slideIdx);
        return false;
    })
    
    // Search - Equipment
    $(document).on('click', ".search_box .char_eq .box_tab li a", function(e){
        e.preventDefault();
        $(this).parent().addClass("on").siblings().removeClass("on");
        $(".search_box .char_eq .sc_wrap.on").removeClass("on").siblings().addClass("on");
    })
    $(document).on('click', ".search_box .char_eq .char_item th > a, .search_box .char_eq .char_item td > a", function(e){
        e.preventDefault();
        $(".search_box .item_detail").removeClass('show');
        $(".search_box .item_detail." + $(this).data("kind")).addClass("show").css("min-height",$(this).parents(".item_info").height()-7);
    })
    $(document).on('click', ".search .item_info .item_detail .tit_item > .btn_close", function(e){
        e.preventDefault();
        $(this).parents(".item_detail").removeClass("show");
    })
})

// GNB Init
function headerEvent(){
    var $menu = $(".header .menu_wrap .gnb > li, .header .menu_wrap .lang .select");
    var $depth1On,$depth2On;
    $depth1On = $(".header .menu_wrap .gnb > li.hover");
    $depth2On = $(".header .menu_wrap .gnb > li.hover .depth2.on");
    $menu.find(".depth1").bind("mouseenter",function(){
        $menu.removeClass("hover");
        $(this).parent().addClass("hover");
        $menu.find(".depth2").removeClass("on");
        if($(this).parents().hasClass("gnb")){
            $(this).parent().find(".depth2").addClass("on")
        } else {
            $depth2On.addClass("on");
        };
        if(!$(this).parent().hasClass("sch")){
            $(".sch .search_input input[type=text]").blur();
        };
    })
    $menu.bind("focusin",function(){
        $menu.removeClass("hover");
        $(this).addClass("hover"); 
        if($(this).hasClass("link")){
            $(this).siblings().find(".depth2").removeClass("on");
            $(this).find(".depth2").addClass("on");
            $(".menu_wrap .lang .select").removeClass("show");
        }
    })
    $(".header .menu_wrap .lang .select").bind("mouseleave",function(){
        $(this).removeClass("hover show").find("a").blur();
        $depth1On.addClass("hover");
        $depth2On.addClass("on");
    })
    $(".header .container").bind("mouseleave",function(){
        $menu.find("a").blur();
        $menu.removeClass("hover show").find(".depth2").removeClass("on");
        $depth1On.addClass("hover");
        $depth2On.addClass("on");
        if(!$(".wrap").hasClass("search")){
            $(this).find(".search_input").removeClass("focus blur").find("input[type=text]").blur();    
        }
    })
    $(".header h1 a, #content").focusin(function(){
        $menu.removeClass("hover show").find(".depth2").removeClass("on");
        $depth1On.addClass("hover");
        $depth2On.addClass("on");
    });
}
//Select Box
function selectCustom(){
    var sles = [];
    $(".select").each(function(i){
    	if($(this).data('loaded'))
    		return;
    	
    	$(this).data('loaded', true);
    	
        var focused = false;
        var txt = $(this).find("a.default span").text(),
            txtIdx = $(this).find(".option a:contains("+txt+")").parent().index(),
            ols = $(this).find(".option li").length;
        sles[i] = txtIdx < 0 ? 0 : txtIdx;
        $(this).find(".default").on("click",function(e){
            e.preventDefault();
            $(".select").not($(this).parent()).removeClass("show");
            $(this).parent().toggleClass("show");
        }).on("keydown",function(e){
            // space
            if(e.keyCode==32 || event.keyCode == 40){
                e.preventDefault();
                $(this).parent().addClass("show").find("li:eq("+sles[i]+") a").focus();
            }
        })
        $(this).find(".option li a").on("keydown",function(e){
            if(event.keyCode == 40 && !$(this).parent().is(":last-child")){
                //Down
                e.preventDefault();
                $(this).parent().next().find("a").focus();
            } else if(event.keyCode == 38 && !$(this).parent().is(":first-child")){
                //Up
                e.preventDefault();
                $(this).parent().prev().find("a").focus();
            } else if(e.keyCode == 27){
                //ESC
                $(this).parents(".select").removeClass("show").find(">a").focus();
            }
        }).on("mouseenter focusin",function(){
            focused = true;
            $(this).addClass("on").parent().siblings().find("a").removeClass("on");
            cf = $(this).parent().index();
        }).on("mouseleave focusout",function(){
            focused = false;
            $(this).removeClass("on");
        }).bind("focusout",function(){
            focused = false;
            $(this).removeClass("on");
            if($(this).parent().is(":last-child")){
                var $this = $(this);
                setTimeout(function(){
                    if(!focused){
                        $this.parents(".select").removeClass("show");
                    }
                },10);
            }
        });
    })
    $(document).on("click",function(e){
      if(!$(e.target).parents("div").is(".select.show")){
        $(".select").removeClass("show");
        $(".lang").removeClass("on");
      }
    });
}
//Slide List
var sl = {
    speed : 500,
    leng : 0,
    cenNum : 0,
    whWidth : 0,
    onWidth : 0,
    onIdx : 0,
    elLeft : 0,
    cenPos : 0,
    mgLeft : 0,
    $slideWrap : "",
    $slideUl : "",
    $slideLi : "",
    init : function(){
        this.$slideWrap = $(".slide_list");
        this.$slideUl = $(".slide_list .list_wrap ul");
        this.$slideLi = $(".slide_list li");
        this.leng = this.$slideLi.length;
        this.cenNum = Math.ceil(this.leng/2);
        this.whWidth = this.$slideWrap.width();
        this.onWidth = this.$slideUl.find(".on").innerWidth();
        this.onIdx = $(".slide_list .list_wrap li.on").index();
        var moveNum;
        if(this.onIdx<this.cenNum){
            moveNum = this.cenNum -  this.onIdx;
            this.$slideUl.find("li:gt("+(this.leng-moveNum)+")").prependTo(this.$slideUl);
            this.onIdx = this.onIdx+moveNum-1;
        } else {
            moveNum = this.onIdx-this.cenNum+1;
            this.$slideUl.find("li:lt("+moveNum+")").appendTo(this.$slideUl);
            this.onIdx = this.onIdx-moveNum;
        }
        this.elLeft = parseFloat(this.$slideUl.find(".on").css("marginLeft"));
        this.cenPos = Math.ceil((this.whWidth - this.onWidth)/2);
        this.mgLeft = this.cenPos - this.$slideUl.find(".on").position().left - this.elLeft;
        this.$slideUl.css({marginLeft:this.mgLeft});
        this.$slideWrap.addClass("visible");
    },
    move : function(onIdx){
        var moveNum = Math.abs(onIdx - this.onIdx);
        if(onIdx<this.cenNum){
            $(".slide_list li:gt("+(sl.leng-moveNum-1)+")").prependTo(this.$slideUl);
            this.onIdx = onIdx + moveNum;
        } else{
            $(".slide_list li:lt("+moveNum+")").appendTo(this.$slideUl);
            this.onIdx = onIdx - moveNum;
        }
        this.mgLeft = this.cenPos - this.$slideUl.find(".on").position().left - this.elLeft;
        this.$slideUl.css({marginLeft:this.mgLeft});
        this.$slideLi.filter(".on").removeClass("on");
        this.$slideUl.find(">:eq("+this.onIdx+")").addClass("on").siblings().removeClass("on");
        this.onWidth = this.$slideUl.find(".on").innerWidth();
        this.cenPos = Math.ceil((this.whWidth - this.onWidth)/2);
        this.mgLeft = this.cenPos - this.$slideUl.find(".on").position().left - this.elLeft;
        this.$slideUl.css({marginLeft:this.mgLeft});
    }
}
//Search Menu
function searchMenu(){
    var $focusEl;
    var $searchOn = $(".sch .search_con .search_input.focus");
    var searchVal = $searchOn.find("input[type=text]").val();
    if($searchOn.length && searchVal.length>0){
        var tid = $searchOn.find("input[type=text]").attr("id");
        $("label[for="+tid+"]").hide();
    }
    $(".sch .search_con .search_input input[type=text]").focus(function(){
        $(this).parents(".search_input").removeClass("blur").addClass("focus").siblings().removeClass("focus").addClass("blur");
    }).blur(function(){
        var tid = $(this).attr("id");
        $(this).parents(".search_input").removeClass("focus").siblings().removeClass("blur");
        if($searchOn.length){
            $searchOn.addClass("focus").siblings().addClass("blur");
        }
        if($(this).val().length<1){
            if($(this).parents(".search_input").is($searchOn)){
                $(this).val(searchVal);
            } else{
                $("label[for="+tid+"]").show();
            }
        }
        
    }).keyup(function(){
        var tid = $(this).attr("id");
        if($(this).val().length>0){
            $("label[for="+tid+"]").hide();
        }
    })
    $(".sch .search_con .search_input .search_btn").focus(function(){
        $(this).parents(".search_input").removeClass("blur").addClass("focus").siblings().removeClass("focus").addClass("blur");
    
    })
}

function selectCustomById(selector){
    var sles = [];
    $(selector).each(function(i){
        var focused = false;
        var txt = $(this).find("a.default span").text(),
            txtIdx = $(this).find(".option a:contains("+txt+")").parent().index(),
            ols = $(this).find(".option li").length;
        sles[i] = txtIdx < 0 ? 0 : txtIdx;
        $(this).find(".default").on("click",function(e){
            e.preventDefault();
            $(".select").not($(this).parent()).removeClass("show");
            $(this).parent().toggleClass("show");
        }).on("keydown",function(e){
            // space
            if(e.keyCode==32 || event.keyCode == 40){
                e.preventDefault();
                $(this).parent().addClass("show").find("li:eq("+sles[i]+") a").focus();
            }
        })
        $(this).find(".option li a").on("keydown",function(e){
            if(event.keyCode == 40 && !$(this).parent().is(":last-child")){
                //Down
                e.preventDefault();
                $(this).parent().next().find("a").focus();
            } else if(event.keyCode == 38 && !$(this).parent().is(":first-child")){
                //Up
                e.preventDefault();
                $(this).parent().prev().find("a").focus();
            } else if(e.keyCode == 27){
                //ESC
                $(this).parents(".select").removeClass("show").find(">a").focus();
            }
        }).on("mouseenter focusin",function(){
            focused = true;
            $(this).addClass("on").parent().siblings().find("a").removeClass("on");
            cf = $(this).parent().index();
        }).on("mouseleave focusout",function(){
            focused = false;
            $(this).removeClass("on");
        }).bind("focusout",function(){
            focused = false;
            $(this).removeClass("on");
            if($(this).parent().is(":last-child")){
                var $this = $(this);
                setTimeout(function(){
                    if(!focused){
                        $this.parents(".select").removeClass("show");
                    }
                },10);
            }
        });
    })
    $(document).on("click",function(e){
      if(!$(e.target).parents("div").is(".select.show")){
        $(".select").removeClass("show");
        $(".lang").removeClass("on");
      }
    });
}