<!DOCTYPE html>

<?php

        include '../connect.php';

	  if (isset($_POST['Submit'])) {
	  	  $nama = $_POST['namak'];
          $jns = $_POST['jenisk'];
          $jk = $_POST['jk'];
          $usia = $_POST['usia'];
		  $query = $connect->query("INSERT INTO kucing VALUES('','$nama','$jns','$jk','$usia')");

	  	if ($query == true) {
	  		header('location:index.php?success');
	  	} else {
	  		header('location:index.php?failure');
	  	}
	  }
 ?>

    <html class="no-js">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>

    <body>

        <div class="row">
            <div class="container">
                <div class="col-md-4">
                    <form action="" method="POST">
                        <br>
                        <label>Nama Kucing</label>
                        <input type="text" class="form-control" name="namak">
                        <br>
                        <label>Jenis Kucing</label>
                        <input type="text" class="form-control" name="jenisk">
                        <br>
                        <label>Jenis Kelamin</label>
                        <select name="jk" class="form-control">
                        <option value="laki-laki">Laki-Laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                        <label>Usia</label>
                        <input type="number" class="form-control" name="usia">
                        <br>
                        <input name="Submit" type="submit" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>

    </body>

    </html>