<?php
 if (isset($_POST['submit'])) {
  //Include file koneksi, untuk koneksikan ke database
  include 'koneksi.php';
  $No_Pelanggan=$_POST['No_Pelanggan'];
  $Pengirim = $_POST['Pengirim'];
  

  // id_produk bernilai '' karena kita set auto increment
 
  $sql="insert INTO Pelanggan (No_Pelanggan,Pengirim) VALUES
  ('$No_Pelanggan', '$Pengirim')";
  $query = mysqli_query($koneksi, $sql);	
  
  if ($sql) {
    // pesan jika data tersimpan
    echo "<script>alert('Data Pelanggan berhasil ditambahkan'); 
	window.location.href='index.php'</script>"; 
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data Pelanggan gagal ditambahkan');
	window.location.href='index.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: index.php');
}