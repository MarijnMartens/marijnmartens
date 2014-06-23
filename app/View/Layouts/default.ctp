<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $data['title'] ?></title>
    <!--<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">-->
    <!-- Include external files and scripts here (See HTML helper for more info.) -->
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <?php
    echo $this->Html->css('bootstrap.min');
    echo $this->Html->css('stickyFooter');
    //echo $this->Html->css('custom1');

    echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js');
    echo $this->Html->script('bootstrap.min');

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>
</head>
<body>

<!-- Navigation bar -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <!-- Small screen -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index">
                <img src="app/webroot/img/logoXXXSmall.png" alt="Logo"/>
                MarijnMartens.be
            </a>
        </div>

        <div class="navbar-collapse collapse">
            <!-- Page Links -->
            <ul class="nav navbar-nav">
                <li class="<?= ($data['title'] == 'Home') ? 'active' : '' ?>"><a href="index">Home</a></li>
                <li class="<?= ($data['title'] == 'Blog') ? 'active' : '' ?>"><a href="posts">Blog</a></li>
                <li class="<?= ($data['title'] == 'Projects') ? 'active' : '' ?>"><a href="projects">Projects</a></li>
                <li class="<?= ($data['title'] == 'Contact') ? 'active' : '' ?>"><a href="contact">Contact</a></li>
            </ul>
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
            <!-- Display flash messages -->
            <?php if ($this->Session->check('Message.error')) { ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Error!</strong> <?= $this->Session->flash('error') ?>
                </div>
            <?php } elseif ($this->Session->check('Message.warning')) { ?>
                <div class="alert alert-warning alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Warning!</strong> <?= $this->Session->flash('warning') ?>
                </div>
            <?php
            } elseif ($this->Session->check('Message.success')) {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Success!</strong> <?= $this->Session->flash('success') ?>
                </div>
            <?php
            }
            ?>
            <h1>
                <?= $data['title'] ?>
            </h1>

            <p><?= $data['subtitle'] ?></p>
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