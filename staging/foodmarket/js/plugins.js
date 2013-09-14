// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.
if ($('#login-form').length > 0) {
    $('#login-form').validate({
    rules:{
        loginUsername :{
            required:true
        },

        loginPassword : {
            required:true
        }
    }
});
}

if ($('#password-form').length > 0) {
    $('#password-form').validate({
        rules:{
            currentPassword:{
                required:true
            },
            newPassword:{
                required:true,
                minlength:5
            },
            confirmPassword:{
                required:true,
                minlength:5,
                equalTo: '[name="newPassword"]'
            }
        }
    })
}


function validateBidForm(){
    $('#bid-form').validate({
        rules:{
            inputBid:{
                required:true,
                digits:true,
                max: 86
            },
            inputQuantity:{
                required:true,
                digits:true,
                max:100
            }
        },
        messages:{
            inputBid:{
                max:'Price must be less than &#36;{0}/kg'
            },
            inputQuantity:{
                max:'Quantity must be less than {0}'
            }
        }
    });   

}


$('#table-auctions').tablesorter({
    headers:{
        0:{sorter:false},
        1: {sorter:false},
        2: {sorter:false},
        3: {sorter:false},
        4: {sorter:false},
        5: {sorter:false},
        7:{sorter:"relativeTime"}
    }
});

$('table-upcoming').tablesorter({
    dateFormat:"uk",
    headers:{
        0:{sorter:false},
        1: {sorter:false},
        2: {sorter:false},
        3: {sorter:false},
        4: {sorter:false},
        5: {sorter:false},
        7:{sorter:"ddmmyy"}
    }
});

$('#table-history').tablesorter({
    dateFormat: "uk",
    headers:{
        0:{sorter:false},
        1: {sorter:false},
        2: {sorter:false},
        3: {sorter:false},
        4: {sorter:false},
        6: {sorter:"ddmmyy"}
    }
});