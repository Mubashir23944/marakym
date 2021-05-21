<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>Marakym</title>
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
<link rel="stylesheet" type="text/css" href="css/inner.css">
<link rel="stylesheet" type="text/css" href="css/slick.css">

<script>
function getDate(days) {
var monthNames = new Array("January","February","March","April","May","June","July","August","September","October","November","December");
var dayNames = new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
var now = new Date();
now.setDate(now.getDate() + days);
var nowString =  monthNames[now.getMonth()] + " " +  now.getDate() + ", " + now.getFullYear();
document.write(nowString);
}
</script>
</head>

<body>
	<div class="inner-strp">
    	<div class="container">
        	<div id="caption"><p>Bonus: Free Compression Socks with Purchase! Hurry Limited Time Offer <span id="stopwatch"></span></p></div>
        </div>
    </div>
    <div class="inner-cont-sec" id="ship">
        <div class="container">
            <div class="inner-top">
                <img src="images/logo.png" alt="" class="inr-log">
                <img src="images/inr-tp-secr.png" alt="" class="inr-tp-secr hide-desk">
                <div class="clearall hide-desk"></div>
                <img src="images/shipping-stps.png" alt="" class="inr-stps">
                <img src="images/inr-tp-secr.png" alt="" class="inr-tp-secr hide-mob">
            </div>
            <div class="chk-top-hdng">
                <p class="hdng-txt1 hide-mob"><img src="images/lft-arw.png" class="left-arw tadda">Your <span>50% Discount + FREE Shipping</span> Has Been Approved!<img src="images/rgt-arw.png" class="rgt-arw taddaR"></p>
                <p class="hdng-txt1 hide-desk"><span>50% Discount + FREE Shipping</span> Approved</p>
                <p class="hdng-txt2"><img src="images/clock-icon.png">Stock is extremely limited. Sell out risk: HIGH</p>
            </div>
            <div class="inr-rgt-bx">
            	<div class="sel-prd-det">
                	<div class="sel-prd-lft">
                		<img src="images/sel-prd-img.png" alt="" class="sel-prd-img">
                    </div>
                    <div class="sel-prd-desc">
                    	<h3 class="sel-prd-nm">Marakym</h3>
                        <p class="sel-prd-sub-nm">Ankle Compression Socks</p>
                        <p class="sel-bst-tx">#1 Best Seller</p>
                        <img src="images/sel-prd-star.png" alt="" class="sel-prd-star">
                    </div>
                </div>
                <ul class="inr-rgt-list hide-mob">
                	<li>Increases Blood Circulation</li>
                    <li>Eases Foot Swelling & Inflammation</li>
                    <li>Stabilizes Ankle & Supports Heels</li>
                    <li>Reduces Foot Fatigue & Prevents Injury</li>
                </ul>
                <div class="chk-tsti hide-mob">
                <div class="chk-tsti-bx">
                    <div class="chk-tsti-tp">
                        <img src="images/t-pic2.jpg" alt="" class="chk-tsti-img">
                        <img src="images/tsti-star.png" alt="" class="tsti-star">
                        <p class="tsti-nm"><span>Great quality and price!</span> Jeremy walker </p>
                    </div>
                    <p class="tsti-txt">Absolutely impressed with the quality for the price. Purchased because of ankle pain from a car wreck and has made my life much better. I climb ladders all day long for work and was unable to walk without pain by the end of the day and this product has helped me tremendously. Would recommend to anyone looking for pain relief.</p>
                </div>
                
                <div class="chk-tsti-bx">
                    <div class="chk-tsti-tp">
                        <img src="images/t-pic5.jpg" alt="" class="chk-tsti-img">
                        <img src="images/tsti-star.png" alt="" class="tsti-star">
                        <p class="tsti-nm"><span>Gives really great support</span> Sam</p>
                    </div>
                    <p class="tsti-txt">I needed compression for my ankle as I had broken it, the bone had healed but ligaments were still healing and I was having a lot of pain and instability, I noticed a remarkable improvement from day 1, highly recommended!</p>
                </div>
                
                <div class="chk-tsti-bx">
                    <div class="chk-tsti-tp">
                        <img src="images/t-pic6.jpg" alt="" class="chk-tsti-img">
                        <img src="images/tsti-star.png" alt="" class="tsti-star">
                        <p class="tsti-nm"><span>VERY HAPPY!!!</span> Jessica Hanson</p>
                    </div>
                    <p class="tsti-txt">I have bad ankles due to clumsiness and arthritis. However now that I’m pregnant they have been hurting SO bad! With these braces it gives me support and the pain relief I need. Very happy with this product would definitely recommend to anyone in pain!!</p>
                </div>
            </div>
            </div>

            
            <div class="inr-lft-bx">
                <div class="error-card" id="error-card" style="display: none;">
                    <h3>Error Found</h3>
                    <ul id="error_messages" style="margin-left: 30px;list-style-position: outside;">
        
                    </ul>
                </div>
                <div class="stepCount">
                    <img src="images/step2-icon.png">
                    <span>Step 2:</span> Shipping Information
                </div>
                
                <div class="frm-bx">
                	<input type="hidden" name="" id="productId" class="inp-fld half fl" value="<?php echo @$_GET['productId']; ?>" >
                	<input type="text" name="" id="first" class="inp-fld half fl" placeholder="First Name">
                    <input type="text" name="" id="last" class="inp-fld half fr" placeholder="Last Name">
                    <input type="text" name="" id="email" class="inp-fld half fl" placeholder="Email Address">
                     <input type="text" name="" id="phone" class="inp-fld half fr" placeholder="Phone Number">
                    <input type="text" name="" id="address" class="inp-fld full fl" placeholder="Address">
                    <input type="text" name="" id="city" class="inp-fld half fl" placeholder="City">
                    <select class="inp-fld half fr">
                      <option selected="selected" id="state">Select State</option>
                      <option value="AL" data-cid="">Alabama</option>
                      <option value="AK" data-cid="">Alaska</option>
                      <option value="AS" data-cid="">American Samoa</option>
                      <option value="AZ" data-cid="">Arizona</option>
                      <option value="AR" data-cid="">Arkansas</option>
                      <option value="AE-A" data-cid="">Armed Forces Africa</option>
                      <option value="AA" data-cid="">Armed Forces Americas</option>
                      <option value="AE-C" data-cid="">Armed Forces Canada</option>
                      <option value="AE-E" data-cid="">Armed Forces Europe</option>
                      <option value="AE-M" data-cid="">Armed Forces Middle East</option>
                      <option value="AP" data-cid="">Armed Forces Pacific</option>
                      <option value="CA" data-cid="">California</option>
                      <option value="CO" data-cid="">Colorado</option>
                      <option value="CT" data-cid="">Connecticut</option>
                      <option value="DE" data-cid="">Delaware</option>
                      <option value="DC" data-cid="">District of Columbia</option>
                      <option value="FM" data-cid="">Federated States of Micronesia</option>
                      <option value="FL" data-cid="">Florida</option>
                      <option value="GA" data-cid="">Georgia</option>
                      <option value="GU" data-cid="">Guam</option>
                      <option value="HI" data-cid="">Hawaii</option>
                      <option value="ID" data-cid="">Idaho</option>
                      <option value="IL" data-cid="">Illinois</option>
                      <option value="IN" data-cid="">Indiana</option>
                      <option value="IA" data-cid="">Iowa</option>
                      <option value="KS" data-cid="">Kansas</option>
                      <option value="KY" data-cid="">Kentucky</option>
                      <option value="LA" data-cid="">Louisiana</option>
                      <option value="ME" data-cid="">Maine</option>
                      <option value="MD" data-cid="">Maryland</option>
                      <option value="MA" data-cid="">Massachusetts</option>
                      <option value="MI" data-cid="">Michigan</option>
                      <option value="MN" data-cid="">Minnesota</option>
                      <option value="MS" data-cid="">Mississippi</option>
                      <option value="MO" data-cid="">Missouri</option>
                      <option value="MT" data-cid="">Montana</option>
                      <option value="NE" data-cid="">Nebraska</option>
                      <option value="NV" data-cid="">Nevada</option>
                      <option value="NH" data-cid="">New Hampshire</option>
                      <option value="NJ" data-cid="">New Jersey</option>
                      <option value="NM" data-cid="">New Mexico</option>
                      <option value="NY" data-cid="">New York</option>
                      <option value="NC" data-cid="">North Carolina</option>
                      <option value="ND" data-cid="">North Dakota</option>
                      <option value="MP" data-cid="">Northern Mariana Islands</option>
                      <option value="OH" data-cid="">Ohio</option>
                      <option value="OK" data-cid="">Oklahoma</option>
                      <option value="OR" data-cid="">Oregon</option>
                      <option value="PA" data-cid="">Pennsylvania</option>
                      <option value="PR" data-cid="">Puerto Rico</option>
                      <option value="MH" data-cid="">Republic of Marshall Islands</option>
                      <option value="RI" data-cid="">Rhode Island</option>
                      <option value="SC" data-cid="">South Carolina</option>
                      <option value="SD" data-cid="">South Dakota</option>
                      <option value="TN" data-cid="">Tennessee</option>
                      <option value="TX" data-cid="">Texas</option>
                      <option value="UT" data-cid="">Utah</option>
                      <option value="VT" data-cid="">Vermont</option>
                      <option value="VI" data-cid="">Virgin Islands of the U.S.</option>
                      <option value="VA" data-cid="">Virginia</option>
                      <option value="WA" data-cid="">Washington</option>
                      <option value="WV" data-cid="">West Virginia</option>
                      <option value="WI" data-cid="">Wisconsin</option>
                      <option value="WY" data-cid="">Wyoming</option>
                    </select>
                    <select class="inp-fld half fl">
                      <option value="US" data-cid="">United States</option>
                    </select>
                    <input type="text" name="" id="zip" class="inp-fld half fr" placeholder="Zip Code">
                    <p class="usps-tx fl"><img src="images/usps-img.jpg" alt="" class="usps-img">Your order is estimated to arrive on <span><script type="text/javascript">getDate(0);</script></span></p>
                </div>

                <div class="frm-bx">
                <label class="fieldToggle">
                    <input type="checkbox" name="togData" id="togData" checked="checked">
                    <span class="togship"></span>
                    Is your billing address same as shipping address?
                </label>
                
                <div class="card-accept">
                    We Accept:
                    <img src="images/cc-icon.png">
                </div>
                <input type="text" name="" id="card" class="inp-fld full fl" placeholder="Card Number">
                <select class="inp-fld half sml fl" id="cmonth">
                    <option value="01">January</option>
                    <option value="02">February</option>
                    <option value="03">March</option>
                    <option value="04">April</option>
                    <option value="05">May</option>
                    <option value="06">June</option>
                    <option value="07">July</option>
                    <option value="08">August</option>
                    <option value="09">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
                <select class="inp-fld half sml fr" id="cyear">
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                    <option value="2028">2028</option>
                </select>
                <input type="text" name="" id="cvv" class="inp-fld half fl fld-m" placeholder="CVV">
                <a href="cvv.php" class="whats-dis fancybox fancybox.iframe"><img src="images/cvv-img.png"></a>
            </div>
                <div class="clearall"></div>
                <div class="btn-box">
                	<a class="inr-btn">Submit Request <span><img src="images/btn-arw.png" alt=""></span></a>
                </div>
                <div class="chk-tsti hide-desk">
                <div class="chk-tsti-bx">
                    <div class="chk-tsti-tp">
                        <img src="images/t-pic2.jpg" alt="" class="chk-tsti-img">
                        <img src="images/tsti-star.png" alt="" class="tsti-star">
                        <p class="tsti-nm"><span>Great quality and price!</span> Jeremy walker </p>
                    </div>
                    <p class="tsti-txt">Absolutely impressed with the quality for the price. Purchased because of ankle pain from a car wreck and has made my life much better. I climb ladders all day long for work and was unable to walk without pain by the end of the day and this product has helped me tremendously. Would recommend to anyone looking for pain relief.</p>
                </div>
                
                <div class="chk-tsti-bx">
                    <div class="chk-tsti-tp">
                        <img src="images/t-pic5.jpg" alt="" class="chk-tsti-img">
                        <img src="images/tsti-star.png" alt="" class="tsti-star">
                        <p class="tsti-nm"><span>Gives really great support</span> Sam</p>
                    </div>
                    <p class="tsti-txt">I needed compression for my ankle as I had broken it, the bone had healed but ligaments were still healing and I was having a lot of pain and instability, I noticed a remarkable improvement from day 1, highly recommended!</p>
                </div>
                
                <div class="chk-tsti-bx">
                    <div class="chk-tsti-tp">
                        <img src="images/t-pic6.jpg" alt="" class="chk-tsti-img">
                        <img src="images/tsti-star.png" alt="" class="tsti-star">
                        <p class="tsti-nm"><span>VERY HAPPY!!!</span> Jessica Hanson</p>
                    </div>
                    <p class="tsti-txt">I have bad ankles due to clumsiness and arthritis. However now that I’m pregnant they have been hurting SO bad! With these braces it gives me support and the pain relief I need. Very happy with this product would definitely recommend to anyone in pain!!</p>
                </div>
            </div>
            </div>
        </div>
    </div>
    
    <div class="footer">
       <div class="container">
           <img src="images/ftr-logo.png" alt="" class="ftr-logo">
           <p class="ftr-p1"><a href="#">Terms of Use</a>  <span>|</span>  <a href="#">Privacy Policy</a>
             <span>|</span>  <a href="#">Contact</a></p>
              <p class="ftr-p2">Copyright © <script type="text/javascript">var year = new Date();document.write(year.getFullYear());</script> MARAKYM. 
              <br class="hide-desk">All rights reserved.</p>
       </div>
    </div>
    
	<script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/jquery-ui.js"></script>
     <script src="js/slick.js"></script>  
	<script type="application/javascript">
		$(document).ready(function(e) {
			$('.buyOpt-row').click(function(e) {
				$('.buyOpt-row').removeClass('active');
				$(this).addClass('active');
				if ($(window).innerWidth() < 767){
					javascript:bookmarkscroll.scrollTo('chooseColr')
				}
			});
			
			$('.chk-tsti').slick({
				dots:true,
				slidesToShow: 1,
				slidesToScroll: 1,
				autoplay:false,
				autoplaySpeed:false,
				adaptiveHeight: true,
				arrows: false,
				fade: false,
				focusOnSelect: false,			
			});

            $('.inr-btn').click(function(e) {
                document.getElementById('error-card').style.display = 'block';

                document.getElementById('error_messages').innerHTML = '';
                

				var productId = document.getElementById('productId').value;
				var first = document.getElementById('first').value;
				var last = document.getElementById('last').value;
				var email = document.getElementById('email').value;
				var phone = document.getElementById('phone').value;
				var address = document.getElementById('address').value;
				var city = document.getElementById('city').value;
				var zip = document.getElementById('zip').value;
				var card = document.getElementById('card').value;
				var cvv = document.getElementById('cvv').value;
                var cmonth = document.getElementById('cmonth').value
                var cyear = document.getElementById('cyear').value
                var loginId = "FUNNELapi!";
                var password = "ninja2021!@OO";
                var campaignId = 8;

                if(first == ""){
                    $("#error_messages").append("<li>First Name is Required Field</li>");
                }
                if(last == ""){
                    $("#error_messages").append("<li>Last Name is Required Field</li>");
                }
                if(email == ""){
                    $("#error_messages").append("<li>Email is Required Field</li>");
                }
                if(phone == ""){
                    $("#error_messages").append("<li>Phone Number is Required Field</li>");
                }
                if(address == ""){
                    $("#error_messages").append("<li>Address is Required Field</li>");
                }
                if(city == ""){
                    $("#error_messages").append("<li>City is Required Field</li>");
                }
                if(zip == ""){
                    $("#error_messages").append("<li>Zip code is Required Field</li>");
                }
                if(card == ""){
                    $("#error_messages").append("<li>Please enter your credit/debit card</li>");
                }
                if(cvv == ""){
                    $("#error_messages").append("<li>please enter your card CVV</li>");
                }


                else{
                    $.ajax({
                        url:"https://api.konnektive.com/order/import/?loginId="+loginId+"&password="+password+"&firstName="+first+"&lastName="+last+"&address1="+address+"&address2=''&postalCode="+zip+"&city="+city+"&state="+state+"&country=US&emailAddress="+email+"&phoneNumber="+phone+"&shipFirstName=''&shipLastName=''&shipAddress1=''&shipAddress2=''&shipPostalCode=''&shipCity=''&shipState=''&shipCountry=US&paySource=CREDITCARD&cardNumber="+card+"&cardMonth="+cmonth+"&cardYear="+cyear+"&cardSecurityCode="+cvv+"&campaignId="+campaignId+"&product1_id="+productId+"&product1_qty=1",
                        type:"post",
                        data:{loginId:loginId},
                        success:function(response)
                        {
                            var obj = JSON.parse(response);
                            if(obj.result == "SUCCESS"){
                                window.location = "upsell.php?orderId="+obj.message.orderId;
                            }

                        }
	                });
                }

                
                
			});
        });
		
	
		
		var spd2 = 100;
		var spdVal2 = 10;
		var cntDown2 = 5 * 60 * spdVal2;
		setInterval(function () {
			var mn, sc, ms;
			cntDown2--;
			if(cntDown2 < 0) {
				return false;
			}
			mn = Math.floor((cntDown2 / spdVal2) / 60 );
			mn = (mn < 10 ? '0' + mn : mn);
			sc = Math.floor((cntDown2 / spdVal2) % 60);
			sc = (sc < 10 ? '0' + sc : sc);
			ms = Math.floor(cntDown2 % spdVal2);
			ms = (ms < 10 ? '0' + ms : ms);
			var result2 = mn + ':' + sc + ':' + ms;
			document.getElementById('stopwatch').innerHTML = result2;}, spd2);
    </script>
</body>
</html>
