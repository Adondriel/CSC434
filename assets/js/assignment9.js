function validateJS() {
	var numField = Number($('#jsNumField').val());
	var realField = Number($('#jsRealField').val());
	var alphaField = $('#jsAlphaField').val();
	var dateField = $('#jsDateField').val();
	var alphaNumField = $('#jsAlphaNumField').val();

	//console.info(typeof numField);
	//console.info(typeof realField);
	//console.info(realField);
	//console.info(typeof alphaField);
	//console.info(typeof dateField);
	//console.info(typeof alphaNumField);
	//
	//Check the numField.
	if (typeof numField === 'number' && (numField % 1) === 0 && (numField >= 1 && numField <= 100)) {
		$('#jsNumArea').removeClass('has-error');
	} else {
		$('#jsNumArea').addClass('has-error');
	}
	//check the real field to make sure it is a decimal value, and not an integer.
	if (typeof realField === 'number' && (realField % 1) != 0) {
		$('#jsRealArea').removeClass('has-error');
	} else {
		$('#jsRealArea').addClass('has-error');
	}
	//check to make sure it is ONLY alpha characters.
	if (typeof alphaField === 'string' && alphaField.match(/^[a-zA-Z]+$/)) {
		$('#jsAlphaArea').removeClass('has-error');
	} else {
		$('#jsAlphaArea').addClass('has-error');
	}

	//
	// regex: /(([0-9][0-9])\/)\1\2/
	// just learned you can actually make subgroups within the one group, and still reference back to them. \1 is the whole of ##/ format while \2 is just the ## format, so this says, match a ##/ then another ##/ then a ## and make sure there are no other characters after the last set of ##.
	// matches the exact format of ##/##/## 
	if (typeof dateField === 'string' && dateField.match(/(([0-9][0-9])\/)\1\2/)) {
		$('#jsDateArea').removeClass('has-error');
	} else {
		$('#jsDateArea').addClass('has-error');
	}

	//check to make sure it is alphaNumeric characters.
	if (typeof alphaNumField === 'string' && alphaNumField.match(/^[A-F0-9]+$/)) {
		$('#jsAlphaNumArea').removeClass('has-error');
	} else {
		$('#jsAlphaNumArea').addClass('has-error');
	}
}

$('#phpValidation').submit(function (e) {
	e.preventDefault();
});

function validatePHP() {
	$.ajax({
		url: "assets/classes/fsa9.php",
		type: "POST",
		data: $('#phpValidation').serialize(),
		dataType: 'json',
		cache: false,
		success: function (data) {
			if (data.error) {
				$('#errorAlertBox').text("");
				for (var i = 0; i < data.errorMsg.length; i++) {
					$('#errorAlertBox').append("<p>" + data.errorMsg[i] + "</p>");
				}
				$('#errorAlertBox').removeClass("hidden");
				$('#successAlertBox').addClass("hidden");
			} else {
				console.info("no error");
				$('#errorAlertBox').addClass("hidden");
				$('#successAlertBox').removeClass("hidden");
			}
			//console.info(data);
		},
		error: function (data) {
			console.info("there was error.");
		}
	});
}