<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>PlayVad - Vi reder ut streamingdjungeln</title>
    <link rel="icon" href="favicon.ico">
	  <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"><!-- font awesome -->

  </head>

<body>

  <!-- Navbar -->
  <nav>
    <a href="#/" id="hamburger" class="toggleNav nav-link border-menu">Meny</a>
    <div class="brandname">
      <h2>Play<span class="special-font marketing-title">Vad</span></h2>
    </div>
    <div class="open-links" id="open-links-id">
      <a class="nav-link <?= basename($_SERVER['REQUEST_URI']) == "index.php" ? "selected" : ""; ?>" href="index.php">Hem</a>
      <a class="nav-link <?= basename($_SERVER['REQUEST_URI']) == "streaming.php" ? "selected" : ""; ?>" href="streaming.php">Streamingtjänster</a>
      <a class="nav-link <?= basename($_SERVER['REQUEST_URI']) == "about.php" ? "selected" : ""; ?>" href="about.php">Om PlayVad</a>
    </div>
  </nav>
