<!DOCTYPE html>
<html lang="en">
<head>
  <title>Art Face</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!--background image-->
  <style>
body, html {
    height: 100%;
    margin: 0;
}

.bg {
    /* The image used */
    background-image: url("images/artbrush.jpg");

    /* Full height */
    height: 50%;

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
</head>
<body>

<div class="bg"></div>

<!--NAVIGATION-->
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Art Face</a>
      </div>
      <ul class="nav navbar-nav">
        <? if ($slug == 'index') { ?>
        <li class="active"><a href="#">Home</a></li>
      <? } else { ?>
        <li><a href="index.php">Home</a></li>
      <? } ?>

        <? if ($slug == 'about') { ?>
        <li class="active"><a href="#">About</a></li>
<? } else { ?>
  <li><a href="about.php">About</a></li>
<?  }?>

          <? if ($slug == 'gallery') { ?>
        <li class="active"><a href="#">Gallery</a></li>
<? } else { ?>
  <li><a href="gallery.php">Gallery</a></li>
  }?>
<?  }?>

          <? if ($slug == 'lessons') { ?>
        <li class="active"><a href="#">Lessons</a></li>
<? } else { ?>
  <li><a href="lessons.php">Lessons</a></li>
<?  }?>

      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Sign Up</a></li>
    </ul>
    </div>
  </nav>
