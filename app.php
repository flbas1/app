<?php

  // If you're not logged in, just take you directly to the ecobee login page.
  if(isset($_COOKIE['session_key']) === false) {
    header('Location: http://' . $_SERVER['HTTP_HOST'] . '/api/?resource=ecobee&method=authorize&arguments={}&api_key=ER9Dz8t05qUdui0cvfWi5GiVVyHP6OB8KPuSisP2');
    die();
  }

?>

<!doctype html>
<html>
  <head>
    <title>beestat</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#222222">
    <link rel="manifest" href="/manifest.json">

    <link href="../css/dashboard.css" rel="stylesheet">
    <?php require 'js/js.php'; ?>
  </head>
  <body></body>
</html>
