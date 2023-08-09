<?php
  
  $con = mysqli_connect('localhost','root','','purchase');

  if(isset($_POST['Submit'])){
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $namecard = $_POST['namecard'];
    $cardnumber = $_POST['cardnumber'];
    $validuntil = $_POST['validuntil'];

    $request = "INSERT INTO purchase_form(fullname, email, phone, namecard, cardnumber, validuntil) VALUES
    ('$fullname', '$email', '$phone', '$namecard', '$cardnumber', '$validuntil')";

    mysqli_query($con, $request);
    header('location:purchase.php');
  } else{
    echo 'Something went wrong try again';
  }

?>