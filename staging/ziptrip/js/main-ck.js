$(".deal-single").on("click","a",function(e){e.preventDefault();var t=$(this),n=$(this).closest(".deal-single");if(t.hasClass("btn-show")){n.find(".summary").css("position","absolute").fadeOut();n.find(".details").slideDown().animate({opacity:1},{queue:!1})}else if(t.hasClass("btn-hide")){n.find(".summary").fadeIn(function(){$(this).css("position","static")});n.find(".details").slideUp().animate({opacity:0},{queue:!1})}else t.hasClass("favourite")&&t.toggleClass("active")});$(".deals-group > header .btn-toggle").click(function(){var e=$(this),t=e.text(),n=e.data("alt");e.text(n);e.data("alt",t);e.closest("header").next().slideToggle()});$(".bs-example-tooltips button").popover();$('.deal-search .text[data-type="to-date"], .deal-search .text[data-type="from-date"]').datepicker();var skycons=new Skycons({color:"black"});skycons.add(document.getElementById("skycon-rain"),Skycons.RAIN);skycons.play();