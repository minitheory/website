$(function(){
	var numberRegex = /^[+-]?\d+(\.\d+)?([eE][+-]?\d+)?$/;
	var tabs = $('.vertical-tabs');
	$('a').click(function(e){e.preventDefault();})
	tabs.find('.title a').click(function(){
		tabs.find('.section.active').removeClass('active').find('.content').hide();
		$(this).closest('.section').addClass('active').find('.content').show();
	});

	$('.food-type li a').click(function(){
		var bar = $(this).parent().index();
		$('.food-type').find('li:eq('+bar+')').addClass('active').siblings('.active').removeClass('active');
	})

	$('#unit-price').keyup(function(){
		var val = $(this).val();
		if (numberRegex.test(val)){
			val = val* $(this).data('rate');
			$(this).next().text('($'+val+' / 箱)');
		}
	});

	$('#unit-price, #quantity').keyup(function(){
		if( numberRegex.test($('#unit-price').val()) && numberRegex.test($('#quantity').val()) ){
			var totalUSD = $('#unit-price').val() * $('#unit-price').data('rate') * $('#quantity').val() * 10;
			$('#total-usd').text('U$'+totalUSD);
			$('#total-rmb').text('￥'+ (totalUSD * 6.123).toFixed(2));
		}
	});

	$('.auction tr').click(function(){
		$('.auction .active').removeClass('active');
		var itemName = $(this).attr('class').trim();
		$(this).addClass('active');

		var theBox = $('#right-panel');
		theBox.find('.item-name').text(seafood[itemName]['name']);
		theBox.find('.item-img').attr('src','img/'+itemName+'.jpg');
		theBox.find('.item-start-bid').text('U$'+seafood[itemName]['bidStart']);
		theBox.find('.item-country').text(seafood[itemName]['country']);
		theBox.find('.item-highest-bid').text('U$'+seafood[itemName]['bidHighest']);
		theBox.find('.item-serial').text(seafood[itemName]['serial']);
		theBox.find('.item-specification').text(seafood[itemName]['specification']+'kg/箱');
		$('#unit-price').data('rate',seafood[itemName]['specification']);
		$('#quantity, #unit-price').val('');
		$('#total-usd, #total-rmb').text(' - ');

		$('#unit-price').next().text('($0/箱)');
	});
});