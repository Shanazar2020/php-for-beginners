<?php

$config = require("config.php");
$db = new Database($config['database']);

$notes = $db->query("select * from note where user_id = 3");

//dd($notes);
$heading = "My Notes";

require "views/notes.view.php";