
$('.deal-single').on('click','a',function(e){
	e.preventDefault();
	var thisBtn = $(this);
	var thisDeal = $(this).closest('.deal-single');
	if (thisBtn.hasClass('btn-show')){
		thisDeal.find('.summary').css('position','absolute').fadeOut();
		thisDeal.find('.details').slideDown().animate({'opacity':1},{queue:false});
	}
	else if (thisBtn.hasClass('btn-hide')){
		thisDeal.find('.summary').fadeIn(function(){
			$(this).css('position','static');
		});
		thisDeal.find('.details').slideUp().animate({'opacity':0},{queue:false});
	}
	else if(thisBtn.hasClass('favourite')){
		thisBtn.toggleClass('active');
	}
});

$('.deals-group > header .btn-toggle').click(function(){
	var thisBtn = $(this);
	var temp = thisBtn.text();
	var alt = thisBtn.data('alt');
	thisBtn.text(alt);
	thisBtn.data('alt',temp);
	thisBtn.closest('header').next().slideToggle();
});

//example popover
$('.bs-example-tooltips button').popover();

// Jumbotron autocomplete
/*$('.deal-search .text[data-type="to-date"]').datetimepicker({
      language: 'en',
      maskInput: true
    });*/

$('.deal-search .text[data-type="to-date"], .deal-search .text[data-type="from-date"]').datepicker();

//skycons

var skycons = new Skycons({"color": "black"});

  // you can add a canvas by it's ID...
  //skycons.add("icon2", Skycons.PARTLY_CLOUDY_DAY);

  // ...or by the canvas DOM element itself.
  skycons.add(document.getElementById("skycon-rain"), Skycons.RAIN);
  

  // start animation!
  skycons.play();

  // you can also halt animation with skycons.pause()

  // want to change the icon? no problem:
  //skycons.set("icon2", Skycons.PARTLY_CLOUDY_NIGHT);

  // want to remove one altogether? no problem:
  //skycons.remove("icon2");