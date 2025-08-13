<html>
  
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <style>
            body {
  background-color: lightblue;
}
        </style>
        
    </head>
    <body>
    
    <html>
<body>
   

</body>
</html><?php 
    
require("mailscript/class.phpmailer.php");

//require("class.phpmailer.php");


if(isset($_POST["submit"]))
{
$name =  $_POST["name"];
$mobile =$_POST["mobile"];
 $type = $_POST["type"];
 $amount = $_POST["amount"];
 

 





if($name!="" && $amount!="" && $mobile!="" && $type!="" ){
// Configuring SMTP server settings

$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.hostinger.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = "";
$mail->Password = "";
$mail->setFrom('', 'Finance');
//$mail->addAddress('', '');
//$mail->addAddress('', '');

$mail->Subject = 'Finance';
$mail->IsHTML(true);
$mail->Body="Name--".$name."<br> Amount----".$amount."<br>Contact number--".$mobile."<br>Loan type---".$type;
//$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

// Success or Failure
if (!$mail->send()) {
    echo "error";
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
header("Location:form.html");
}

}
}
 else{
echo 'Please enter valid data</p>';
}

?>
</body>
    </html>
