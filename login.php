<?php
include_once 'assets/classes/db.php';
include_once 'assets/classes/functions.php';
 
sec_session_start();
$mysqli = get_MySQLi_Connection();
 
if (login_check(get_MySQLi_Connection()) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Secure Login: Log In</title>
        <script type="text/JavaScript" src="assets/js/sha512.js"></script>
        <script type="text/JavaScript" src="assets/js/forms.js"></script>
    </head>

    <body>
        Username: test_user Email: test@example.com Password: 6ZaxN2Vzm9NUJT2y
        <?php
            if (isset($_GET['error'])) {
                echo '<p class="error">Error Logging In!</p>';
            }
        ?>
            <form action="assets/classes/process_login.php" method="post" name="login_form">
                Email:
                <input type="text" name="email" /> Password:
                <input type="password" name="password" id="password" />
                <input type="button" value="Login" onclick="formhash(this.form, this.form.password);" />
            </form>

        <?php
            if (login_check(get_MySQLi_Connection()) == true) {
                echo '<p>Currently logged ' . $logged . ' as ' . htmlentities($_SESSION['username']) . '.</p>';
                echo '<p>Do you want to change user? <a href="assets/classes/logout.php">Log out</a>.</p>';
            } else {
                echo '<p>Currently logged ' . $logged . '.</p>';
                //echo "<p>If you don't have a login, please <a href='register.php'>register</a></p>";
            }
        ?>
    </body>

    </html>