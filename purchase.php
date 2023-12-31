
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cart | Ebookstore</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?
      family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>

  <body>
    
    <!------------------ Header ------------------>
    
          <!----------  Nav Bar ------------------>
<nav class="nav">
	<div class="logo">
    <a href="index.html">
    <img src="images/EbookStore-Logo.png" alt="EbookStore-Logo"/></a>
	</div>
	
	<ul class="nav-menu">	
		<li> <a href="index.html"> Home </a> </li>
		<li> <a href="ebooks.html"> Ebooks </a> </li>
		<li> <a href="purchase.php"> purchase </a> </li>
		<li> <a href="account.php"> Account </a> </li>
	</ul>
</nav>

<center class = "header-panner">
	<img src="images/header-panner.jpg"  alt="book-shelf-colour" />
</center>
        <!-- header -->

        <!-- Purchase section -->
	<div class="containerB">
	
    <form action="purchase_form.php" method="post">
	  
      <div class="col-50">
      <h2>Book Purchase Form</h2>
      </div>
      
        <div class="input-group">
              <label for="fname"><i class="fa fa-user"></i> Full Name</label>
        <input type="text" placeholder="Ex: Mahmoud Ahmed" id="contact-name" name="fullname" onkeyup="validateName()"/><br><br>
              <span id="name-error"></span>
        </div>
        
        <div class="input-group">
              <label for="email"><i class="fa fa-envelope"></i> Email</label>
        <input type="email" placeholder="Ex: mahmoud@gmail.com" id="contact-email" name="email" onkeyup="validateEmail()"/><br><br>
              <span id="email-error"></span>
        </div>
        
        <div class="input-group">
              <label for="phone"><i class="fa fa-phone"></i> Phone</label>
              <input type="tel" placeholder="Ex: 0111 234 5670" id="contact-phone" name="phone" onkeyup="validatePhone()"/><br><br>
              <span id="phone-error"></span>
              </div>
      
      
        
        <div class="input-group">
              <label for="cname">Name Card</label>
              <input type="text" placeholder="Ex: Mahmoud Ahmed (press space)" id="name-card" name="namecard" onkeyup="validateNameCard()"/><br><br>
              <span id="ncard-error"></span>
        </div>
        
        <div class="input-group">
              <label for="ccnum">Credit card number</label>
        <input  type="text" placeholder="xxxx xxxx xxxx xxxx" maxlength="19" id="card-number" name="cardnumber" onkeyup="validateCardNum()"/><br><br>
              <span id="ccnum-error"></span>
        </div>
        
        <div class="input-group">
              <label for="date">valid until</label>
              <input type="text" placeholder="MM/YY" id="valid-thru" name="validuntil" onkeyup="validateValidThru()"/><br><br>
        <span id="valid-error"></span>
        </div>
        
        <div class="input-group">
              <label for="cvv">CVV</label>
              <input type="password" id="cvv-number" name="cvv" placeholder="xxx" maxlength="3" onkeyup="validateCVV()"/>
        <span id="cvv-error"></span>
              </div>
        <button onclick="return validateForm()" type="Submit"  name="Submit">Submit</button><br><br>
              <span id="submit-error"></span>
        
     </form>
	 </div>
	 <br>
	     <!-- ---------------------footer------------------- -->
       <div class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col-1">
            <h3>Download Our App</h3>
            <p>Download App for Android and ios mobile phone.</p>
            <div class="app-logo">
              <img src="images/Playstore.png" />
              <img src="images/Applestore.png" />
            </div>
          </div>
          <div class="footer-col-2">
            <img src="images/EbookStore-Logo-footer.png" />
            <p>
              This site is valid for all age groups.
            </p>
          </div>
          <div class="footer-col-4">
            <h3>Follow us</h3>
            <ul>
              <li>Facebook</li>
              <li>Youtube</li>
              <li>Instagram</li>
              <li>Twitterr</li>
            </ul>
          </div>
        </div>
        <hr />
        <p class="copyright">Copyright 2020 - EbookStore</p>
        <?php
          echo  "Today is " . date("Y/m/d") . "<br>";
          echo "The time is " . date("h:i:sa");
        ?>
      </div>
    </div>
	 
        <!-- end of Purchase section -->
        
        <!-- js -->
		<script src = "purchase.js"></script>
		
		<!-- JQUERY -->
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
		
		<script>
			$(document).ready(function(){
			  $("input").focus(function(){
				$(this).css("background-color", "#D4E6F1");
			  });
			  $("input").blur(function(){
				$(this).css("background-color", "#FDEBD0");
			  });
			});
		</script>
		
    </body>
</html>