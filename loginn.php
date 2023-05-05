<?php
require_once "db.php";
require_once "functions.php";
require_once "error_handler/login_error_handler.php";


?>

<!DOCTYPE html>
<html lang="en">
<?php
Head("تسجيل الدخول");
?>

<body dir="rtl">
    <?php Headers(); ?>

    <main class="login-page">
        <div class="container">
            <div class="box">
                <?php if(isset($_SESSION["error_message"])): ?>
                <div class="error-message">
                    <p><?php echo $_SESSION["error_message"]; ?></p>
                </div>
                <?php endif; ?>
                <h1 class="title">تسجيل الدخول</h1>
                <form action="loginn.php" method="post" name="login_form">
                    <div class="col">
                        <div class="row">
                            <h4>البريد الإلكتروني</h4>
                            <input type="email" placeholder="البريد الإلكتروني" name="email" required pattern="^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$" value="<?php echo isset($_SESSION["email_input"]) ? htmlspecialchars($_SESSION["email_input"]) : ''; ?>">
                        </div>
                        <div class="row">
                            <h4>كلمة المرور</h4>
                            <input type="password" placeholder="كلمة المرور" name="password" required value="<?php echo isset($_SESSION["password_input"]) ? htmlspecialchars($_SESSION["password_input"]) : ''; ?>">
                        </div>
                        <div class="row">
                            <button type="submit" class="btn-basic" name="login_form">تسجيل الدخول</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <?php footer(); ?>

    <!-- Js Scripts and Plugins -->
    <script type="module" src="./js/main.js"></script>

    <!-- font Awesome -->
    <script src="https://kit.fontawesome.com/eb7dada2f7.js" crossorigin="anonymous"></script>
</body>

</html>