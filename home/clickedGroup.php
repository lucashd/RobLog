<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 2/8/14
 * Time: 12:48 PM
 */
session_start();

$group_name = $_GET["groupName"];

$_SESSION["selectedGroup"] = $group_name;
header( 'Location: ../group' );

?>