$(document).ready(function() {

	$('.cancelOrderModalButton').click( function(){
		var reference = $(this).attr('orderReference');
		$('#orderReference').val(reference);
		$('#orderReferenceSpan').text(reference);
	});

	// Functionality for cancelling orders:
	$('#cancelOrderButton').click( function () {
        var reference = $('#orderReference').val();
        $.ajax({
            type: "POST",
            url: 'orders/pallets/cancel',
            data: {reference: reference},
            success: function( msg ) {
                $("#ajaxResponse").append("<div>"+msg+"</div>");
            }
        });
    });
});