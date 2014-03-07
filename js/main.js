$('document').ready(function() {

	$('#chevron, #submit').on('click', function(e) {

		var data = {
			action : 'newsletter',
			email  : $('#email').val()
		}

		if (data.email == '') {
			$('#msg').html('Por favor no olvides tu email : )');
		} else {
			$.post( "index.php", data, function( response ) {
		  	$('#email').val( response );
			});
		}
		e.preventDefault();
		e.stopPropagation();

	});

});