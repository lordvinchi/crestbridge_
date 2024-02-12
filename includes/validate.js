//$.validator.setDefaults({
//	submitHandler: function() { alert("submitted!"); }
// });

$().ready(function() {
	// validate the comment form when it is submitted
	$("#manual-form").validate();
	
	/* */
	$.validator.addMethod("numspace", function(value, element) {
        return this.optional(element) || /^\d(\s*\d)*$/i.test(value);
    }, "must be a number");	
	
	/* */
	 $.validator.addMethod("valueNotEquals", function(value, element, arg){
	  return arg != value;
	 }, "Value must not equal arg.");
	
	/* */	 
// Validation method for UK currency
$.validator.addMethod("currency", function (value, element) {
  return this.optional(element) || /^\xA3?\d{1,3}?([,]\d{3}|\d)*?([.]\d{1,2})?$/.test(value);
}, "Please specify a valid amount"); 

	/* */	 
// Validation method for date
$.validator.addMethod("date", function (value, element) {
  return this.optional(element) || /^(\d{1,2})\/(\d{1,2})\/(\d{4})$/.test(value);
}, "Please specify a valid amount"); 


	// validate signup form on keyup and submit
	$("#a-form").validate({
		rules: {
			name: "required",
			memno: {required: true,	numspace: true},
			UserEmail: "required",
			currency: { valueNotEquals: "na" },
			amount: {required: true, currency: true},
			datereq: {required: true,	date: true},
			phone: {required: true,	numspace: true}
			},
		messages: {
			name: "",
			memno: "",
			UserEmail: "",
			currency: "",
			amount: "",
			datereq: "",
			phone: ""
		}
	});

	// propose username by combining first- and lastname
	$("#username").focus(function() {
		var firstname = $("#firstname").val();
		var lastname = $("#lastname").val();
		if(firstname && lastname && !this.value) {
			this.value = firstname + "." + lastname;
		}
	});

	//code to hide topic selection, disable for demo
	var newsletter = $("#newsletter");
	// newsletter topics are optional, hide at first
	var inital = newsletter.is(":checked");
	var topics = $("#newsletter_topics")[inital ? "removeClass" : "addClass"]("gray");
	var topicInputs = topics.find("input").attr("disabled", !inital);
	// show when newsletter is checked
	newsletter.click(function() {
		topics[this.checked ? "removeClass" : "addClass"]("gray");
		topicInputs.attr("disabled", !this.checked);
	});
});

