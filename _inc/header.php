<?php
    // Error loggin
//    ini_set ('display_errors', 'on');
//    ini_set ('log_errors', 'on');
//    ini_set ('display_startup_errors', 'on');
//    ini_set ('error_reporting', E_ALL);
//    $CFG->debug = 30719;

    if($pageName == "") {
        $pageName = "Home";
    }
    if($pageDescription == "") {
        $pageDescription = "Webbox is a curated list of webbtols ranging from network management tools like SMTP testing to advanced image compression and more.";
    }
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="<?php echo $pageDescription; ?>">
        <meta name="keywords" content="">
        <meta name="author" content="Tristan White">

        <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicon-16x16.png">
        <link rel="manifest" href="../assets/img/site.webmanifest">
        <link rel="mask-icon" href="../assets/img/safari-pinned-tab.svg" color="#002b36">
        <link rel="shortcut icon" href="../assets/img/favicon.ico">
        <meta name="msapplication-TileColor" content="#002b36">
        <meta name="msapplication-config" content="../assets/img/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">

        <!-- Bootstrap CSS - https://bootswatch.com/solar/-->
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
        <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">

        <!-- highligh.js -->
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.6/styles/default.min.css">

        <!-- Fontawesome -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="../assets/css/app.css">

        <title>Webbox - <?php echo $pageName; ?></title>

    </head>
  <body>