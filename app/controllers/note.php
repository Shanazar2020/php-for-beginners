<?php

$config = require("config.php");
$db = new Database($config['database']);


$note = $db->querySingle("select * from note where id = :id",
    [
        'id' => $_GET['id']
    ]);

if (! $note){
    abort();
}

$currentUserId = 3;
if (intval($note['user_id']) !== $currentUserId){
    abort(Response::FORBIDDEN);
}


$heading = "My Notes";

require "views/note.view.php";