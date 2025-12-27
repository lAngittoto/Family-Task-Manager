<?php
require __DIR__ . '/vendor/autoload.php';
session_start();

use Twilio\Rest\Client;
use libphonenumber\PhoneNumberUtil;
use libphonenumber\PhoneNumberFormat;

$phoneInput = $_POST['phone'] ?? '';

if (!$phoneInput) {
    echo json_encode(['success' => false, 'message' => 'Phone required']);
    exit;
}

// validate phone
$phoneUtil = PhoneNumberUtil::getInstance();
$phoneProto = $phoneUtil->parse($phoneInput, null);

if (!$phoneUtil->isValidNumber($phoneProto)) {
    echo json_encode(['success' => false, 'message' => 'Invalid phone number']);
    exit;
}

$formattedNumber = $phoneUtil->format($phoneProto, PhoneNumberFormat::E164);

// OTP
$otp = rand(100000, 999999);
$_SESSION['otp'] = $otp;
$_SESSION['otp_expire'] = time() + 300;

// Send SMS
$twilio = new Client("TWILIO_SID", "TWILIO_TOKEN");
$twilio->messages->create($formattedNumber, [
    'from' => '+1234567890',
    'body' => "Your OTP is $otp"
]);

echo json_encode(['success' => true]);
