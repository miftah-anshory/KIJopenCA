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
                                        <strong class="font-bold"><?php echo $username; ?></strong>
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
                            <li><a href="<?php echo base_url(); ?>user/viewProfile">View Profile</a></li>
                            <li><a href="<?php echo base_url(); ?>user/editProfile">Edit Profile</a></li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Create CA</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-download"></i> <span class="nav-label">Download CA</span></a>
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
                        <h2>User Profile</h2>
                        <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url(); ?>">Dashboard</a>
                        </li>
                        <li>
                            <a href="#">Profile</a>
                        </li>
                        <li class="active">
                            <strong>Edit Profile</strong>
                        </li>
                    </ol>
                    </div>
                </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper wrapper-content">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Edit Profile</h5>
                            </div>

                            <?php
                                $flash = $this->session->flashdata('success');
                                if(!empty($flash))
                                {
                                    ?>
                                    <div class='alert alert-dismissable alert-success'>
                                        <button type='button' class='close' data-dismiss='alert'>&times;</button>
                                        <?php echo $flash; ?>
                                    </div>
                                    <?php
                                }

                                unset($flash);
                                $flash = $this->session->flashdata('error');
                                
                                if(!empty($flash))
                                {
                                    ?>
                                    <div class='alert alert-dismissable alert-danger'>
                                        <button type='button' class='close' data-dismiss='alert'>&times;</button>
                                        <?php echo $flash; ?>
                                    </div>
                                    <?php
                                }
                            ?>
                            
                            <div class="ibox-content">
                            <form class="form-horizontal" method="post" action="#" role="form">
                                <?php
                                    foreach($akun as $row)
                                    {
                                        $user = $row->USERNAME;
                                        $name = $row->NAMA;
                                        $email = $row->EMAIL;
                                        $alamat = $row->ALAMAT;
                                        $kota = $row->KOTA;
                                        $provinsi = $row->PROVINSI;
                                        $telepon = $row->TELEPON;
                                    }
                                ?>
                                <div class="form-group"><label class="col-lg-2 control-label">Username</label>
                                    <div class="col-lg-10">
                                        <input type="text" placeholder="<?php echo $user?>" class="form-control" name="username">
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-2 control-label">Name</label>
                                    <div class="col-lg-10">
                                        <input type="text" placeholder="<?php echo $name?>" class="form-control" name="nameUpdate">
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-2 control-label">Email</label>
                                    <div class="col-lg-10">
                                        <input type="email" placeholder="<?php echo $email?>" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-2 control-label">Address</label>
                                    <div class="col-lg-10">
                                        <input type="text" placeholder="<?php echo $alamat?>" class="form-control" name="alamat">
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-2 control-label">City</label>
                                    <div class="col-lg-10">
                                        <input type="text" placeholder="<?php echo $kota?>" class="form-control" name="kota">
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-2 control-label">State</label>
                                    <div class="col-lg-10">
                                        <input type="text" placeholder="<?php echo $provinsi?>" class="form-control" name="provinsi">
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-2 control-label">Phone</label>
                                    <div class="col-lg-10">
                                        <input type="text" placeholder="<?php echo $telepon?>" class="form-control" name="telepon">
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-2 control-label"></label>
                                    <div class="col-lg-2">
                                        <button type="submit" class="btn btn-primary block full-width m-b">Save</button>
                                    </div>
                                </div>
                            </form>
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