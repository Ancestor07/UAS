<?php
$query = $pdo->prepare("SELECT m.nrp, m.nama, p.prodi, p.jenjang, m.alamat 
FROM mahasiswa m, prodi p
WHERE m.kdprodi=p.kdprodi;");
$query->execute();
$data = $query->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            margin-bottom: 20px;
            /* width: 1000;
            height: 100;
            border: 1;
            padding: 0;
            spacing: 0; */
        }

        #row1 {
            color: white;
            align-items: center;
            text-align: center;
            vertical-align: middle;
            background-color: blue;
        }

        #row2 {
            color: black;
            align-items: center;
            text-align: center;
            vertical-align: middle;
            background-color: white;
        }
    </style>
</head>

<body>
    <h3>Daftar Mahasiswa</h3>
    <p><a href=" index.php?m=tambah " id="tombol" type="button" style="background-color: grey;">Tambah</a></p>
    <table width="1000" height="100" border="1" cellpadding="0" cellspacing="0" align="center">
        <tr id="row1">
            <td width="115">NRP</td>
            <td width="175">Nama</td>
            <td width="200">Prodi</td>
            <td width="100">Jenjang</td>
            <td width="100">Alamat</td>
            <td width="135">Action</td>
        </tr>
        <?php foreach ($data as $value) : ?>
            <tr id="row2">
                <td><?php echo $value['nrp'] ?></td>
                <td><?php echo $value['nama'] ?></td>
                <td><?php echo $value['prodi'] ?></td>
                <td><?php echo $value['jenjang'] ?></td>
                <td><?php echo $value['alamat'] ?></td>
                <td>
                    <?php echo "<a href=\"index.php?m=edit&nrp=$value[nrp]\" id=\"tombol\" type=\"button\" style=\"background-color: green;\">Edit</a>" ?>
                    <?php echo "<a href=\" delete.php \" id=\"tombol\" type=\"button\" style=\"background-color: red;\">Delete</a>"; ?>
                </td>
            </tr>
            </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>