$(document).ready(function() {
	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});

	calculatePrice('#priceTotal','.orderPalletOption');

	$('.orderPalletOption').bind('click keyup', function(){
        calculatePrice('#priceTotal','.orderPalletOption');
    });

    $('.modalOrderPalletOption').bind('click keyup', function(){
        calculatePrice('#modalPriceTotal','.modalOrderPalletOption');
    });

	// Functionality for cancelling orders:
	$('#table').on('click', '.cancelOrderModalButton', function() {
		var reference = $(this).attr('orderReference');
		$('#orderReference').val(reference);
		$('.orderReferenceSpan').text(reference);
	});

	// Functionality for copying orders:
	$('#table').on('click', '.copyOrderModalButtonn', function() {
		$('#orderModalHeadline').text('Copy a previous order');
		$('#orderModalButton').text('Place Order');
		var reference = $(this).attr('orderReference');
	    var request = $.get('pallets/' + reference + '/get');
	    request.done(function(response) {
	    	//console.log(response);
	    	$.each(response, function(k, v) {
			    $('#order_'+k).val(v);
			});
			calculatePrice('#modalPriceTotal','.modalOrderPalletOption');
	    });
	});

	// Functionality for editing orders:
	$('#table').on('click', '.editOrderModalButton', function() {
    	$('#orderModalHeadline').text('Edit an order');
		$('#putOrderModal').html('<input type="hidden" name="_method" value="PUT">');
		$('#orderModalButton').text('Save Changes');
    	var reference = $(this).attr('orderReference');
	    var request = $.get('pallets/' + reference + '/get');
	    request.done(function(response) {
	    	//console.log(response);
	    	$.each(response, function(k, v) {
			    $('#order_'+k).val(v);
			});
			$('#order_remark').val('');
			calculatePrice('#modalPriceTotal','.modalOrderPalletOption');
	    });
    });
});

function calculatePrice(targetObject, sourceClass){
    var sum = 0;
    $(sourceClass).each(function() {
        sum += $(this).val() * Number($(this).attr('unitsperbox')) * Number($(this).attr('boxesperpallet')) * Number($(this).attr('mass')) * Number($(this).attr('price'));
    });
    sum = sum.toFixed(2);
    $(targetObject).text(sum);
}