<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $data['title'] ?></title>
    <!--<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">-->
    <!-- Include external files and scripts here (See HTML helper for more info.) -->
    <?php

    echo $this->Html->css('bootstrap.min');
    echo $this->Html->css('stickyFooter');
    echo $this->Html->css('custom1');

    echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js');
    echo $this->Html->script('bootstrap.min');

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>
</head>
<body>

<!-- Navigation bar -->
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <!-- Small screen -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index">MarijnMartens.be</a>
        </div>

        <div class="navbar-collapse collapse">
            <!-- Page Links -->
            <ul class="nav navbar-nav">
                <li><a href="about">About</a></li>
                <li><a href="archive">Archive</a></li>
                <li><a href="contact">Contact</a></li>
            </ul>
            <!-- Login Form -->
            <form class="navbar-form navbar-right" action="login" method="POST" role="form">
                <input type="hidden" name="url" value="currentPage">

                <div class="form-group">
                    <input type="text" name="username" placeholder="Username" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Password" class="form-control">
                </div>
                <button type="submit" class="btn btn-success" name="btn" value="login">Login</button>
            </form>
        </div>
        <!--/.navbar-collapse -->
    </div>
    <!-- End container navbar -->
</div>
<!-- End navbar -->
<div id="wrap"><!-- Page content in wrapper for footer -->
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1><?= $data['title'] ?></h1>
            <h3><?= $data['subtitle'] ?></h3>
        </div>
    </div>

    <div class="container"><!-- Content page -->
        <?php echo $this->fetch('content'); ?>
    </div>
    <!-- End content page -->
    <div id="push"></div>
</div>
<!-- End page content -->

<footer class="footer">
    <div class="container">
        <p>&copy; 2014 Marijn Martens</p>
    </div>
</footer>
</body>
</html>