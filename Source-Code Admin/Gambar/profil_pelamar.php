<?php
$koneksi = mysqli_connect("localhost","root","","lowongan");

$result = mysqli_query($koneksi, "SELECT * FROM tb_user");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <link href="css/basic.css" rel="stylesheet" />
    <link href="css/custom.css" rel="stylesheet" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title> Admin Home</title>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="Admin.html">A D M I N</a>
            </div>

            <div class="header-right">   
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <a href="login_dmin.html" class="btn btn-danger" onclick="myFunction()" title="Keluar"><i class="fa fa-exclamation-circle fa-2x"></i></a>	
			<script>
				function myFunction() {
                confirm("Apakah Anda Yakin Keluar ?");
				  alert("Anda Telah Sign-out");
				}
				</script>	
            </div>
        </nav>
 
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="Gambar/img_avatar.png" class="img-thumbnail" />
                            
                            <div class="inner-text">
                                A D M I N
                            <br />
                        </li>
                    <li>
                        <a class="active-menu" href="admin.html"><i class="fa fa-home"></i>HALAMAN UTAMA
                        </a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-user-circle"></i>PROFIL PELAMAR<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="profil_pelamar.php"><i class="fa fa-toggle-on"></i>Data Pelamar</a>
                            </li>
                        </ul>
                              <li>
                        <a href="#"><i class="fa fa-info-circle"></i>PUSAT INFORMASI<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <script src='https://kit.fontawesome.com/a076d05399.js'></script>
                                <a href="Pengumuman.pdf"><i class="fas fa-hand-holding-usd"></i>Pengumuman</a>
                            </li>
                            <li>
                                <a href="kontak_pelamar.php"><i class="fa fa-flash "></i>Kontak Pelamar</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
                        <a href="perusahaan.html"><i class="fa fa-folder"></i> PERUSAHAAN & BADAN USAHA </a>
                    </li>
                    <<li>
                        <li>
                            <script src='https://kit.fontawesome.com/a076d05399.js'></script>
                            <a href="admin.html"><i class="fas fa-file-invoice"></i> LAPORAN <span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                 <li>
                                    <a href="admin.html"><i class="fa fa-desktop "></i> Hasil Seleksi </span> </a>
                                </li>
                                <li>
                                 <a href="lulus.html"><i class="fas fa-user-edit"></i>Seleksi lulus</a>
                                </li>
                                <li>
                                 <a href="belum lulus.html"><i class="fas fa-user-edit"></i>Seleksi belum lulus</a>
                                </li>
                                </ul>
                            <li>
                    <a href="#"><i class="fa fa-lock"></i> DATA ADMIN<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                     <li>
                     <a href="PROFIL_ADMIN.html"><i class="fas fa-user-edit"></i>Profil Admin</a>
                    </li>
                    <li>
                    <a href="#"><i class="fas fa-user-plus"></i>Tambah Admin</a>
                    </li>
                </ul>
                <li>
                    <a class="active-menu" href="pengiriman lowongan.html"><i class="fa fa-paper-plane"></i>PENGIRIMAN LOWONGAN</a>
                </li>
                <li>
                    <a href=""><i class="fa fa-user-circle"></i>Galeri<span class="fa arrow"></span></a>
                     <ul class="nav nav-second-level">
                        <li>
                            <a href="gambarpage.html"></i>Gambar</a>
                        </li>  
                        <li>
                            <a href="perusahaan1.html"></i>Perusahaan 1</a>
                        </li>
                        <li>
                            <a href="perusahaan2.html"></i>Perusahaan 2</a>
                        </li>
                        <li>
                            <a href="perusahaan3.html"></i>Perusahaan 3</a>
                        </li>
                        <li>
                            <a href="perusahaan4.html"></i>Perusahaan 4</a>
                        </li>
                        <li>
                            <a href="perusahaan5.html"></i>Perusahaan 5</a>
                        </li>
                        <li>
                            <a href="perusahaan6.html"><i>Perusahaan 6</a>
                        </li>
                        <li>
                            <a href="perusahaan7.html"></i>Perusahaan 7</a>
                        </li>
                        <li>
                            <a href="perusahaan8.html"></i>Perusahaan 8</a>
                        </li>
                        <li>
                            <a href="perusahaan9.html"></i>Perusahaan 9</a>
                        </li>
                        <li>
                            <a href="perusahaan10.html"></i>Perusahaan 10</a>
                        </li>
                        <li>
                            <a href="perusahaan11.html"></i>Perusahaan 10</a>
                        </li>
                        <li>
                            <a href="perusahaan12.html"></i>Perusahaan 10</a>
                        </li>
            </div>
        </nav>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line" >Data Pelamar </h1>
                    </div>
                </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Nama</th>
                                                    <th>TTL</th>
                                                    <th>Alamat</th>
                                                    <th>Telefon</th>
                                                    <th><center>Action</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                while($row=mysqli_fetch_assoc($result)):
                                                ?>
                                                <tr>
                                                    <td><?php echo $row["nama_user"]; ?></td>
                                                    <td><?php echo $row["tgl_lahir"]; ?></td>
                                                    <td><?php echo $row["alamat"]; ?></td>
                                                    <td><?php echo $row["no_telp"]; ?></td>
                                                    <td><button class="label label-info">Input</td>
                                                        <td><button class="label label-warning">Update</td>
                                                        <td><button class="label label-danger">Delete</td>
                                                </tr>
                                                <?php endwhile; ?>
                                                
                                            </tbody>
                                        </table>
                                    </div>
</div>                
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.metisMenu.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
