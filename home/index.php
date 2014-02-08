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
    <script src="../js/scripts.js"></script>
</head>
<body>
<div id="groups">
    <div id="container">
        <div id="groups-header" class="contentHeader">
            Groups
            <input id="add-group-btn" type="button" value="Add Group"/>
        </div>
        <table id="groups-table" class="contentTable">
            <thead>

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
</div>
</body>
</html>