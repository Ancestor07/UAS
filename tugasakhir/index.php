<?php
include 'koneksi.php';
session_start();
if (!isset($_SESSION['username'])) {
    header("location: tmp_login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        main {
            display: flex;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            height: 100%;
        }

        header {
            display: flex;
            justify-content: space-between;
            background: blue;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: white;
            padding: 10px;
        }

        article {
            flex: 1 1 75%;
            order: 2;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 10px;
        }

        #nav {

            flex: 1 1 15%;
            order: 1;
            background-color: grey;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: white;
            padding: 10px;
            height: 90vh;

        }

        .profil {
            line-height: 20px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: white;
            padding: 10px;
        }

        #tombol {
            border: none;
            color: white;
            padding: 10px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 10px;
            margin: 10px;
        }

        .edit {
            border: none;
            color: white;
            padding: 10px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 10px;
            margin: 10px;
        }
    </style>
</head>

<body>
    <header>
        <h2>Data Mahasiswa</h2>
        <div class="profil">
            <p><?php echo $_SESSION['nama']; ?><img src="" alt="foto-profil">
            </p>
        </div>
    </header>
    <main>
        <article>
            <?php
            if (isset($_GET['m'])) {
                $menu = $_GET['m'];
                include "$menu.php";
            } else include "mahasiswa.php";

            ?>
        </article>
        <aside id="nav">
            <h3>Menu</h3>
            <nav>
                <ul>
                    <a href="index.php?m=mahasiswa">
                        <li>Data Mahasiswa</li>
                    </a>
                    <a href="logout.php">
                        <li>Logout</li>
                    </a>
                </ul>
            </nav>
        </aside>
    </main>
    <footer></footer>

</body>

</html>