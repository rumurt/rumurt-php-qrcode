<?php
if (empty($_GET['id'])) {
    echo "<b>ERROR:</b> Bad request. Required parameters are missing.";
    exit;
} else {
    require_once __DIR__ . '/../vendor/phpqrcode/qrlib.php';
    $inputString = $_GET['id'];

    // Do not return anything to the browser
    ob_start("callback");
    // Process the input string
    $codeText = 'DEMO - ' . $inputString;
    // end of processing
    $debugLog = ob_get_contents();
    ob_end_clean();
    // outputs QR code as a PNG data
    QRcode::png($codeText);
}
?>