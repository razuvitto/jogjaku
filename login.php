<?php
session_start();
$sesiData = !empty($_SESSION['sesiData'])?$_SESSION['sesiData']:'';
if(!empty($sesiData['status']['msg'])){
    $statusPsn = $sesiData['status']['msg'];
    $jenisStatusPsn = $sesiData['status']['type'];
    unset($_SESSION['sesiData']['status']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login - JOGJAKU</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="images/jogjakublack.png">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a  href="index.php"><img src="images/jogjaku.png" style="width:130px; height: 50px"></a>
            </div>
             <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <?php 
                        if(!isset($_SESSION['is_login'])){
                    ?>
                    <li class="active">
                        <a href="index.php">Home</a>
                    </li>
                    <?php }else{?>
                    <li>
                     <a href="akunuser.php?logoutSubmit=1" class="logout">Logout</a>
                    </li>
                    <?php }?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
    <!-- Page Content -->

    </br>
    </br>
    </br>
    </br>
    </br>
    
    <div class="container, justify" style="margin-top: 30px;">
        <div class="col-sm-4 col-sm-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                <?php
            if(!empty($sesiData['userLoggedIn']) && !empty($sesiData['userID'])){
                include 'user.php';
                $user = new User();
                $kondisi['where'] = array(
                    'id' => $sesiData['userID'],
                );
                $kondisi['return_type'] = 'single';
                $userData = $user->getRows($kondisi);
                ?>
                <?php }
                else{ ?>
                    <h3><center>Silahkan Login</h3></br>
                    <?php echo !empty($statusPsn)?'<p class="'.$jenisStatusPsn.'">'.$statusPsn.'</p>':''; ?>
                    <div class="regisForm">
                        <form id="login-form" action="akunuser.php" method="post" role="form">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input type="text" name="email" placeholder="Masukkan alamat email" required class="form-control" />
                            </div>
                            </br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input type="password" name="password" placeholder="Password" required class="form-control" />
                            </div>
                            </br>
                            <div class="form-group">
                                <input type="submit" name="loginSubmit" value="Masuk" class="btn btn-primary btn-block">
                            </div>
                            <div class="form-group">
                                <div class="center" class="col-sm-6" style="padding: 0;">Pengguna baru? <a href="registrasi.php">Daftar disini</a></div><?php } ?>
                                <div class="col-sm-6 text-right brand" style="padding: 0;"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Footer -->
        <footer>
        <div class="row">
                <div class="col-lg-12">
                </br>
                </br>
                </br>
                   <p align="center">Copyright © 2015 jogjaku.com All Rights Reserved. Made by <a href="index.php">Vitto</a></p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
