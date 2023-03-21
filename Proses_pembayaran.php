<?php
    // Menerima data dari formulir pembayaran
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $jumlah = $_POST['jumlah'];
    $bank = $_POST['bank'];

    // Memeriksa apakah jumlah pembayaran valid
    if ($jumlah <= 0) {
        echo "Jumlah pembayaran tidak valid.";
        exit;
    }

    // Memproses pembayaran dengan mengirim email konfirmasi
    $to = $email;
    $subject = "Konfirmasi Pembayaran";
    $message = "Terima kasih $nama atas pembayaran sebesar Rp $jumlah ke Bank $bank. Pembayaran Anda akan segera kami proses.";

    if (mail($to, $subject, $message)) {
        echo "Pembayaran Anda telah berhasil diproses. Silakan cek email Anda untuk konfirmasi pembayaran.";
    } else {
        echo "Maaf, terjadi kesalahan dalam memproses pembayaran.";
    }
?>