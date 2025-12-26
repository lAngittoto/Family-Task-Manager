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
            <form action="POST">
                <h1>Create a Parent Account</h1>

                <p>Fill in your details to register.</p>

                <label for="full_name">Full Name</label>
                <input type="text" required name="full_name" pattern="[A-Za-z\s]+" placeholder=" e.g. Juan Mamaril Curz">
            
                <label for="email">Email Address</label>
                <input type="email" name="email" placeholder=" you@gmail.com">

                <label for="contact_number">Contact Number</label>
                <input type="number" name="contact_number" >
            </form>
        </div>
    </section>
</main>

<?php
$content = ob_get_clean();
include __DIR__.'/../../App/Includes/layout.php';
?>