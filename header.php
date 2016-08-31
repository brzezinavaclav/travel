<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Traveling portal</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap-datetime-picker.min.css" rel="stylesheet">
    <link href="css/flag-icon-min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
</head>
<body>
<div class="alert alert-info alert-dismissible" id="header-notice" role="alert">
    <div class="container">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Warning!</strong> Better check yourself, you're not looking too good.
    </div>
</div>
<nav class="navbar navbar-default navbar-static-top" id="primary">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="./">Travel company</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <form class="navbar-form navbar-right">
                <button class="btn btn-primary" data-toggle="modal" data-target="#loginModal">Login</button>
                <button class="btn btn-default" data-toggle="modal" data-target="#registrationModal">Register</button>
                <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="fa fa-globe"></span> <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="#"><span class="flag-icon flag-icon-au"></span> Australia</a></li>
                        <li><a href="#"><span class="flag-icon flag-icon-um"></span> United States</a></li>
                        <li><a href="#"><span class="flag-icon flag-icon-cz"></span> Czech republic</a></li>
                    </ul>
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Support</a></li>
                <li><a href="#">Gift cards</a></li>
                <li><a href="#">My rewards</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>
<nav class="navbar navbar-default navbar-static-top" id="secondary">
    <div class="container">
        <ul class="nav navbar-nav navbar-left">
            <li><a href="flights.php"><span class="fa fa-plane"></span> Flights</a></li>
            <li><a href="flights.php"><span class="fa fa-bed"></span> Hotels</a></a></li>
            <li><a href="flights.php"><span class="fa fa-sun-o"></span> Holidays</a></li>
            <li><a href="flights.php"><span class="fa fa-briefcase"></span> Flight+Hotel</a></li>
            <li><a href="flights.php"><span class="fa fa-bus"></span> Bus</a></li>
            <li><a href="flights.php"><span class="fa fa-train"></span> Trains</a></li>
        </ul>
    </div><!-- /.container -->
</nav>