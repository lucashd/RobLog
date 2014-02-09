<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Group</title>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/smoothness/jquery-ui-1.10.3.custom.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="../js/parse.min.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/jquery-ui.min.js"></script>

    <script src="../js/highcharts/js/highcharts.js"></script>
    <script src="../js/highcharts/js/modules/exporting.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="../js/group.js"></script>
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Panhellenic <b class="caret"></b></a>
                <ul class="dropdown-menu" id="panhellenic">
                    <li><a href="#">Kappa Alpha Theta</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">IFC <b class="caret"></b></a>
                <ul class="dropdown-menu" id="ifc">
                    <li><a href="#">Phi Sig</a></li>
                </ul>
            </li>
            <li><a href="#"><img id="logo" src="../img/logo.png"></a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">USFC <b class="caret"></b></a>
                <ul class="dropdown-menu" id="usfc">
                    <li><a href="#">Chi Delta Theta</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sports <b class="caret"></b></a>
                <ul class="dropdown-menu" id="sports">
                    <li><a href="#">Men's Soccer</a></li>
                </ul>
            </li>

        </ul>
    </div><!-- /.navbar-collapse -->
</nav>
<div id="container">
    <div id="groups-header" class="contentHeader">
        <div id="group-name">
        <?php
            echo $_SESSION["selectedGroup"];
        ?>
        </div>
        Members
    </div>

    <table id="members-table" class="contentTable">
        <thead>

        </thead>
        <tbody>

        </tbody>
    </table>
</div>

</body>
</html>