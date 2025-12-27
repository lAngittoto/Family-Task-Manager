<?php
ob_start();
?>

<main>
    <section>
        <div>
            <h1><i class="fa-solid fa-house"></i> Welcome to Family Task Manager</h1>

            <p>Our system helps you organize household chores and manage allowances for your children in a fun and interactive way. Teach your kids responsibility and financial literacy while keeping your home in order.
                To get started, please create a parent account by filling out the form. We require identity verification to ensure a safe environment for all families.</p>

            <p>Already have an account? Log in here.</p>
        </div>

        <div>
            <form method="POST" id="registerForm">

                <h1>Create a Parent Account</h1>

                <p>Fill in your details to register.</p>

                <label for="full_name">Full Name</label>
                <input type="text" required name="full_name" pattern="[A-Za-z\s]+" placeholder=" e.g. Juan Mamaril Curz">

                <label for="email">Email Address</label>
                <input type="email" name="email" placeholder=" you@gmail.com">

                <label>Phone Number</label>
                <input type="tel" id="phone" name="phone" required>

                <button type="submit" name="send_otp">Send OTP</button>

            </form>

            <div id="otpBox" style="display:none;">
                <h2>Verify OTP</h2>
                <input type="number" id="otpInput" placeholder="6-digit OTP">
                <button id="verifyBtn">Verify OTP</button>
            </div>

            <p id="msg"></p>
        </div>
    </section>
</main>
<script src="/Family_Task_Manager/node_modules/intl-tel-input/build/js/intlTelInput.min.js"></script>
<script src="phoneVerification/JS/main.js"></script>
<?php
$content = ob_get_clean();
include __DIR__ . '/../../App/Includes/layout.php';
?>