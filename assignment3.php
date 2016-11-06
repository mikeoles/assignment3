<?php
  require_once 'ChildClass.php';
  $fantasyTeam = new ChildClass("Ball So Hard University","Buffalo Fantasy","ESPN",2016);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Fantasy Football Team</title>
  </head>

  <body>
    <h1>2016 Fantasy Football League Results</h1>

    <section>
      <p>Here is my fantasy football team</p>
      <?= $; ?>

      <p>After the draft i'm ready for the season</p>
      <?= $fantasyTeam; ?>

      <p>I've had a tough start to the season</p>
      <?= $fantasyTeam; ?>

      <p>But added a few good players</p>
      <?= $fantasyTeam; ?>

      <p>And won some games</p>
      <?= $fantasyTeam; ?>

      <p>Fantasy Football Champion!</p>
      <?= $fantasyTeam; ?>
    </section>

  </body>
</html>
