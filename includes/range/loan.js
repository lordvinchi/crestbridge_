 $(function() {

        var $document   = $(document),
            selector    = '[data-rangeslider]',
            $element    = $(selector);

        // Example functionality to demonstrate a value feedback
        function valueOutput(element) {
            var value = element.value,
            output = element.parentNode.getElementsByTagName('output')[0];
            output.innerHTML = value;
        }
        for (var i = $element.length - 1; i >= 0; i--) {
            valueOutput($element[i]);
        };
        $document.on('change', 'input[type="range"]', function(e) {
            valueOutput(e.target);
        });
		

		
		// Programmatic borrowing value changes
        $document.on('change', 'input[name="borrowingvalue"]', function(e) {
            var $poodle = $('input[name="borrowamnt"]', e.target.parentNode),
                value = $('input[name="borrowingvalue"]', e.target.parentNode)[0].value;
				
				//$('input[name="borrowingvalue"]').attr("min", ($(".lowamount").text()) );
				//$('input[name="borrowingvalue"]').attr("max", ($(".highamount").text()) );
				

            $poodle.val(value).change();
        });
		
		
        $document.on('blur', 'input[name="borrowamnt"]', function(e) {
            var $inputRange = $('input[name="borrowingvalue"]', e.target.parentNode),
                value = $('input[name="borrowamnt"]', e.target.parentNode)[0].value;

            $inputRange.val(value).change();
			change();
        });
		
		// Programmatic borrowing time changes
        $document.on('change', 'input[name="borrowingtime"]', function(e) {
            var $poodle = $('input[name="borrowlngth"]', e.target.parentNode),
                value = $('input[name="borrowingtime"]', e.target.parentNode)[0].value;
				
				//$('input[name="borrowingtime"]').attr("min", ($(".minterm").text()) );
				//$('input[name="borrowingtime"]').attr("max", ($(".maxterm").text()) );				

            $poodle.val(value).change();
        });
		
        $document.on('blur', 'input[name="borrowlngth"]', function(e) {
            var $inputRange = $('input[name="borrowingtime"]', e.target.parentNode),
                value = $('input[name="borrowlngth"]', e.target.parentNode)[0].value;

            $inputRange.val(value).change();
			change();
        });
		
		
		$document.on('change', '#prodesc', function(e) {
			if($("#prodesc").val() === 'Child Benefit Loan'){
			$('input[name="borrowingvalue"]').attr("min", 200);
			$('input[name="borrowingvalue"]').attr("max", 500);
			$('input[name="borrowingtime"]').attr("min", 1);
			$('input[name="borrowingtime"]').attr("max", 12);	
				$('input[name="borrowingtime"]').val(3).change();
				$('input[name="borrowingvalue"]').val(150).change();
				change();
				change();				
			}	
			else if($("#prodesc").val() === 'Standard Loan'){
			$('input[name="borrowingvalue"]').attr("min", 200);
			$('input[name="borrowingvalue"]').attr("max", 7500);
			$('input[name="borrowingtime"]').attr("min", 1);
			$('input[name="borrowingtime"]').attr("max", 60);	
				$('input[name="borrowingtime"]').val(3).change();
				$('input[name="borrowingvalue"]').val(500).change();
				change();
				change();				
			}	
			else if($("#prodesc").val() === 'Home Owner Loan'){
			$('input[name="borrowingvalue"]').attr("min", 7500);
			$('input[name="borrowingvalue"]').attr("max", 15000);
			$('input[name="borrowingtime"]').attr("min", 12);
			$('input[name="borrowingtime"]').attr("max", 60);	
				$('input[name="borrowingtime"]').val(3).change();
				$('input[name="borrowingvalue"]').val(1550).change();
				change();
				change();				
			}													
		});

		
		     
        // Basic rangeslider initialization
        $element.rangeslider({

            // Deactivate the feature detection
            polyfill: false,

            // Callback function
            onInit: function() {
				change();
				},

            // Callback function
            onSlide: function(position, value) {
                console.log('onSlide');
                console.log('position: ' + position, 'value: ' + value);
				
					var firstDivContent = document.getElementById('op2');
					var secondDivContent = document.getElementById('text2');
					secondDivContent.innerHTML = firstDivContent.innerHTML;
					
					var thirdDivContent = document.getElementById('op1');
					var fourthDivContent = document.getElementById('text1');
					fourthDivContent.innerHTML = thirdDivContent.innerHTML;
					
					 //change();


            },

            // Callback function
            onSlideEnd: function(position, value) {
                console.log('onSlideEnd');
                console.log('position: ' + position, 'value: ' + value);
				
				change();
				change();
            }
        });

    });
	
	var firstDivContent = document.getElementById('text2');
var secondDivContent = document.getElementById('text1');
secondDivContent.innerHTML = firstDivContent.innerHTML;

	$('select[name="prodesc"]').change(function() {
					$('.rangeslider').removeClass( 'rangeslider--disabled' ); 
		change();
		change();
});

$('select[name="prodesc"]').change(function() {
	$(".apronsim").css({"opacity":"1"});					
});


	