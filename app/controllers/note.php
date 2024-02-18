<?php

$config = require("config.php");
$db = new Database($config['database']);


$note = $db->querySingle("select * from note where user_id = 3 and id = :id", ['id' => $_GET['id']]);

//dd($notes);
$heading = "My Notes";

require "views/note.view.php";