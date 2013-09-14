var photosets = $('.photoset');
photosets.each(function(){
	var images = $(this).children('img');
	var layoutStyle = $(this).data('photosetlayout');
	var rows = layoutStyle.length;
	var tracker = 0;

	for(i=0;i<rows;i++){
		var photosNum = parseInt(layoutStyle[i]);
		var rowFirstPhoto = images.eq(tracker + 0);
		if (photosNum == 1){
			rowFirstPhoto.wrap('<div class="photorow" />');
		}
		else {
			var foo = tracker + photosNum - 1;
			var many  = rowFirstPhoto.nextUntil(images.eq(foo)).add(rowFirstPhoto).add(images.eq(foo));
			many.wrapAll('<div class="photorow" />');
		}
		tracker += photosNum;
	}

	$(this).find('.photorow').each(function(){
		var theImages = $(this).find('img');
		theImages.css('width',100/theImages.length + '%');
	})

});

//change author name
$('.profileName').each(function(){
	var author = $(this).text();
	switch(author){
		case 'slidbook':
			$(this).text('Michael Chen');
	}
});