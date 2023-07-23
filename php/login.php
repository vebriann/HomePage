<?php include('../components/header.php') ?>

<section class="section-login-1 ms-auto me-auto" style="max-width: 40%;">
    <div class="container">
        <h1 class="text-primary mt-5 mb-3">
            Login
        </h1>
        <form action="#" method="post">
            <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter Your Email" required>
            </div>
            <div class="mb-3">
                <label for="password">password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter Your Password" required>
            </div>
            <button class="btn btn-primary w-100" name="submit">
                Login
            </button>
            <p class="mt-3 text-secondary text-center">Don't have an account? <a href="register.php" class="text-decoration-none">Daftar</a></p>
        </form>
    </div>
</section>