function validateJS() {
	var numField = $('jsNumField').val();
	var realField = $('jsRealField').val();
	var alphaField = $('jsAlphaField').val();
	var dateField = $('jsDateField').val();
	var alphaNumField = $('jsAlphaNumField').val();

	if (typeof numField === 'number' && (numField % 1) === 0) {
		console.info("num field correct");
	} else {
		console.info("num field invalid");
	}

}