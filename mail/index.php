
       
<?php 
//require("mailscript/class.phpmailer.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

if(isset($_GET['submit']))
{
 $email = $_GET['email'];
$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.hostinger.com';
$mail->Port = 587;
$mail->SMTPAuth = true;

$mail->Username = "";
$mail->Password = "Aru";
$mail->From = "";
$mail->FromName = "ZUDIO";

//$mail->AddAddress('');
$mail->AddAddress("$email");




$mail->Subject = 'Zudio';
$mail->IsHTML(true);
$mail->Body="  <!DOCTYPE html>
<html lang='en'>
<head>
  <title>Zudio Franchise</title>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet'>
  <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js'></script>
  <style>
      div.header{ margin-top:30px;} 
      div.flex{display:flex;}
  </style>
</head>
    <body><div class='flex' style='width:100%;  background-color:black'>    
<div style='width:70%;'>
<img src='https://tatatrents-zudio.com/5/mail/logo-midle-removebg-p.png' style='width:250px; height:auto; padding:20px;'>
</div>
  
        <br>
    
<div style='float:right; width:40%'>
    <a style='margin:5px; color: white; text-decoration: none; display: block; text-align: left; background-color: rgb(47, 47, 112); border-radius: 5px;' href='mailto:zudiohelp@tatatrents-zudio.com' rel='noreferrer' target='_blank'>
    <img style='width:25px; vertical-align: middle;'> MAIL US
    </a>

<a style='margin: 5px; color: white; text-decoration: none; display: block; text-align: left; background-color: rgb(17, 141, 17); border-radius: 5px;' href='https://api.whatsapp.com/send?phone=918810306142' rel='noreferrer' target='_blank'>
<img style='width:20px; vertical-align: middle;'><b>WHATSAPP US</b>
</a>
<a style='margin: 5px; color: white; text-decoration: none; display: block; text-align: left; background-color: rgb(23, 158, 211); border-radius: 5px;' href='tel:9118001202744' rel='noreferrer' target='_blank'>
<img width='25px' style='width:25px; vertical-align: middle;' >1800-120-2744
</a>

</div>
</div> 
<br>

<div class='header' style='margin:5px; padding:10px;'>
<b>Dear Sir/ma'am,</b>
<p> <b>Subject:</b> Information regarding franchise.</p>
<p>We are super excited to have you on the smartest investment platform Zudio pvt ltd. To smoothen your onboarding, we are attaching a copy of your form below & for future references.</p>

<p>Please read the guidelines for franchise, terms and conditions, risk disclosure document and policies and procedures.</p>
<p>You have to also provide us these documents for our references:</p>

<br>
<ul style='color:red'>
  <li>Adhar Card</li>
  <li>PAN Card</li>
  <li>Passport Size Photos</li>
 <li>Qualification</li>
<li> ITR File & GST Certificate</li>
<li>Current Loction Image</li>
 <li>latitude and longitude</li>
<li>Land Paper/ Agreement (Optional)</li>
<li>Signature</li>
</ul>
<br>
<ul>
<li>All the documents provided by you should be authorized by INDIA Government.</li>
<li>We can ask for other related documents if required.</li>
<li>Tata Zudio or its associates do  guarantee or advisory to provide franchise.</li>
<li>We look forward to offering you futuristic invest details and feedback.</li>
<li>If you have got login details, Keep your login details confidential and do not share with anyone.</li>
</ul>

<div style='text-align:center;'>
    <a style='text-decoration:none;background-color:black;color:rgb(255,255,255); border-radius:20px; border-style: inset; padding:10px;' href='https://tatatrents-zudio.com/5/mail/src/TataZudioApplicationForm.pdf' rel='noreferrer noreferrer' target='_blank' download>DOWNLOAD FORM</a><br><br><br>
    <a style='text-decoration:none;background-color:black;color:rgb(255,255,255); border-radius:20px; border-style: inset; padding:10px;' href='https://tatatrents-zudio.com/5/mail/src/ProspectusofZudio.pdf' rel='noreferrer noreferrer' target='_blank' download>DOWNLOAD PROSPECTOR</a><br><br><br>
   
    <a style='text-decoration:none;background-color:black;color:rgb(255,255,255); border-radius:20px; border-style: inset; padding:10px;' href='https://tatatrents-zudio.com/5/mail/src/ZudioFranchiseInteriorExterior.pdf' rel='noreferrer noreferrer' target='_blank' download>DOWNLOAD INTERIOR</a><br><br><br>
    
    <a style='text-decoration:none;background-color:black;color:rgb(255,255,255); border-radius:20px; border-style: inset; padding:10px;' href='https://tatatrents-zudio.com/5/mail/src/ZUDIOPriceRangeforallProducts.pdf' rel='noreferrer noreferrer' target='_blank' download>Price List</a>
    
      </div>
      
      <br>

Happy Investing!<br>
Zudio pvt ltd


<h2 style='text-align:center; background-color:rgb(145, 142, 140); color:white;'> Welcome To Zudio Franchise </h2>
At Zudio pvt ltd, we are committed to bring a change in the society by adapting to Corporate Social Responsibility models designed for sustainable and responsible growth.
<br>
<div class='flex-container'>
    
<p><b>Registered Office Addresses
Registered Office
Level 3, Vasant Square Mall
Pocket V, Sector B,
Vasant Kunj, New Delhi,
South Delhi, DL 110070.
Tel: 1800-120-2744
(Contact time : 9am - 5pm)
Toll-Free: 1800-120-2744</b></p>



<p><b>Corporate Communication
Trent Limited, Trent House, G Block, Plot No C - 60, Beside
Citibank, Bandra Kurla Complex, Bandra
(East), Mumbai 51.
Toll-Free: 1800-120-2744</b></p>

<br>
Tata Zudio @ 2024, All rights reserved.


</div>

</body>
</html>

";

// Success or Failure
if (!$mail->send()) {
    echo "error";
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    
} else {
    
	header("Location:received.html");
    
}
 
}
else{
echo 'Please enter valid data</p>';
}

?>
