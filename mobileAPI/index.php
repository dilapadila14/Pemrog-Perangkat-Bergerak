<!DOCTYPE html>
<html>
<head>
	<title>Materi Mobile</title>
	    <!-- Load file bootstrap.min.css yang ada di folder css -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        .align-middle {
            vertical-align: middle !important;
        }
    </style>
</head>
<body bgcolor="#fafafc">
    <div class="content">

	    <div style="center">
	        <center>
	            <h2 align="center">LATIHAN API SERVICE</h2>
	            <h2 align="center">MOBILE</h2>
	        </center>
	    </div>
	<div class="badan">
	    
	<nav class="navbar navbar-inverse" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php" style="color: white";><b>Home</b></a>
 
            </div>
        </div>
    </nav>    
	<?php
    include "page.php";
    $nquery = mysqli_query($koneksi,"SELECT * FROM materi");
    ?>

    <form action="" method="post">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
            <tr>
                <th class="text-center">NO</th>
                <th class="text-center">NIM</th>
                <th class="text-center">NAMA</th>
                <th class="text-center">PROGRAM STUDI</th>
                <th class="text-center">KELAS</th>
            </tr>
            <tbody>
		<?php

		    $data=1;                
			
			while($crow = mysqli_fetch_array($nquery)){
			?>
				<tr>
				<td align="center"><?php echo $data ?></td>
                <td align="center"><?php echo $crow['NIM'];?></td>
                <td align="center"><?php echo $crow['Nama'];?></td>
                <td align="center"><?php echo $crow['progdi'];?></td>
                <td align="center"><?php echo $crow['kelas'];?></td>
				</tr>
				<?php $data++; } ?>
			<?php
			
		?>
		</tbody>
        </table>
	    <div class="col-lg-2">
	    </div>
    </form>
    
    <div id="footer">
        <h4 align="center">Copyright 2021 </br> </h4>
    </div>

</body>
</html>
