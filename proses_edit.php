<?php
// Import koneksi ke database
require_once 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $total_kill = $_POST['total_kill'];
    $tim = $_POST['tim'];
    $role = $_POST['role'];

    $sql = "UPDATE tugas SET nama='$nama', total_kill='$total_kill', tim='$tim', role='$role' WHERE id='$id'";

    if (mysqli_query($koneksi, $sql)) {
        header("location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
}
?>
    
