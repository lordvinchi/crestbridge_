<div class="coaster">
	<div class="row">
    <div style="padding:20px 0; overflow:hidden; color:White;">
    	
        <div class="grid_5" style="background:url(<?php echo base_url('assets/images/HCU-row-of-people2.jpg')?>) no-repeat; background-size:cover; height:309px; margin-top:-30px;">
        <p></p>
        </div>
        <div class="grid_7 coaster-slider cs-screen">
<!-- <div class="page-loader" style="position:absolute; z-index:2; background:rgba(0,0,0,0.8); width:100%; height:100%; top:0; left:0; text-align:center;">
<span class="loader"><span class="loader-inner"></span></span>
</div>         -->
<!-- -->
<h2 class="slidewraptitle">Borrow with us</h2>
<div class="slidewrap">
  <form name="theform" id="theform" method="GET"> 
  <div id="result" style="display:none;">

<script>
function change(){
//
var borrowingvalue = $('input[name="borrowingvalue"]');
var prodesc = $('#prodesc option:selected');
var data = 'borrowingvalue=' + borrowingvalue.val();
var data2 = prodesc.val();

   $.ajax({ type: "GET",   
       url: "productcalc.php",   
       async: false,
   data: {borrowing: data, prodesc:data2},
       success : function(text)
       {
           $('#result').html(text);
       }
  });
//	        
  var bval = $("#borrowingvalue").val();
var btime = $("#borrowingtime").val();

var APR = "5.9";
var IR = "5.00";
var prod = "na";


var rate = IR/1200; 
var power = Math.pow( (1+rate),parseFloat(btime) );
var power2 = 1 / power
  

  var total;    
total = parseFloat(bval) * (rate / (1 - power2) );
total = total.toFixed(2);

var totalrepay = parseFloat(btime) * total
totalrepay = totalrepay.toFixed(2);
  
  $(".APR").text(APR);
$(".total").text(total);
$(".totalrepay").text(totalrepay);
$(".prodesc").text(prod);
  //alert(total);
}
</script></div>
  <!-- -->
  
      <div style="padding:20px 0 0 0;">
      <span style="color:white;">I would like to borrow on the &nbsp; <div class="show-mobile"><br><br></div>
      <select id="prodesc" name="prodesc">
        <option value="na">Select</option>
        <option value="Child Benefit Loan">Child Benefit</option>
        <option value="Standard Loan">Standard</option>
        <option value="Home Owner Loan">Home Owner</option>
      </select> &nbsp; loan product</span>
      </div>
   
  <!-- -->  
          <div>
              <div class="show-mobile"><br></div>
              <input name="borrowingvalue" id="borrowingvalue" type="range" min="50" max="15000" step="50" value="250" data-rangeslider="" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;">
              <div class="rangeslider" id="js-rangeslider-0">
                <div class="rangeslider__fill" style="width: 100.751px;"></div>
                <div class="rangeslider__handle" style="left: 83.2508px;"></div></div> 
                <div class="show-mobile"><br></div>  
                <span class="zyk">£<output class="outout" id="op1">4950</output></span>
          </div>
          <div>
              <input name="borrowingtime" id="borrowingtime" type="range" min="1" max="60" step="1" value="12" data-rangeslider="" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;">
              <div class="rangeslider" id="js-rangeslider-1"><div class="rangeslider__fill" style="width: 64.8559px;"></div><div class="rangeslider__handle" style="left: 47.3559px;"></div></div> 
              <div class="show-mobile"><br></div> <span class="zyk">
              <output class="outout" id="op2">12</output> <span style=" font-size:12px;">months</span></span>
          </div>
  </form>
  
  <div class="display">
  Borrowing <span class="out">£</span><div class="out" id="text1" style="display:inline;">4950</div> over <div class="out" id="text2" style="display:inline;">12</div><span class="out"> months</span> will cost <span class="out">£</span><span class="out total">423.76</span> per month. Your total to repay will be <span class="out">£</span><span class="out totalrepay">5085.12</span>. Illustration APR is <span class="out APR">5.9</span><span class="out">%</span>. <br> <span style="font-size:10px; color:lightgrey;">&nbsp;</span><p class="txt-center borrnoo" style="margin-top: -10px;"><a href="https://hillingdon.cuaccount.com/login/" target="_blank" class="btn orange tooltips" style="color:black;"><span>The interest rate applicable for each loan will be agreed at the time the loan is agreed and the rates used here are purely indicative.</span>borrow today</a></p>
  </div>  
        
    <div style="display:none;">

<script>
function change(){
//
var borrowingvalue = $('input[name="borrowingvalue"]');
var prodesc = $('#prodesc option:selected');
var data = 'borrowingvalue=' + borrowingvalue.val();
var data2 = prodesc.val();

   $.ajax({ type: "GET",   
       url: "productcalc.php",   
       async: false,
   data: {borrowing: data, prodesc:data2},
       success : function(text)
       {
           $('#result').html(text);
       }
  });
//	        
  var bval = $("#borrowingvalue").val();
var btime = $("#borrowingtime").val();

var APR = "";
var IR = "";
var prod = "";


var rate = IR/1200; 
var power = Math.pow( (1+rate),parseFloat(btime) );
var power2 = 1 / power
  

  var total;    
total = parseFloat(bval) * (rate / (1 - power2) );
total = total.toFixed(2);

var totalrepay = parseFloat(btime) * total
totalrepay = totalrepay.toFixed(2);
  
  $(".APR").text(APR);
$(".total").text(total);
$(".totalrepay").text(totalrepay);
$(".prodesc").text(prod);
  //alert(total);
}
</script></div>
</div>
<!-- -->
        <!-- -->
        </div>
        
       
    
    </div>    
    </div>
</div>

<div class="clear"></div>

<div class="row">
	<div class="grid_4">
    <h2 style="padding-top:20px;"><strong>Built for you:</strong><br/>join us today at<br/> Crestbridge</h2>
    </div>						  
	<div class="grid_8">
    	<ul class="bxslider">
        <li style="padding:20px 30px;">
        	<blockquote>
                I've been a member for 6 years. The staff are always helpful and I know my money is safe and secure with Crestbridge
                <cite>Phil (Member)</cite>
            </blockquote>
        </li>
        <li style="padding:20px 30px;">
        	<blockquote>
                Great staff, great service. They were really helpful at explaining my savings and first investment options.
                <cite>Sally (Member)</cite>
            </blockquote>
        </li>
        </ul>
    </div>
</div>

<div class="clear"></div>

<div class="row" style="padding-top:20px; color:White;">
	
    <div class="grid_6 tri-down effects effect-1 effect-blue" style="border:solid 1px #77787B; color:#77787B;">
    	<div class="img">
    <h3 style="color:Whitesmoke; background:#b052ab; display:block;">Our Common Bond</h3>
    <p style="padding:20px 10px;">For everyone who appreciates innovative and reliable financial services.</p>

    		<div class="overlay">
            	<a href="about-us.html" class="expand" style="color:#77787B;"> +<br /> read</a>
                <a class="close-overlay hidden">x</a>
            </div>
        </div>
    </div>
    
	<div class="row">   
     
     
        <div class="grid_3 effects effect-1 effect-purple" style="height:175px;border:solid 1px #77787B; color:#77787B;">
        	<div class="img">
        <h3 style="color:Whitesmoke; background:#b052ab; display:block;">Blog Post</h3>
        <p style="padding:5px 10px;">Help to more members... <br /> <span style="font-style:italic; color:#ccc;">Posted on Thursday 18th Jan, 2023</span></p>
        	    <div class="overlay">
            	<a href="news80f8.html?article=100" class="expand" style="color:#77787B;"> +<br /> read</a>
                <a class="close-overlay hidden">x</a>
            	</div>
        	</div>
        </div>
        
        <div class="grid_3 effects effect-1 effect-green" style="height:175px; border:solid 1px #77787B; color:#77787B;">
            	<div class="img">
        <h3 style="color:Whitesmoke; background:#b052ab; display:block;">Savings</h3>
        <p style="padding:5px 10px;">Regular saving has never being this easy, get on board with Crestbridge.</p>
        	    	<div class="overlay">
            		<a href="our-savings.html" class="expand" style="color:#77787B;"> +<br /> read</a>
                    <a class="close-overlay hidden">x</a>
            		</div>        
        		</div>
        </div>
        
        	<div class="clear"></div>
         
    </div>


</div>


<div class="clear"></div>