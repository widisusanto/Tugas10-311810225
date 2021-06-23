<?php

// cek no_polisi
if (isset($_GET['No_Pelanggan'])) {
  include 'koneksi.php';
  $No_Pelanggan = $_GET['No_Pelanggan'];
 

  // perintah hapus data pelanggan berdasarkan no_polisi yang dikirimkan
  $sql="DELETE FROM Pelanggan WHERE No_Pelanggan ='$No_Pelanggan'";
  $query = mysqli_query($koneksi,$sql);	
  
  // cek perintah
  if ($sql) {
    // pesan apabila hapus berhasil
    echo "<script>alert('Data Pelanggan berhasil dihapus'); window.location.href='index.php'</script>";
  } else {
    // pesan apabila hapus gagal
    echo "<script>alert('Data Pelanggan gagal dihapus'); window.location.href='index.php'</script>";
  }
} else {
  // jika mencoba akses langsung ke file ini akan diredirect ke halaman index
  header('Location:index.php');
}