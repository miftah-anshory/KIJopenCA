<!DOCTYPE html>
<html>
<head>
    <title>TC(A) | <?php echo $judul; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">
</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <span>
                                <img alt="image" class="img-circle" src="<?php echo base_url(); ?>img/profile-icon.jpg" style="margin: 0 auto; display: block;" />
                            </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#" style="text-align: center;">
                                <span class="clear">
                                    <span class="block m-t-xs">
                                        <strong class="font-bold">User</strong>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="logo-element">
                            TC(A)
                        </div>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-user"></i> <span class="nav-label">Profile</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="#">Edit Profile</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-download"></i> <span class="nav-label">Download</span></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>user/logout"><i class="fa fa-sign-out"></i> <span class="nav-label">Logout</span> </a>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top  " role="navigation" style="margin-bottom: 0">
                <ul class="nav navbar-top-links navbar-left" style="margin-left: 25px">
                    <li>
                        <a href="<?php echo base_url(); ?>user/home"><h4><span class="m-r-sm text-muted welcome-message">TC(A) Keamanan Informasi dan Jaringan 2015</span></h4></a>
                    </li>
                </ul>

            </nav>
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-12">
                    <h2>Selamat Datang di TC(A) Keamanan Informasi dan Jaringan 2015</h2>
                </div>
            </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="wrapper wrapper-content">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Tentang TC(A)</h5>
                        </div>
                        <div class="ibox-content">
                            <p>
                                TC(A) adalah sebuah certification authority di mana ia bertugas untuk mengeluarkan sertifikat digital. Sebuah sertifikat digital menyatakan kepemilikan kunci publik dengan nama pelanggan pada sertifikat tersebut. TC(A) merupakan start up, sehingga kepercayaan yang diberikan masih belum terlalu tinggi dan akan menjadi tinggi setelah beberapa tahun ke depan.<br><br>
                                Cara Mendapatkan Sertikat Digital:
                                <br>1.
                                <br>2.
                                <br>3.
                                <br>4.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="footer">
                <div>
                    <strong>TC(A) Keamanan Informasi dan Jaringan 2015</strong> Teknik Informatika ITS &copy; 2015
                </div>
            </div>

        </div>
        </div>
    <script src="<?php echo base_url(); ?>js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url(); ?>js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url(); ?>js/inspinia.js"></script>
    <script src="<?php echo base_url(); ?>js/plugins/pace/pace.min.js"></script>
</body>

</html>