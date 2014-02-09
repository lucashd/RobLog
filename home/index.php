<?php
    session_start();
    $_SESSION["selectedGroup"] = "";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="../css/smoothness/jquery-ui-1.10.3.custom.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="../js/parse.min.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/jquery-ui.min.js"></script>

    <script src="../js/highcharts/js/highcharts.js"></script>
    <script src="../js/highcharts/js/modules/exporting.js"></script>
    <script src="../js/scripts.js"></script>


</head>
<body>
<nav>
    <ul>
        <li>
            Panhellenic
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

    <div id="groups-chart"></div>
    <div id="groups-header" class="contentHeader">
        Groups
        <input id="add-group-btn" type="button" value="Add Group"/>
    </div>

    <table id="groups-table" class="contentTable">
        <thead>
            <tr>

            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>

    <div id="add-group-dialog">
        <div class="dialogLabel">
            New Group Name
            <input id="new-group-name" type="text"/>
        </div>
    </div>
</div>

</body>
</html>