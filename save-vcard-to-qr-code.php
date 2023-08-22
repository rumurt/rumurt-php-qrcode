<?php
require_once __DIR__ . '/vendor/phpqrcode/qrlib.php';
$target = "uploads/qr-code-phone/";
// Contact details
$name = 'Mr. Chainarin Suka';
$phone = '(+66)97-089-0725';
// QR code cotent with VACARD
$qrCode = 'BEGIN:VCARD' . "\n";
$qrCode .= 'FN:' . $name . "\n";
$qrCode .= 'TEL;WORK;VOICE:' . $phone . "\n";
$qrCode .= 'END:VCARD';
$qrnum = rand(100000, 999999);
// Attaching VCARD to QR code
QRcode::png($qrCode, $target. $qrnum.= 'vcard.png', QR_ECLEVEL_L, 4);
$print = $qrnum;
?>
<img src="<?php echo $target ?><?php echo $print; ?>" />