
document.getElementById("registerForm").addEventListener("submit", function(e) {
    e.preventDefault(); // ❗ stay on page

    const formData = new FormData(this);

    fetch("send_sms.php", {
        method: "POST",
        body: formData
    })
    .then(res => res.json())
    .then(data => {
        if (data.success) {
            document.getElementById("otpBox").style.display = "block";
            document.getElementById("msg").innerText = "OTP sent!";
        } else {
            document.getElementById("msg").innerText = data.message;
        }
    });
});

document.getElementById("verifyBtn").addEventListener("click", function () {

    const otp = document.getElementById("otpInput").value;

    fetch("verify_otp_process.php", {
        method: "POST",
        headers: {"Content-Type": "application/x-www-form-urlencoded"},
        body: "otp_input=" + otp
    })
    .then(res => res.text())
    .then(data => {
        document.getElementById("msg").innerHTML = data;
    });
});
