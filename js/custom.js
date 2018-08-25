$(document).ready(function(){
	$("#watcherForm").validate({
		rules: {
			fullName: {
				required: true,
				minlength: 2
			},
			nationality: {
				required: true
			},
			identification: {
				required: true
			},
			residence: {
				required: true,
				minlength: 2
			},
			phoneNumber: {
				required: true,
				minlength: 10,
				maxlength:10,
			},
			
			email: {
				required: true,
				email: true
			},
			gender: {
				required: true
			},
			accountNumber: {
				required: true,
			},
			bankName: {
				required: true
			},
			holderName: {
				required: true,
				minlength: 2
			},
			iban: {
				required: true
			},
			countryOfBank: {
				required: true
			},
			termsCondition:{
				required: true
			}
		},
		messages: {
			fullName: "Please enter your full name",
			nationality: "Please select your nationality",
			identification: {
				required: "Please choose identification"
			},
			residence: {
				required: "Please enter residence"
			},
			phoneNumber: {
				required: "Please provide a phone number",
				minlength: "Your phone number 10 degit"
			},
			email: "Please enter a valid email address",
			gender: "Please select your gender",
			accountNumber: "Please enter your account number",
			bankName: "Please enter your account number",
			holderName: "Please enter your account number",
			iban: "Please enter your account number",
			countryOfBank: "Please enter your account number",
			termsCondition: "Please agree terms & condition"
		},
		submitHandler: function(form) {
			form.submit();
		}
	});

	$("#arWatcherForm").validate({
		rules: {
			fullName: {
				required: true,
				minlength: 2
			},
			nationality: {
				required: true
			},
			identification: {
				required: true
			},
			residence: {
				required: true,
				minlength: 2
			},
			phoneNumber: {
				required: true,
				minlength: 10,
				maxlength:10,
			},
			
			email: {
				required: true,
				email: true
			},
			gender: {
				required: true
			},
			accountNumber: {
				required: true,
			},
			bankName: {
				required: true
			},
			holderName: {
				required: true,
				minlength: 2
			},
			iban: {
				required: true
			},
			countryOfBank: {
				required: true
			},
			termsCondition:{
				required: true
			}
		},
		messages: {
			fullName: "Please enter your full name",
			nationality: "Please select your nationality",
			identification: {
				required: "Please choose identification"
			},
			residence: {
				required: "Please enter residence"
			},
			phoneNumber: {
				required: "Please provide a phone number",
				minlength: "Your phone number 10 degit"
			},
			email: "Please enter a valid email address",
			gender: "Please select your gender",
			accountNumber: "Please enter your account number",
			bankName: "Please enter your account number",
			holderName: "Please enter your account number",
			iban: "Please enter your account number",
			countryOfBank: "Please enter your account number",
			termsCondition: "Please agree terms & condition"
		},
		submitHandler: function(form) {
			form.submit();
		}
	});
});