<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Format data untuk disimpan
    $data = "Nama: $name\nEmail: $email\nPesan: $message\n\n";
    
    // Tentukan nama file dan path penyimpanan
    $file = 'data.txt';
    
    // Simpan data ke file
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);
    
    // Redirect kembali ke halaman form dengan pesan sukses
    header("Location: index.html?status=success");
    exit();
}
?>
