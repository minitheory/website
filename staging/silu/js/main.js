messagesHeight();

$(window).resize(function(){
	messagesHeight();

});

function messagesHeight(){
	msgHeight=0;
	boxHeight = $('.messages-col').height() - $('.messages-col .reply').outerHeight();
	$('.message-list li').each(function(){
		msgHeight += $(this).outerHeight();
	});
	if (boxHeight < msgHeight){
		$('.messages-holder').css('height',boxHeight);
	}
	else {
		$('.messages-holder').css('height',msgHeight);		
	}
	
}
if ($('.messages').length > 0){
	$('.messages-col .scroll-window').nanoScroller({
		contentClass : 'scroll-content',
		scroll:'bottom'
	});

	$('.users-col .scroll-window').nanoScroller({
		contentClass : 'scroll-content'
	});	
}

if($('#reply-message').length > 0){
	var textarea = $('#reply-message');
	textarea.keyup(function(){
		if (textarea.val()==''){
			$('#reply-btn').addClass('disabled').prop('disabled',true);
		}
		else{
			$('#reply-btn').removeClass('disabled').prop('disabled',false)
		}
	});
}

$('.btn').click(function(e){
	e.preventDefault();
	var thisBtn = $(this);
	thisBtn.not('.btn-primary').toggleClass('active');
	if (thisBtn.is('.btn-follow')){
		if(thisBtn.hasClass('active')){
			thisBtn.text('Following');
			thisBtn.hover(function(){
				thisBtn.text('Unfollow');
			}, function(){thisBtn.text('Following');});	
		}
		else{
			thisBtn.text('Follow').unbind('mouseenter mouseleave');
		}
	}
	else if (thisBtn.is('.btn-connect')){
		if(thisBtn.hasClass('active')){
			thisBtn.text('+ Connected');
		}
		else{
			thisBtn.text('+ Connect');
		}
	}
	
});