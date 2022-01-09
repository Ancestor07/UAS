<?php
include "koneksi.php";

$nrp        = intval($_GET['nrp']);
$nama       = $_POST['namamhs'];
$kdprodi    = $_POST['prodimhs'];
$alamat     = $_POST['alamatmhs'];

try {
    $query = "UPDATE mahasiswa SET nama=:namamhs, kdprodi=:prodimhs, alamat=:alamatmhs WHERE nrp = :nrpmhs";
    $stmt = $pdo->prepare($query);

    $stmt->bindParam(':namamhs', $nama, PDO::PARAM_STR);
    $stmt->bindParam(':prodimhs', $kdprodi, PDO::PARAM_STR);
    $stmt->bindParam(':alamatmhs', $alamat, PDO::PARAM_STR);
    $stmt->bindParam(':nrpmhs', $nrp, PDO::PARAM_STR);
    $stmt->execute();

    header("location: index.php?m=mahasiswa");
} catch (PDOException $e) {
    echo $e->getMessage();
}
