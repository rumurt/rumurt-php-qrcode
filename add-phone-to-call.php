<?php
require_once __DIR__ . '/vendor/phpqrcode/qrlib.php';
$target = "uploads/qr-code-phone/";
$phone = '(+66)970-290-725';
$phoneSub = '(+66)814-456-197';
$_POST['txt_call1'] = $phone;
$_POST['txt_call2'] = $phoneSub;
// ซุ่มตัวเลข ทำเป็นชื่อไฟล์
if (isset($_GET['id'])) {
    $phone = $_POST['txt_call1']; // textbox name 
    $phoneSub = $_POST['txt_call2']; // password

if (empty($phone)) {
    $errorMsg[] = "Please enter username";
} else if (empty($phoneSub)) {
    $errorMsg[] = "Please enter password";
} else if ($phone AND $phoneSub) {

try {
    
// attache phone to call
$num = rand(10000000, 99999999);
$qrContent->bindParam('tel:' . $phone);
$qrContent->bindParam('tel:' . $phoneSub);
$qrContent->execute();
while($row = $qrContent->fetch(PDO::FETCH_ASSOC)) {
    $call1 = $row['call1'];
    $call2 = $row['call2'];
 }
    if ($phone != null AND $phoneSub!= null) {
        if ($select_stmt->rowCount() > 0) {
            if ($phone == $call1 AND $phoneSub == $call2) {
                switch($num) {
                    case 'Model':
                        $online = "model_subways";
                        $_SESSION['model_subway'] = $online;
                        $_SESSION['success'] = "Ago... Successfully Sent connect...TO THEM";
                        header("location: test.php");
                        break;
    }
    }
    }else {
        $_SESSION['error'] = "Wrong email or password or role";
        header("location: index.php");
    }
    }
}catch(PDOException $e) {
    $e->getMessage();
}
}
}
$target = "uploads/qr-code-phone/";
$phone = '(+66)970-290-725';
$phoneSub = '(+66)814-456-197';

$call1 = 'tel:' . $phone;
$call2 = 'tel:' . $phoneSub;

QRcode::png($call1 . $call2 . $target . $num.= 'call.png', QR_ECLEVEL_L, 3);
$genna = $num;
?>
<img src="<?php echo $target; ?><?php echo $genna;?>" />