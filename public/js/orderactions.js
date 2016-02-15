$(document).ready(function() {

	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});

	// Functionality for cancelling orders:
	$('.cancelOrderModalButton').click( function(){
		var reference = $(this).attr('orderReference');
		$('#orderReference').val(reference);
		$('#orderReferenceSpan').text(reference);
	});

	// Functionality for copying orders:
	$('.copyOrderModalButton').click( function(){
		var reference = $(this).attr('orderReference');
	    var request = $.get('pallets/' + reference + '/get');
	    request.done(function(response) {
	    	//console.log(response);
	    	$.each(response, function(k, v) {
			    $('#order_'+k).val(v);
			});
	    });
	});

    $('#copyOrderButton').click(function(){

    });
});