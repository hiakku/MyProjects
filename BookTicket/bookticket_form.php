<html>
<body>

<?php
if(isset($_POST['submit'])) ?>Your details have been sent successfully over to your mail id: <?php echo $_POST['email'];
$subject = "Booking Ticket Confirmation";
$message = 'Your ticket is successfully booked!!<br/>Name:'.$_POST['user_name']. '<br/>Mobile Number:'.$_POST['mobile']. '<br/>The number of seat is:'. $_POST['seat'];
$headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From: Your name <ak12.akanksha@gmail.com>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
mail($_POST['email'], $subject, $message, $headers);
?>
</body>
</html>