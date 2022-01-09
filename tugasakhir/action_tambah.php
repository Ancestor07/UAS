<?php
include "koneksi.php";

$nrp        = $_POST['nrpmhs'];
$nama       = $_POST['namamhs'];
$kdprodi    = $_POST['prodimhs'];
$alamat     = $_POST['alamatmhs'];

try {
    $query = "INSERT INTO mahasiswa (nrp,nama,kdprodi,alamat) VALUES  (:nrpmhs, :namamhs, :prodimhs, :alamatmhs)";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':nrpmhs', $nrp, PDO::PARAM_STR);
    $stmt->bindParam(':namamhs', $nama, PDO::PARAM_STR);
    $stmt->bindParam(':prodimhs', $kdprodi, PDO::PARAM_STR);
    $stmt->bindParam(':alamatmhs', $alamat, PDO::PARAM_STR);
    $stmt->execute();

    header("location: index.php?m=mahasiswa");
} catch (PDOException $e) {
    echo $e->getMessage();
}
