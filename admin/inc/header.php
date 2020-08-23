<?php
  include "inc/dbh.php";
  session_start();

  if(!isset($_SESSION["username"])){
    header("Location: {$hostname}/admin/");
  }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>ADMIN Panel</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="css/font-awesome.css">
        <!-- Custom stlylesheet -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <!-- HEADER -->
        <div id="header-admin"  style="background:#011F26;">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-md-2">
                        <a href="post.php"><img class="logo" src="images/quranportal.png"></a>
                    </div>
                    <!-- /LOGO -->
                      <!-- LOGO-Out -->
                    <div class="col-md-offset-9 col-md-3">
                        <a href="logout.php" class="btn btn-primary btn-lg pull-right" role="button" aria-disabled="true">Log Out</a>
                    </div>
                    <!-- /LOGO-Out -->
                </div>
            </div>
        </div>
        <!-- /HEADER -->
        <!-- Menu Bar -->
        <div id="admin-menubar" style="background:#0D0007; color:#fff;" >
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                       <ul class="admin-menu" >
                            <li>
                                <a href="post.php" style="color:#fff;">Post</a>
                            </li>
                            <?php
                                if($_SESSION["user_role"] == '1'){
                              ?>
                              <li>
                                  <a href="users.php" style="color:#fff;">users</a>
                              </li>
                              <?php
                                }
                              ?>
                          </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Menu Bar -->
