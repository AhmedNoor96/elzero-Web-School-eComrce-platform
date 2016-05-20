<?php
/**
 * Created by PhpStorm.
 * User: fcmam5
 * Date: 5/18/16
 * Time: 9:18 PM
 */
session_start();
/*$noNavbar = "";*/
if (isset($_SESSION['Username'])) {
    header('Location: dashboard.php'); // Redirect to dashboard page
}
include "init.php";

//If he's comming from HTTP Post request7
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['usr'];
    $password = $_POST['pwd'];
    $hashedPass = sha1($password);

    /*Check if the user exists*/
    $stmt = $con->prepare("SELECT username, password FROM users WHERE username= ? AND password = ? AND users.groupID=1");
    $stmt->execute(array($username, $hashedPass));
    echo $hashedPass;
    $count = $stmt->rowCount();
    if ($count > 0) {
        $_SESSION['Username'] = $username; //Register session name
        header('Location: dashboard.php'); // Redirect to dashboard page
        exit();
    }
} ?>
<h4 class="text-center">Admin Lgoin</h4>

<form class="login" method="POST" action="">
    <input class="form-control" type="text" name="usr" placeholder="Username" autocomplete="off">
    <input class="form-control" type="password" name="pwd" placeholder="Password" autocomplete="new-password">
    <input class="btn btn-primary btn-block" type="submit" value="Login" name="login">
</form>

<?php
include $tpl . "footer.inc";
?>
