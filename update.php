<?php

// cek no_polisi
if (isset($_GET['No_Pelanggan'])) {
  include 'koneksi.php';
  $No_Pelanggan = $_GET['No_Pelanggan'];
 
  // ambil data berdasarkan no_polisi
  $sql="SELECT * FROM Pelanggan WHERE No_Pelanggan ='$No_Pelanggan'";
  //$no=1;
  $query = mysqli_query($koneksi, $sql);		
  while ($row = mysqli_fetch_array($query))
  {
  ?>

  <h2>Halaman Update Data</h2>

  <form method="post" action="proses_update.php">
    <input type="varchar" name="No_Pelanggan" value="<?php echo $row['No_Pelanggan']?>">
    <input type="varchar" name="Pengirim" value="<?php echo $row['Pengirim'] ?>">
    <input type="submit" name="submit" value="Update Data">
  </form>

  <?php
 
}}
