<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h3 {
            padding: 10px;
        }

        form {
            background-color: aliceblue;
            padding: 20px;
            border-radius: 10px;

        }

        .btn {
            color: white;
            background-color: green;
            padding: 10px;
            margin: 10px;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <h3>Tambah Mahasiswa</h3>
    <form action="action_tambah.php" method="POST">
        <label>NRP</label><br>
        <input type="text" name="nrpmhs" required></input><br>
        <label>Nama</label><br>
        <input type="text" name="namamhs" required></input><br>
        <label>Prodi</label><br>
        <select name="prodimhs">
            <option disabled selected> Pilih </option>
            <?php
            include 'koneksi.php';

            $query  = "SELECT * FROM prodi";
            $stmt = $pdo->prepare($query);
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $i = 1;
            foreach ($results as $row) {
            ?>
                <option value="<?= $row['kdprodi'] ?>"><?= $row['kdprodi'] ?></option>
            <?php } ?>
        </select><br>
        <label>Alamat</label><br>
        <input type="text" class="form-control" name="alamatmhs" required></input><br>
        <button type="submit" name="tambah" class="btn btn-success" value="">Tambahkan</button><br>
    </form>
</body>

</html>