<?php
$db_name = "db_store";
$db = new PDO('mysql:host=localhost;dbname='.$db_name,'root','',
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

