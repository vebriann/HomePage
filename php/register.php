<?php include('../components/header.php') ?>

<section class="section-login-1 ms-auto me-auto" style="max-width: 40%;">
    <div class="container">
        <h1 class="text-primary mt-5 mb-3">
            Daftar
        </h1>
        <form action="#" method="post">
            <div class="mb-3">
                <label for="email">Full Name</label>
                <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Enter Your Full Name" required>
            </div>
            <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter Your Email" required>
            </div>
            <div class="mb-3">
                <label for="password">password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter Your Password" required>
            </div>
            <button class="btn btn-primary w-100" name="submit">
                Daftar Account
            </button>
            <p class="mt-3 text-secondary text-center">Already account? <a href="login.php" class="text-decoration-none">Login</a></p>
        </form>
    </div>
</section>