<?
require("class.phpmailer.php");

$mail = new PHPMailer();

// if ( empty($_POST["isim"]) || empty($_POST["eposta"]) ||  empty($_POST["mesaj"]) ) {
// 	echo "Hata";
// 	header("Refresh: 3; url=../index.html"); 
// 	exit;
// }



$mail->IsSMTP(); // send via SMTP
$mail->Host     = "160.153.128.0"; // SMTP servers
$mail->Port = 25;     // SMTP Port
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "info@yepmuh.com";  // SMTP username
$mail->Password = "Atakan192344"; // SMTP password

$mail->From     = "info@yepmuh.com";
$mail->Fromname = $_POST["isim"];
$mail->AddAddress("info@yepmuh.com");
$recipients = array(
   'atakan@yepmuh.com' => 'Atakan ODABAŞ',
);
foreach($recipients as $email => $name)
{
   $mail->AddCC($email, $name);
}
$mail->Subject  =  "İletişim Formu: yepmuh.com";
$mail->Body     =  


"Adı Soyadı: " . $_POST["isim"] . "\r\n" .
"E-posta: " . $_POST["eposta"] . "\r\n" .
"Telefon: " . $_POST["telefon"] . "\r\n" .
"Mesaj: " . $_POST["mesaj"]
;


if(!$mail->Send()) {

	echo $mail->ErrorInfo;
}
else{
	echo true;
}
?>
