<?php

           include '../connect.php'; 

		  if (isset($_GET['idk'])) {
		  	$id = $_GET['idk'];
		  	$getById = $connect->query("DELETE FROM kucing where idk='$id'");
		  	//$data = $getById->fetch_assoc();

             if($getById == true){
                 header('location:admin/view-kucing.php?success');
             } else {
                 header('location:admin/view-kucing.php?failure');
             }

		  }

?> 