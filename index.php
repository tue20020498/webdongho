<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">

	

	<title>WEBSITE ĐỒNG HỒ</title>
	
</head>
<body>
	<div class="container-fluid">
		<div class="row">
		<?php
			session_start();
			include('admincp/config/config.php');
			// require('mail/sendmail.php');
			require('carbon/autoload.php');
			// session_start();
			// include("admincp/config/config.php");
			include("pages/header.php");
			include("pages/menu.php");
			include("pages/main.php");
			include("pages/footer.php");
		?>
		</div>
	</div>

	
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	<script type="text/javascript">
		// Show the first tab and hide the rest
		$('#tabs-nav li:first-child').addClass('active');
		$('.tab-content').hide();
		$('.tab-content:first').show();

		// Click function
		$('#tabs-nav li').click(function(){
		  $('#tabs-nav li').removeClass('active');
		  $(this).addClass('active');
		  $('.tab-content').hide();
		  
		  var activeTab = $(this).find('a').attr('href');
		  $(activeTab).fadeIn();
		  return false;
		});
	</script>
</body>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="
	sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
	
	<script src="https://www.paypal.com/sdk/js?client-id=AWlDvrjaQSHlDA_ta9P3sva_XFlyFWkX6v3DYNWQTWhHgEtvbXEbqGBl4XxW8kaaReOWsJgVagq_HeaI&currency=USD"></script>
	<script>
      paypal.Buttons({

      	style: {
		    layout:  'vertical',
		    color:   'blue',
		    shape:   'rect',
		    label:   'paypal'
		  },
        // Sets up the transaction when a payment button is clicked
        createOrder: function(data, actions) {
        	var tongtien = document.getElementById('tongtien').value;
          return actions.order.create({
            purchase_units: [{
              amount: {
                value: tongtien // Can reference variables or functions. Example: `value: document.getElementById('...').value`
              }
            }]
          });
        },

        // Finalize the transaction after payer approval
        onApprove: function(data, actions) {

          return actions.order.capture().then(function(orderData) {
            // Successful capture! For dev/demo purposes:
                console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                var transaction = orderData.purchase_units[0].payments.captures[0];
                alert('Transaction '+ transaction.status + ': ' + transaction.id + '\n\nSee console for all available details');
                window.location.replace('http://localhost/web_mysqli/index.php?quanly=camon&thanhtoan=paypal');
            // When ready to go live, remove the alert and show a success message within this page. For example:
            // var element = document.getElementById('paypal-button-container');
            // element.innerHTML = '';
            // element.innerHTML = '<h3>Thank you for your payment!</h3>';
            // Or go to another URL:  actions.redirect('thank_you.html');
          });
        },
        onCancle:function(data){
        	 window.location.replace('http://localhost/web_mysqli/index.php?quanly=thongtinthanhtoan');
        }
      }).render('#paypal-button');

    </script>
	<a href="#" class="scrolltop show-scroll" id="scroll-top">
        <i class="fa fa-angle-up"></i>
    </a>
	<!-- JS back to top -->
    <script>
      function scrollTop() {
        const scrollTop = document.getElementById("scroll-top");
        // When the scroll is higher than 560 viewport height, add the show-scroll class to the a tag with the scroll-top class
        if (this.scrollY >= 560) scrollTop.classList.add("show-scroll");
        else scrollTop.classList.remove("show-scroll");
      }
      window.addEventListener("scroll", scrollTop);
    </script>
</html>
