<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Marakym</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">

<link href="css/upsell.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="top-sec">
    <div class="container">
        <p><span>SPECIAL OFFER UNLOCKED -</span> FOR FIRST TIME CUSTOMERS ONLY</p>
    </div>
</div>
    
<div class="header">
	<div class="container">
    	<img src="images/logo.png" class="logo">
        <img src="images/inr-tp-secr.png" class="secure-seal">
    </div>
</div> 
 
<div class="up-top-hdng">
    <div class="container">
        <p class="up-hdng-txt1"><img src="images/left-arw.png" class="left-arw tadda"><span>Wait! Maximize <br class="show-mob">Comfort & Relief Today!</span> <img src="images/rgt-arw.png" class="rgt-arw taddaR"></p>
        <p class="up-hdng-txt2">Upgrade Your Compression Socks <br class="show-mob">Results With Ankle Straps! </p>
    </div>
</div>

<div class="up-sec1">
	<div class="container">
    	<div class="up-s1-Box">
        	<div class="up-s1-lft">
            	<p class="ups1-txt1"><img src="images/up-clock-icon.png"> Limited Time Special Discount  <img src="images/up-clock-icon.png"></p>
                <p class="ups1-txt2">Add Adjustable Ankle Straps<br><span>With Kinesiology Tape </span></p>
                <div class="up-s1-rght show-mob">
            		<img src="images/up1-prod-mob.png" class="up1-s1-prod">
            	</div>
                <input type="hidden" id="productId" value="12"/>

                <ul class="up-s1-list">
                	<li>Superior Muscle & Joint Support</li> 
                    <li>Custom Compression Control</li> 
                    <li>Added Supports & Protection</li>
                    <li>Lightweight & Breathable Fabric </li>
                </ul>
                <div class="save-strip"><img src="images/up-tymtk.png"> <p><span class="hide-mob">Your</span> Discounted Price Reserved For <span id="stopwatch">00:00</span> Minutes</div>
                <div class="up-prcBox">
                    <div class="prcDv prcDvline">
                        <div class="rtl-prc">
                        	<p class="prc-txt">Retail<br>Price:</p>
                            <div class="float-prc1">$179 <img src="images/up-red-line.png" class="up-redcut"></div>
                        </div>
                    </div>
                    <div class="prcDv">
                        <div class="rtl-prc ofr-prc">
                        	<p class="prc-txt">Offer<br>Price:</p>
                            <div class="float-prc1">$99</div>
                        </div>
                    </div>
               	</div>
                <p class="ups1-txt3">This Price Will Never Be Available Again</p>
                <div class="clearall"></div>
				<div class="btn-box">
                    <input type="hidden" id="orderId" value="<?php echo $_GET['orderId'] ?>"/>
                    <a id="upsellbtn" class="packageBtn pulse">
                        <p>Yes! Add To My Order!<br><span>Free Shipping Included</span></p>
                        <div class="btn-arw"></div>
                    </a>
            	</div> 
                <div class="clearall"></div>
        		<a href="<?php echo 'thankyou.php?orderId='.$_GET['orderId']; ?>" class="no-thank"><img src="images/no-thnx.png"> No, I don't want extra relief & comfort! </a>              
            </div>
            
            <div class="up-s1-rght hide-mob">
            	<img src="images/up1-prod.png" class="up1-s1-prod">
            </div>
        </div>
        <div class="upsafeBox">
        	<p class="up-safe-t"><span>Guaranted Safe & Secure Checkout</span></p>
            <div class="clearall"></div>
            <img src="images/up-logos.png" alt="" class="up-logos">
        </div>
    </div>
</div>

<div class="footer">
   <div class="container">
       <img src="images/ftr-logo.png" alt="" class="ftr-logo">
       <p class="ftr-p1"><a href="#">Terms of Use</a>  <span>|</span>  <a href="#">Privacy Policy</a> <span>|</span>  <a href="#">Contact</a></p>
       <p class="ftr-p2">Copyright &copy; <script type="text/javascript">var year = new Date();document.write(year.getFullYear());</script> MARAKYM. 
       <br class="show-mob">All rights reserved.</p>
   </div>
</div>

<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="js/countdown.js"></script>
</body>
</html>

<script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/jquery-ui.js"></script>
     <script src="js/slick.js"></script>  
	<script type="application/javascript">
        $(document).ready(function(e) {
            var loginId = "FUNNELapi!";
            var password = "ninja2021!@OO";
            var orderId = document.getElementById('orderId').value;
            var productId = document.getElementById('productId').value;
            $('#upsellbtn').click(function(e){
                $.ajax({
                        url:'https://api.konnektive.com/upsale/import/?loginId='+loginId+'&password='+password+'&orderId='+orderId+'&productId='+productId,
                        type:"post",
                        data:{loginId:loginId},
                        success:function(response)
                        {
                            var obj = JSON.parse(response);
                            if(obj.result == "SUCCESS"){
                                window.location = "thankyou.php?orderId="+orderId;

                            }

                        }
	                });
            });
        });
    </script>