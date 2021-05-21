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
        <h1 id="order_msg" style="color: white; font-size: 50px;">Thank you for your order</h1>
        <input type="hidden" id="orderId" value="<?php echo $_GET['orderId'] ?>"/>
        <h3 style="color: white; font-size: 30px; margin-top: 30px;">Order #<?php echo $_GET['orderId'] ?></h3>
    </div>

    
    </div>
    <div class="container">
            <div class="card">
                    <div class="card-header">
                        <h3>Items Ordered</h3>
                    </div>
                <div class="card-body" id="cardtable">
                    <table style="width: 100%;text-align: left;" id="#tblData">
                        <thead>
                            <tr>
                                <th>Item no.</th>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Item Price</th>
                            </tr>
                        </thead>
                        <tbody>
                                                                <tr>
                                    <td id="pno"></td>
                                    <td id="pname"></td>
                                    <td id="pqty"></td>
                                    <td id="pprice"></td>
                                </tr>
                        </tbody>
                        <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th>Total Amount: </th>
                                    <th id="total"></th>
                                </tr>
                        </thead>
                    </table>
                </div>
            </div>

        <div class="row">
            <div class="card card-md" style="text-align: left">
                <div class="card-header">
                    <h3>Billing Information</h3>
                </div>
                <div class="card-body" style="padding: 10px">
                    <span>Full Name: <strong id="bname"></strong></span><br>
                    <span>Email Address: <strong id="bemail"></strong></span><br>
                    <span>Phone: <strong id="bphone"></strong></span><br>
                    <span>Address: <strong id="baddress"></strong></span><br>
                    <span>AK, US <strong id="bzip"></strong></span>

                </div>
            </div>

            <div class="card card-md" style="text-align: left">
                <div class="card-header">
                    <h3>Shipping Information</h3>
                </div>
                <div class="card-body" style="padding: 10px">
                    <span>Full Name: <strong id="sname"></strong></span><br>
                    <span>Email Address: <strong id="semail"></strong></span><br>
                    <span>Phone: <strong id="sphone"></strong></span><br>
                    <span>Address: <strong id="saddress"></strong></span><br>
                    <span>AK, US <strong id="szip"></strong></span>

                </div>
            </div>

        </div>


    </div>
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
            $.ajax({
                        url:'https://api.konnektive.com/order/confirm/?loginId='+loginId+'&password='+password+'&orderId='+orderId+'',
                        type:"post",
                        data:{loginId:loginId},
                        success:function(response)
                        {
                            var obj = JSON.parse(response);
                            if(obj.result == "SUCCESS"){
                                console.log(obj);
                                $.ajax({
                                    url:'https://api.konnektive.com/order/query/?loginId='+loginId+'&password='+password+'&orderId='+orderId+'',
                                    type:"post",
                                    data:{loginId:loginId},
                                    success:function(res)
                                    {
                                        var obj = JSON.parse(res);
                                        if(obj.result == "SUCCESS"){
                                            var items = obj.message.data[0].items
                                            document.getElementById('bname').innerHTML = obj.message.data[0].firstName+" "+obj.message.data[0].lastName;
                                            document.getElementById('baddress').innerHTML = obj.message.data[0].address1;
                                            document.getElementById('bemail').innerHTML = obj.message.data[0].emailAddress;
                                            document.getElementById('bphone').innerHTML = obj.message.data[0].phoneNumber;
                                            document.getElementById('bzip').innerHTML = obj.message.data[0].postalCode;

                                            document.getElementById('sname').innerHTML = obj.message.data[0].firstName+" "+obj.message.data[0].lastName;
                                            document.getElementById('saddress').innerHTML = obj.message.data[0].address1;
                                            document.getElementById('semail').innerHTML = obj.message.data[0].emailAddress;
                                            document.getElementById('sphone').innerHTML = obj.message.data[0].phoneNumber;
                                            document.getElementById('szip').innerHTML = obj.message.data[0].postalCode;
                                            
                                            var item_no = 1;
                                            Object.keys(items).forEach(key => {
                                            
                                            document.getElementById('pno').innerHTML += item_no+"<br>";
                                            document.getElementById('pname').innerHTML += items[key].name+"<br>";
                                            document.getElementById('pqty').innerHTML += items[key].qty+"<br>";
                                            document.getElementById('pprice').innerHTML += items[key].price+"<br>";
                                            document.getElementById('total').innerHTML = obj.message.data[0].totalAmount;
                                            item_no++;
                                            });
                                            
                                        }

                                    }
                                });
                                
                            }

                        }
	                });
        });
    </script>