<? session_start()?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Untitled Document</title>
</head>

<?php
require_once __DIR__ . '/vendor/phpqrcode/qrlib.php';
$target = "uploads/qr-code-phone/";
$recipient = 'am@thaiescort.com';
$mailSubject = 'สวัดดีครับ';
$mailBody = 'hellohowareyou';
$text = "\xE0";
$codeContents .= 'VERSION:3.0'."\n";
header('Content-Type: text/html; charset=utf-8');

// Prepare QR content withe email recipient, subject and body
$qrContent = 'Email:' . $recipient . '?subject=' . $mailSubject . '&body=' . $mailBody . $codeContents ;
$randName = rand(10000000, 99999999);
// Attach maileto link to the QRCode
QRcode::png($qrContent, $target. $randName.= 'mail.png' , QR_ECLEVEL_L, 4);
$mailnum = $randName;

?>
<img src="<?php echo $target ?><?php echo $mailnum;?>" />