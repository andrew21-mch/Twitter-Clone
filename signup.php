<?php
$pagetitle="signup | twitter";
?>

<?php
include "backend/shared/head.inc.php";
?>
<section class="sign-container">
    <nav class="nav-header-sign_up">
        <ul>
            <li>
                <a href="#">
                    <i class="fab fa-twitter"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="#">
                    About
                </a>
            </li>
            <li>
                <a href="#">
                    Language:English
                </a>
            </li>
        </ul>
</nav>
<div class="form-container">
    <div class="form-content">
        <h2 class="header_form-content">
            Create your account 
        </h2>
        <form action="" class="formfield">
            <div class="form-group">
                <label for="firstname">FirstName</label>
                <input type="text" name="firstname" id="firstname">
            </div>

            <div class="form-group">
                <label for="lastname">LastName</label>
                <input type="text" name="lastname" id="lastname">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </div>

            <div class="form-group">
                <label for="password_repeat">Repeat Password</label>
                <input type="password" name="password_repeat" id="password_repeat">
            </div>
            <div class="form-btn-wrapper">
                <button type="submit" class="btn-form">SignUp</button>
                <input type="checkbox" class="form-checkbox" id="check" name="remember">
                <label for="remember">Remember Me</label>
            </div>
        </form>
        <footer class="form-footer">
            <p>Already have an account? <a href="login.php"> Login now</a></p>
        </footer>
    </div>
</div>
</section>
