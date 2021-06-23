<?php
 if (isset($_POST['submit'])) {
  //Include file koneksi, untuk koneksikan ke database
  include 'koneksi.php';
  $No_Pelanggan=$_POST['No_Pelanggan'];
  $Pengirimr=$_POST['Pengirim'];
 
  $sql="UPDATE Pelanggan SET No_Pelanggan = '$No_Pelanggan', Pengirim ='$Pengirim' WHERE No_Pelanggan = '$No_Pelanggan'";
  $query = mysqli_query($koneksi, $sql);	

  if ($sql) {
    // pesan jika data berubah
    echo "<script>alert('Data Pelanggan berhasil diubah'); window.location.href='index.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data Pelanggan gagal diubah'); window.location.href='index.php'</script>";
  }
  } else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: index.php');
}