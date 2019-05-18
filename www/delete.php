<?php
 include "db.php";
 if(isset($_GET['nim']))
 {
 $nim=$_GET['nim'];
 $q=mysqli_query($con,"delete from `mahasiswa` where `nim`='$nim'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>