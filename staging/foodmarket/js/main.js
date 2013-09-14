$('#account-tabs a').click(function (e) {
  e.preventDefault();
  $(this).tab('show');
  $(this).parent().siblings().find('li.active').removeClass('active');
  $(this).next('ul').show();
  $('#item-panel').hide();
  $('.main-table tr.active').removeClass('active');
  $('.expanded').removeClass('expanded');

  if ($(this).parent().is('#my-settings-tab')){
    $('#settings-options li:first a').tab('show');
  }

  if ($(this).parents().is('#my-settings-tab')){
    $("#my-settings-tab").addClass('active').siblings('.active').removeClass('active');
  }

  if ($(this).is('.checkall')){
    $(this).next('ul').find('input').prop('checked',true);
    $('#table-completed tbody tr').show();
  }

});

//Set up delivery
var tableCompleted = $('#table-completed');


tableCompleted.find('input').change(function(){

  if ($(this).parent().is('th')){
    if ($(this).is(':checked')){
      tableCompleted.find('td input').prop('checked',true);  
    }
    else {
      tableCompleted.find('td input').prop('checked',false);    
    }
    
  }
  if ($(this).parent().is('td') && $(this).prop('checked')==false) {
    tableCompleted.find('th input').prop('checked',false)
  }
  (function(){
    var counter = tableCompleted.find('td input:checked');
    if (counter.length > 0){
      $('#item-count').text(counter.length);
      $('#delivery-panel').show();
      $('#item-panel').hide();
    }
    else {
      $('#delivery-panel').hide();
    }
  })();
});
tableCompleted.find('input').click(function(e){
  e.stopPropagation();
});

// *** Popup panel ***

$('.info-panel .nav-tabs a').click(function (e){
  e.preventDefault();
  $(this).tab('show');
})


// Handler for closing panel and notification
$('.close').click(function(e){
  e.preventDefault();
  $(this).closest('div').hide();
  if (!$(this).parent().hasClass('notification')){
    $('.expanded').removeClass('expanded');
    $('.main-table tr.active').removeClass('active');
  }
})


//Click on Item row
$('.main-table:not(.non-item) tbody tr').click(function(){
  $(this).addClass('active').siblings('.active').removeClass('active');
  $(this).closest('table').parent().addClass('expanded');
  activeID = $(this).data('id'); // global var
  BiddingWidget.FetchID(activeID);

});

var BiddingWidget = {

  FetchID : function(id){
    var itemData = GetItemData(id);
    if ($('body').hasClass('auctions-page') || $('body').hasClass('account-page') ){
      var x;
      var itemStatus = itemData.status;
      switch (itemStatus){
        case 'available':
          if (itemData.userBid){
            x = 'edit';
          }
          else{
            x = 'bid';
          }
          break;
        
        case 'ended':
          x = 'ended';
          break;
        case 'purchased':
          x = 'ended';
          break;
        case 'outbidded':
          x = 'ended';
          break;
        case 'transacted':
          x = 'ended';
          break;
        default:
          x = 'bid';
          break;
      }

      BiddingWidget.SetPanel(x);
    }
    BiddingWidget.SetItemData(itemData);
    $('#item-panel').show();
  },

  SetItemData : function(itemData){
    
    $('img#selected-image').attr('src','img/'+itemData['image'])
    $('#the-quantity').text((itemData['userBidQuantity'])? itemData['userBidQuantity'] :'-');
    $('#the-bid').text((itemData['userBidPrice'])? itemData['userBidPrice'].toFixed(2) :'-');
    if (itemData['userBidTotal']){
      $('#the-amount').text(itemData['userBidTotal']);
    }
    if(itemData.userBidStatus == 'winning'){
      $('#selected-userBidStatus').text('Winning').addClass('green');
    }
    else {
      $('#selected-userBidStatus').text('Not Winning').addClass('red');
    }
    for (var dataName in itemData){
      $('b.selected-'+dataName).text(itemData[dataName]);
      if (itemData.userBid){
        if(dataName == 'userBidPrice'){
          $('#input-bid').val(!isNaN(itemData['userBidPrice'])?itemData['userBidPrice']:'');
        }
        if(dataName == 'userBidQuantity'){
          $('#item-panel').find('#input-quantity').val(!isNaN(itemData['userBidQuantity'])?itemData['userBidQuantity']/itemData['tradeUnit']:'');
        }  
      }
    }
    itemRate = itemData['boxWeight'];
    if (!isNaN(itemData['inputquantity']) || !isNaN(itemData['inputbid'])){
        BiddingWidget.Calculate();
      }
  },

  Calculate : function(){
    var numberRegex = /^[+-]?\d+(\.\d+)?([eE][+-]?\d+)?$/;
    var inputBid = parseFloat($('#item-panel').find('#input-bid').val()).toFixed(2);
    var inputQuantity = parseInt($('#item-panel').find('#input-quantity').val());
    var bidPass = numberRegex.test(inputBid);
    var quantityPass = numberRegex.test(inputQuantity);
    
    $('#the-bid').text( bidPass? inputBid : '-');
    $('#the-quantity').text(quantityPass? inputQuantity*10 : '-');

    if( bidPass && quantityPass ){
      var amount = inputBid * itemRate * inputQuantity * 10;
      $('#the-amount').text(amount).digits();
      // extra charges here
      var total = amount + 
        62.12 + //Tariff
        10 + //VAT
        5; //Service Charge
      $('#the-total').text(total).digits();
      $('#the-totalrmb').text((total * 6.123).toFixed(2));
    }

    else {
      $('#the-amount, #the-total, #the-totalrmb').text('-');
    }
  },

  SetPanel: function(type){
    var template;
    switch (type) {
      case "bid" :
        template = '<dl class="primary">\
                      <dt>Current Bid:</dt>\
                      <dd>$<b class="selected-currentBid"></b>/kg</dd>\
                      <dt>Starting Bid:</dt>\
                      <dd>$<b class="selected-startBid"></b>/kg</dd>\
                    </dl>\
                    <dl class="secondary">\
                        <dt>Max Bid:</dt>\
                        <dd>$<b class="selected-maxBid"></b>/kg</dd>\
                        <dt>Quantity:</dt>\
                        <dd><b class="selected-quantity"></b> boxes</dd>\
                    </dl>\
                    <form class="form-horizontal" id="bid-form">\
                        <div class="control-group first">\
                            <label class="control-label" for="input-bid">Bid Price:</label>\
                            <div class="controls">\
                                <input class="text" name="inputBid" type="text" id="input-bid" maxlength="6"/> USD/kg\
                            </div>\
                        </div>\
                        <div class="control-group">\
                            <label class="control-label" for="input-quantity">Quantity:</label>\
                            <div class="controls">\
                                <input class="text" name="inputQuantity" type="text" id="input-quantity" maxlength="6"/> x 10 boxes\
                            </div>\
                        </div>\
                        <dl class="time">\
                            <dt class="time">Time Left:</dt>\
                            <dd class="time"><b class="selected-time">&nbsp;</b></dd>\
                        </dl>\
                        <button type="submit" class="btn">Place your bid</button>\
                    </form>';
        break;
        case 'edit':
          template = '<dl class="primary">\
                            <dt>Current Bid:</dt>\
                            <dd>$<b class="selected-currentBid"></b>/kg</dd>\
                            <dt>Starting Bid:</dt>\
                            <dd>$<b class="selected-startBid"></b>/kg</dd>\
                        </dl>\
                        <dl class="secondary">\
                            <dt>Max Bid:</dt>\
                            <dd>$<b class="selected-maxBid"></b>/kg</dd>\
                            <dt>Quantity:</dt>\
                            <dd><b class="selected-quantity"></b> boxes</dd>\
                        </dl>\
                        <div class="bid-summary">\
                          <strong class="title">You made a bid</strong>\
                            <p><strong>$<b class="selected-userBidPrice">30</b>/kg</strong> for <b class="selected-userBidQuantity">30</b> boxes</p>\
                            <div class="bid-meta">\
                              <span class="pull-left">($<b class="selected-userBidTotal"></b> USD)</span>\
                              <span class="pull-right"><b class="selected-userBidTime"></b></span>\
                            </div>\
                        </div>\
                        <form class="form-horizontal" id="bid-form">\
                            <dl class="time">\
                              <dt class="time">Time Left:</dt>\
                              <dd class="time"><b class="selected-time">2:00:00</b></dd>\
                            </dl>\
                            <span class="pull-right"><b id="selected-userBidStatus"></b></span>\
                            <button type="submit" class="btn edit">Edit your bid</button>\
                        </form>';
          break;

        case 'ended':
          template = '<dl class="primary">\
                            <dt>Trans. Price:</dt>\
                            <dd>$<b class="selected-transPrice"></b>/kg</dd>\
                            <dt>Quantity:</dt>\
                            <dd><b class="selected-userBidQuantity"></b> boxes</dd>\
                        </dl>\
                        <dl class="secondary">\
                            <dt>Max Bid:</dt>\
                            <dd>$<b class="selected-maxBid"></b>/kg</dd>\
                            <dt>Starting Bid:</dt>\
                            <dd>$<b class="selected-startBid"></b>/kg</dd>\
                        </dl>\
                        <div class="not-available">\
                            <dl class="time">\
                                <dt>Bidding Ended:</dt>\
                                <dd><b class="selected-time"></b></dd>\
                            </dl>\
                            <span class="disabled-reason">You bidded $<b class="selected-userBidPrice"></b>/kg for <b class="selected-userBidQuantity"></b> boxes</span>\
                            <button class="btn disabled">Bidding Ended</button>\
                        </div>';
          break;

    }
    $('.bidding-panel').html(template);
    $('#input-bid, #input-quantity').numeric();
    validateBidForm();
  }

}

function GetItemData(thisId){
  var temp = itemsdb.filter(function(el){
      return el.id == thisId;
    });
  return temp[0];
}

//Keyup handler for bid input
 $('#item-panel').on('keyup','#input-bid, #input-quantity',function(){
    BiddingWidget.Calculate();
  });


$('.bidding-panel').on('click','button.edit',function(e){
  e.preventDefault();
  BiddingWidget.SetPanel('bid');
  BiddingWidget.SetItemData(GetItemData(activeID));
  
})

 //":focus" on bid panel triggers "Cost Breakdown" tab
$('.bidding-panel').on('focus','input',function(){
  $('.info-panel .nav-tabs li:last a').tab('show');
});

//Change delivery address
$('.address-box').click(function(e){
  e.preventDefault();
  $(this).parent().addClass('active').siblings('.active').removeClass('active');
})

//Delivery address - add address
$('#delivery-address .add a').click(function(){
  AccountSwap('delivery-address-add');
});
$('#delivery-address-add .cancel').click(function(){
  AccountSwap('delivery-address');
})

//View credits - datepicker
$('.search-credits input').datepicker();

//Deliveries - view bill
$('#deliveries tr').click(function(){
  AccountSwap('delivery-bill');
})

//Completed bids - set up delivery
$('#delivery-panel a').click(function(e){
  e.preventDefault();
  AccountSwap('delivery-bill','pick-up-point');
})


// select pickup location
$('#transport-type').change(function(e){
    var value = $(this).val();
    if (value == 0){
        $("#pickup-point-sea").removeClass("hidden");
        $("#pickup-point-air").removeClass("hidden");
        $("#pickup-point-sea").addClass("hidden");
    } else if (value == 1) {
        $("#pickup-point-sea").removeClass("hidden");
        $("#pickup-point-air").removeClass("hidden");
        $("#pickup-point-air").addClass("hidden");
    }
})

$('#pick-up-point .confirm').click(function(e){
    e.preventDefault(); 
    AccountSwap('generate-transaction-sheet');
});

$('#pick-up-point .cancel').click(function(e){
  AccountSwap('completed-bids');
});

$('#generate-transaction-sheet .confirm').click(function(e){
    e.preventDefault(); 
    AccountSwap('delivery-bill');
});

$('#generate-transaction-sheet .cancel').click(function(e){
  e.preventDefault();
  AccountSwap('pick-up-point');
});

$('input[name=agency]').change(function(e){
    var currentSelect = $(this);
    if(currentSelect.val() == "0") {
        $("#select-company").removeClass("hide");
    } else {
        $("#select-company").addClass("hide");
    }
});

//Delivery bill - view all
$('#delivery-bill .back').click(function(){
  AccountSwap('deliveries');
});


// date picker for sign up page
$("#birthday").datepicker();

//Dashboard links
$('#dashboard').on('click','a',function(e){
  e.preventDefault();
  if ($(this).hasClass('view-all')){
    if($(this).parent().hasClass('next-ending')){
      AccountSwap('ongoing-bids','ongoing-bids-tab');
    }
    else if($(this).parent().hasClass('next-delivery')){
      AccountSwap('deliveries','deliveries-tab');
    }  
  }
  else if($(this).hasClass('view-delivery')){
    AccountSwap('delivery-bill','deliveries-tab');
  }
  
})

//Filtering widget
$('.search-term > input').focus(function(){
  $('.top-search').show();
}).blur(function(){
  $('.top-search').hide();
});

$('.search-term').submit(function(e){
  e.preventDefault();
  InitFilter();
})

$('.search-term >input').change(function(){
  InitFilter();
});

$('.top-search').on('mousedown','a',function(){
  $('.search-term > input').val($(this).text()).change();
});

$('.filter-col').on('click','a,:checkbox',function(e){
  if($(this).closest('div').hasClass('food-type')){
    e.preventDefault();
    $(this).parent().addClass('active').siblings('.active').removeClass('active');
  }
  InitFilter();
});

function InitFilter(){
  $('.main-table tbody tr').hide();
    var filteredName = $.trim($('.search-term > input').val().toLowerCase());
    var filteredFood = new Array();
    var filteredAuction = new Array();

    if($('.food-type .active a').hasClass('all')){
      $('.food-type li.inner a').each(function(){
        filteredFood.push($(this).attr('class'));
      });
    }
    else{
      filteredFood.push($('.food-type .active a').attr('class'));
    }

    if ($('.auction-type :checkbox:checked').length == 0){
      $('.auction-type :checkbox').each(function(){
        filteredAuction.push($(this).val());
      });
    }
    else {
      $('.auction-type :checkbox:checked').each(function(){
        filteredAuction.push($(this).val());
      })
    }

    if (filteredName){
      var filteredList = $('.main-table tbody tr').filter(function(){
        return ($(this).find('.item-name').text().toLowerCase()).indexOf(filteredName) >= 0;
      });  
    }
    else {
      var filteredList = $('.main-table tbody tr');
    }

    $.each(filteredFood,function(i,v){
      var filteredList2 = filteredList.filter('[data-food="'+v+'"]');
      $.each(filteredAuction,function(i,v){
        filteredList2.filter('[data-auction="'+v+'"]').show();
      });
    });

}


//filter completed bids
$('#completed-bids-tab li').on('click','input', function(e){
  $('#table-completed tbody tr').hide();
  $('#completed-bids-tab li :checkbox:checked').each(function(){
    $('#table-completed tr[data-status='+this.value+']').show();
  })
});

function AccountSwap(pane,tab){
  $('#'+pane).addClass('active').siblings('.active').removeClass('active');
  if (tab){
    $('#my-settings-tab  >ul >li.active').removeClass('active');
    $('#'+tab).addClass('active').siblings('.active').removeClass('active');
  }
}

// url query handler
$.urlParam = function(name){
  var results = new RegExp('[\\?&]' + name + '=([^&#]*)').exec(window.location.href);
  if (!results) { return 0; }
  return results[1] || 0;
}
var query = $.urlParam('itemid');
if (query != 0) {
  BiddingWidget.FetchID(query);
  $('.main-table tr[data-id='+query+']').addClass('active');
}

//add comma to number 
$.fn.digits = function(){ 
    return this.each(function(){ 
        $(this).text( $(this).text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") ); 
    })
}
