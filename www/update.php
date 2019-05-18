<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $nim=$_POST['nim'];
 $nama=$_POST['nama'];
 $prodi=$_POST['prodi'];
 $q=mysqli_query($con,"UPDATE `mahasiswa` SET `nim`='$nim',`nama`='$nama',`prodi`='$prodi' where `nim`='$nim'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>