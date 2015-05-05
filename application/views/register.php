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
                    <input type="password" class="form-control" placeholder="Password" required="" name="password" id="pass1">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Re-type Password" required="" name="rePassword" id="pass2" onkeyup="checkPass(); return false;">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b" id="submit">Create Account</button>
                <a class="btn btn-sm btn-white btn-block" href="<?php echo base_url(); ?>">Login</a>
            </form>
            
            <p class="m-t"> <small>TC(A) &copy; 2015</small> </p>
        </div>
    </div>
    <script src="<?php echo base_url(); ?>js/checkPass.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
</body>

</html>
