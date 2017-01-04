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
                <div class="col-md-8">
    <table class="table table-stripped">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Kucing</th>
              <th>Jenis Kucing</th>
              <th>Jenis Kelamin</th>
              <th>Usia</th>
              <th>OPSI</th>
            </tr>
          </thead>
          <tbody>
            <?php
										$no = 1;
										$view = $connect->query("SELECT * FROM kucing");
										$no = 1;
										while ($data = $view->fetch_assoc()) {
										?>	
									
										<tr>
											<td><?php echo $no ?></td>
											<td><?php echo $data['namak'] ?></td>
											<td><?php echo $data['jenisk'] ?></td>
											
											<td><?php echo $data['jkk'] ?></td>
											<td><?php echo $data['usia'] ?></td>
											<td>
												
												<a class="btn btn-success btn-sm" href="edit-kucing.php?idk=<?php echo $data['idk'] ?>">
													EDIT
												</a>
												<a class="btn btn-danger btn-sm" href="delete-kucing.php?idk=<?php echo $data['idk'] ?>">
													DELETE
												</a>
										   </td>
										</tr>
                                        <?php } ?>
          </tbody>
        </table>
                </div>
            </div>
        </div>

    </body>

    </html>