
// ====== Blocks layout ======

var colCount = 0;
var colWidth = 0;
var margin = 20;
var containerWidth = 0;
var blocks = [];

$(window).load(function(){
	setupBlocks();
	$(window).smartresize(setupBlocks);	
});

function setupBlocks() {
		if ($(window).width() < 465){
			$('.block').each(function(){
				$(this).css({
					'width':'',
					'top':'',
					'left':''
				});
			})
			return
		}
    containerWidth = $('.block-container').width();
    colWidth = $('.block:not(.hero)').outerWidth();
    heroHeight = $('.hero').css('width', colWidth*2+margin).outerHeight() + margin*2;

    blocks=[];
    colCount = Math.floor(containerWidth/(colWidth+margin));
    for(var i=0;i<colCount;i++) {
    	if (i<2){
    	blocks.push(heroHeight);	
    	}
    	else{
		blocks.push(margin);	
    	}
    }

    console.log(blocks);
    console.log(colCount);
    positionBlocks();
}

function positionBlocks() {
    $('.block:not(.hero)').each(function(){
        var min = Array.min(blocks);
        var index = $.inArray(min, blocks);
        var leftPos = margin+(index*(colWidth+margin));
        $(this).css({
            'left':leftPos+'px',
            'top':min+'px'
        });
       	blocks[index] = min+$(this).outerHeight()+margin;
    });
}

// Function to get the Min value in Array
Array.min = function(array) {
    return Math.min.apply(Math, array);
};


(function($,sr){

  // debouncing function from John Hann
  // http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
  var debounce = function (func, threshold, execAsap) {
      var timeout;

      return function debounced () {
          var obj = this, args = arguments;
          function delayed () {
              if (!execAsap)
                  func.apply(obj, args);
              timeout = null;
          };

          if (timeout)
              clearTimeout(timeout);
          else if (execAsap)
              func.apply(obj, args);

          timeout = setTimeout(delayed, threshold || 100);
      };
  }
  // smartresize 
  jQuery.fn[sr] = function(fn){  return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr); };

})(jQuery,'smartresize');


// ===== Show and hide Related Articles =====

$('.block').on('click','.related',function(e){
	e.preventDefault();
	var thisBlock = $(this).closest('.block');
	var thisHeight = thisBlock.outerHeight() - 44 + 'px';
	var thisRelated = thisBlock.find('.related-stories');
	var thisShare = $(this).siblings('.share');
	if(thisRelated.is(':animated')){
		return false;
	}
	else if($(this).hasClass('related-hide')){
		var btn = $(this);
		thisRelated.animate({
			top:thisHeight
		},350,function(){
			$(this).hide();
			btn.text('Related Stories').toggleClass('related-hide');
		});
		thisShare.fadeIn();
	}
	else{
		$(this).text('Hide').toggleClass('related-hide');
		thisRelated.css({
			height:thisHeight,
			top:thisHeight
		});
		thisRelated.show().animate({
			top:'0'
		},350);	
		thisShare.fadeOut();
	}
	
});

// ===== Navbar Search =====
$('.search-btn').click(function(){
	if($('#search-form').hasClass('visible')){
		$(this).next('input').animate({
			width:'0'
		},350);	
		$('#search-form').removeClass('visible');
	}
	else{
		$(this).next('input').animate({
			width:'150px'
		},350);
		$('#search-form').addClass('visible');
	}
	
});

// ===== Date selector and validation =====

// Date selector
    $('#date-form').hide();
	$('#date-form input').attr('value', $('#date').html());
	$('#date, .calendar').click(function() {
		$('.calendar').hide();
		currentDate = $('#date').html();
		$('#date').hide().next().show().next().hide().prev().find('input').attr('value', currentDate);
		_gaq.push(['_trackEvent', 'Page Actions', 'Pick Date']);
	});
	$('#date-form a').click(function() {
		$(this).parent().hide().prev().show().prev().show();
	});
	$("#calendar-link").click(function() {
		$("#date-holder").effect("highlight", {}, 5000);
	});
    


    //date validation
    //var baseFeedTime = 1347419706000;
   	var pgrdad = 'September 2, 2013, 7:00 PM'; //current date and time in this format
	var min_mod = 30;

	function godate(d) {
	d = d.replace(/a\.?m/i, ' am');
	d = d.replace(/p\.?m/i, ' pm');

	var pa = new Array(/^jan/i, /^feb/i, /^mar/i, /^apr/i, /^may/i, /^jun/i, /^jul/i, /^aug/i, /^sep/i, /^oct/i, /^nov/i, /^dec/i);
	var fa = d.split(/[^a-zA-Z0-9]+/g);

	for(var i = 0; i < 12; i++) {
	if(fa[0].match(pa[i])) {
	var ip1 = i + 1;
	fa[0] = ip1 + '';
	}
	}

	var h, m;

	if(fa[3] == '0' || fa[3] == '00' || (fa[0] >= 1 && fa[3] <= 23)) {
	h = parseInt(fa[3], 10);
	m = parseInt(fa[4], 10);
	if(!m) {
	m = 0;
	}
	} else {
	h = 20;
	m = 0;
	}

	m = m - m % min_mod;

	if((fa[4] == 'pm' || fa[5] == 'pm') && h < 12) {
	h += 12;
	} else if((fa[4] == 'am' || fa[5] == 'am') && h == 12) {
	h = 0;
	}

	fa[3] = h + '';
	fa[4] = m + '';

	if((fa[0] >= 1 && fa[0] <= 12) && (fa[1] >= 1 && fa[1] <= 31) && (fa[2] >= 1)) {
	for(var i = 0; i < fa.length; i++) {
	var f = fa[i];
	if(f.length < 2) {
	fa[i] = '0' + f;
	}
	}

	var m2_ad = fa[2].substring(2, 4) + fa[0] + fa[1] + fa[3] + fa[4];
	location = '/a/' + m2_ad;
	} else {
	alert('Please use this format: ' + pgrdad);
	}
	}