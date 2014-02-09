<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="../css/smoothness/jquery-ui-1.10.3.custom.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../js/jqplot/jquery.jqplot.min.css">

    <script src="../js/parse.min.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/jquery-ui.min.js"></script>
    <script src="../js/jqplot/jquery.jqplot.min.js"></script>
    <script src="../js/group.js"></script>
</head>
<body>
<nav>
    <ul>
        <li>
            Panhallenic
        </li>
        <li>
            IFC
        </li>
        <li id="logo-li">
            <img id="logo" src="../img/logo.png" />
        </li>
        <li>
            USFC
        </li>
        <li>
            Sports
        </li>
    </ul>

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