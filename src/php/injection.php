<?php

// connect to database

$id = $_POST['id'];
mysql_query("select * from table where id = $id");
