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

<body class="gray-bg">
    <div class="middle-box text-center loginscreen  animated fadeInDown">
        <div>
            <div>
                <h1 class="logo-name">TC(A)</h1>
            </div>
            <h3>TC(A) Registration</h3>
            
            <?php
                if(isset($_GET['status']) && $_GET['status']=="ok")
                {
                    ?>
                    <div class='alert alert-dismissable alert-success'>
                        <button type='button' class='close' data-dismiss='alert'>&times;</button>
                        Anda Berhasil Terdaftar!
                    </div>
                    <?php
                }
                else if(isset($_GET['status']) && $_GET['status']=="gagal")
                {
                    ?>
                    <div class='alert alert-dismissable alert-danger'>
                        <button type='button' class='close' data-dismiss='alert'>&times;</button>
                        Anda Gagal Terdaftar!
                    </div>
                    <?php
                }
            ?>
            
            <form class="m-t" role="form" action="<?php echo site_url('user/insertUser'); ?>" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Name" required="" name="name">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" required="" name="email">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username" required="" name="username">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="" name="password">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Create Account</button>
                <p class="text-muted text-center"><small>Already have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="<?php echo base_url(); ?>">Login</a>
            </form>
            <p class="m-t"> <small>TC(A) &copy; 2015</small> </p>
        </div>
    </div>
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
