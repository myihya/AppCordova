<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $nim=$_POST['nim'];
 $nama=$_POST['nama'];
 $prodi=$_POST['prodi'];
 $q=mysqli_query($con,"INSERT INTO `mahasiswa` (`nim`,`nama`,`prodi`) VALUES ('$nim','$nama','$prodi')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>