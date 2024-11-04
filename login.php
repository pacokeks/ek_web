<?php
$title = "Login";
require_once 'misc/header.php';
?>

<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">
        <h1 class="masthead-heading text-uppercase mb-4">Login</h1>
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
        </div>
        <div class="col-lg-6 col-md-8">
            <form action="process_login.php" method="post" class="bg-white p-4 rounded shadow">
                <div class="form-floating mb-3">
                    <input class="form-control" id="username" name="username" type="text" placeholder="Enter your username" required />
                    <label for="username">Username</label>
                    <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" id="password" name="password" type="password" placeholder="Enter your password" required />
                    <label for="password">Password</label>
                    <div class="invalid-feedback" data-sb-feedback="password:required">A password is required.</div>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-primary btn-xl" type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
</header>

<?php require_once 'misc/footer.php'; ?>
