<!doctype html>
<html lang="en">
<head>
    <!--
        Author:     Ang Siew Hong (P7043360)
        Completed:  07 Jan 2018
        Notes:      CA02 Assignment
     -->
   <title>M+ Montessori Admin</title>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
   <!-- Font Awesome CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="<?php echo url_for('/stylesheets/admin_styles.css'); ?>">
</head>
<body>
   <header>
      <div class="admin_header container-fluid">
         <h1>M+ Montessori Admin Area</h1>
      </div>
      <nav class="main_menu container">
         <div class="btn btn-block"><strong>User: <?php echo $_SESSION['username'] ?? ''; ?></strong></div>
         <a class="btn btn-block mt-0" href="<?php echo url_for('/admin/index.php') ?>">&laquo; Main Menu</a>
         <a class="btn btn-block mt-0" href="<?php echo url_for('/admin/logout.php') ?>">&laquo; Logout</a>
      </nav>
   </header>
   <div class="container mt-4">
      <?php echo display_session_message(); ?>
   </div>


