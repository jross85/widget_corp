<?php
define("DB_SERVER", "localhost");
define("DB_USER", "widget_cms");
define("DB_PASS", "justinross");
define("DB_NAME", "widget_corp");

//Create a database connection
$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

//Test if connection occured.
if (mysqli_connect_errno()) {
  die("Database connection failed: " .
  " (" . mysqli_connect_errno() . ")"
);
}
 ?>
