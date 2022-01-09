<?php
include "koneksi.php";

$query = "SELECT * FROM mahasiswa WHERE nrp = :nrpmhs";
$stmt = $pdo->prepare($query);

$nrp = $_GET['nrp'];
$stmt->bindParam(':nrpmhs', $nrp);
$stmt->execute();
$hasil = $stmt->fetch();

?>
<form action="action_edit.php" method="POST">
    <label>Nama</label><br>
    <input type="text" name="namamhs" value="<?= $hasil['nama']; ?>" required></input><br>
    <input type="hidden" name="nrpmhs" value="<?= $hasil['nrpmhs']; ?>" required></input>
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
    <input type="text" class="form-control" name="alamatmhs" value="<?= $hasil['alamat']; ?>" required></input><br>
    <button type="submit" name="edit" class="btn btn-success" style="color: white; background-color: green; padding: 10px; margin: 10px; border-radius: 10px;">Simpan</button><br>