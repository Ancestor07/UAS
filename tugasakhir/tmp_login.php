<?php
session_start();
if (isset($_SESSION['username'])) {
    header("location: welcome.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Halaman Sebelum Login</title>
</head>
<style>
    body {
        background-color: blue;
        padding: 100px;
    }

    table {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: white;
        border: 2px solid black;
        border-radius: 8px;
        padding: 5px;
    }

    h1 {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: white;
    }
</style>

<body>
    <center>
        <h1>Silahkan Login Terlebih Dahulu</h1>
        <div style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                    color: yellow;
                    margin-bottom: 15px;">
            <?php if (isset($_COOKIE['message'])) {
                echo $_COOKIE['message'];
            } ?>
        </div>
    </center>
    <form method="POST" action="login.php">
        <center>
            <table>
                <tr>
                    <td>username</td>
                    <td><input type="text" name="username" placeholder="Username"></td>
                </tr>
                <tr>
                    <td>password</td>
                    <td><input type="password" name="password" placeholder="Password"></td>
                </tr>
                <tr>
                    <td><button type="submit">Login</button></td>
                </tr>
            </table>
        </center>
    </form>
</body>

</html>