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
                        <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Certificate</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="active"><a href="<?php echo base_url(); ?>user/createCA">Request Certificate</a></li>
                            <li><a href="<?php echo base_url(); ?>user/listCA">List Request</a></li>
                        </ul>
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
                        <h2>Create Your Certificate</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="<?php echo base_url(); ?>">Dashboard</a>
                            </li>
                            <li>
                                Certificate
                            </li>
                            <li>
                                <strong>Request Certificate</strong>
                            </li>
                        </ol>
                    </div>
                </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper wrapper-content">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Certificate Form</h5>
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
                            <?php echo form_open_multipart('user/insertCA');?>
                                <?php
                                    foreach($akun as $row)
                                    {
                                        $id = $row->IDUSER;
                                    }
                                ?>
                                <input required type="hidden" class="form-control" name="idUser" value="<?php echo $id;?>"/>
                                <input required type="hidden" class="form-control" name="userName" value="<?php echo $username;?>"/>
<!--                                <div class="form-group"><label class="col-lg-2 control-label">Date</label>
                                    <div class="col-lg-6">
                                        <p class="form-control-static">
                                            <?php
                                                echo date("d/m/Y");
                                            ?>
                                        </p>
                                    </div>
                                </div>
                                 <div class="form-group"><label class="col-lg-2 control-label">Name</label>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Name" class="form-control" name="nameCA" required="">
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-2 control-label">Email</label>
                                    <div class="col-lg-6">
                                        <input type="email" placeholder="Email" class="form-control" name="emailCA" required="">
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-2 control-label">Country Code</label>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Country Code Example: ID" class="form-control" name="kodeNegara" required="">
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-2 control-label">Province</label>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Province" class="form-control" name="provinsiCA" required="">
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-2 control-label">City</label>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="City" class="form-control" name="kotaCA" required="">
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-2 control-label">Organization Name</label>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Organization Name Example: ITS" class="form-control" name="organisasi_nama" required="">
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-2 control-label">Organization Unit</label>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Organization Unit Example: T. Informatika" class="form-control" name="organisasi_unit" required="">
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-2 control-label">Challenge Password</label>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Challenge Password" class="form-control" name="chPass" required="">
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-2 control-label">Optional Company</label>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Optional Company Example: LP" class="form-control" name="optionalComp" required="">
                                    </div>
                                </div> -->
                                <div class="form-group"><label class="col-lg-2 control-label">Uplaod CSR</label>
                                    <div class="col-lg-6">
                                        <input type="file" name="fileCSR" required="">
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-2 control-label"></label>
                                    <div class="col-lg-2">
                                        <button type="submit" class="btn btn-primary block full-width m-b">Submit request</button>
                                    </div>
                                </div>
                            <?php echo form_close(); ?>
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