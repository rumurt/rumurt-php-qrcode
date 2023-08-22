<?php
require_once __DIR__ . '/vendor/phpqrcode/qrlib.php';
$target = "uploads/qr-code-phone/";
$nickname = 'Jim';
$id = '337';
$title = 'นี้คือช่องทางการติดต่อของผมนะค่ะ ชอบคุณนะค่ะ รักนารุนะค่ะที่รักของปาป๋า';
$call = '(+66)97-029-0725';
$Whats = '(+66)97-029-0725';
$Line = 'jimscraleter';
$skype = 'jobs_suka';
$instagram = 'jobs_suka';
$organisation = 'THAIESCORT VIP';
$email = 'am@thaiescort.vip';
$Urlthaiescort = 'http://thaiescort.vip/model_detail.php?id=333';
// Attach phone to text
$qrCode = 'BEGIN:VCARD' . "\n";
$qrCode .= 'FN:' . 'Name: ' . $nickname . "\n";
$qrCode .= 'ID;TYPE=work:' . 'Profile: ' . $id . "\n";
$qrCode .= 'TITLE:' . $title . "\n";
$qrCode .= 'ORG:' . 'Organisation: ' . $organisation . "\n";
$qrCode .= 'TEL;TYPE=cell,voice:' . $call . "\n";
$qrCode .= 'TEL;TYPE=work,voice:' . 'Whatsapp: ' . $Whats . "\n";
$qrCode .= 'TEL;TYPE=work,voice:' . 'Line: ' . $Line . "\n";
$qrCode .= 'TEL;WORK;VOICE:' . 'Skype: ' . $skype . "\n";
$qrCode .= 'TEL;WORK;VOICE:' . 'Instagram: ' . $instagram . "\n";
$qrCode .= 'EMAIL;TYPE=internet,pref:' . $email .  "\n";
$qrCode .= 'URL;TYPE=work:' . 'WWW.THAIESCORT.VIP' .  "\n";
$qrCode .= 'URL;TYPE=work:' . $Urlthaiescort .  "\n";
$qrCode .= 'END:VCARD';





$text = rand(10000000, 99999999);
// generating
QRcode::png($qrCode . $coCode, $target . $text.= 'text.png', QR_ECLEVEL_L, 8);
$numran = $text;
?>
<img src="<?php echo $target; ?><?php echo $numran ?>" />