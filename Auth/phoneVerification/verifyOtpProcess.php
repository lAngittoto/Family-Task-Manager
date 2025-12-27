<?php
session_start();

$userOtp = $_POST['otp_input'] ?? '';

if (!isset($_SESSION['otp'], $_SESSION['otp_expire'])) {
    echo "OTP session expired.";
    exit;
}

// ✅ Expiry check
if (time() > $_SESSION['otp_expire']) {
    session_destroy();
    echo "OTP expired. Please resend.";
    exit;
}

// ✅ Match check
if ($userOtp == $_SESSION['otp']) {

    unset($_SESSION['otp'], $_SESSION['otp_expire']);

    echo "<h2 style='color:green'>OTP Verified ✅</h2>";
    echo "<p>You may continue registration.</p>";

    // 👉 OPTIONAL redirect after success
    // header("Location: complete_registration.php");
    // exit;

} else {
    echo "<h2 style='color:red'>Invalid OTP ❌</h2>";
    echo "<a href='verify_otp.php'>Try again</a>";
}
